<?php
include "includes/db_connect.inc.php";
$phone = $uName = $uPass = $uEmail = $err = $uNameInDB = "" ;


/* mysqli_real_escape_string() helps prevent sql injection */
if($_SERVER["REQUEST_METHOD"]=="POST"){
  if(!empty($_POST['phone'])){
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  }
  if(!empty($_POST['username'])){
    $uName = mysqli_real_escape_string($conn, $_POST['username']);
  }
  if(!empty($_POST['password_1'])){
    $uPass = mysqli_real_escape_string($conn, $_POST['password_1']);
    $uPassToDB = password_hash($uPass, PASSWORD_DEFAULT);
  }
  if(!empty($_POST['email'])){
    $uEmail = mysqli_real_escape_string($conn, $_POST['email']);
  }

  $sqlUserCheck = "SELECT username FROM users WHERE username = '$uName'";
  $result = mysqli_query($conn, $sqlUserCheck);

  while($row = mysqli_fetch_assoc($result)){
    $uNameInDB = $row['username'];
  }

  if($uNameInDB == $uName){
    $err = "UserName already exists!";
  }
  else{
    $sql = "INSERT INTO users (username, email,phone, password)
            VALUES ('$uName','$uEmail','$phone', '$uPassToDB');";

    mysqli_query($conn, $sql);
    header("Location: login.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
</head>
<body>
	<div class="container">
		<h1>Registration</h1>
		<form method="POST" action="registration.php"  id="registration_form">
         <div>
				<input type="text" id="form_fname" name="username" value="" required="">
				<span class="error_form" id="fname_error_message"></span>
				<label>
					User Name
				</label>
			</div>
			<div>
				<input type="number" id="form_phone" name="phone" value="" required="">
				<span class="error_form" id="phone_error_message"></span>
				<label>
					Phone
				</label>
			</div>
			<div>
				<input type="email" id="form_email" name="email" value="" required="">
				<span class="error_form" id="email_error_message"></span>
				<label>Email id</label>
			</div>
			<div>
				<input type="password" id="form_password" name="password_1" value="" required="">
				<span class="error_form" id="password_error_message"></span>
				<label>Password</label>
			</div>
			<div>
				<input type="password" id="form_retype_password" name="password_2" value="" required="">
				<span class="error_form" id="retype_password_error_message"></span>
				<label>Re-Enter Password</label>
			</div>
			<input type="submit" value="Register" name="register">
		</form>
	</div>
	<script type="text/javascript">
      $(function() {

         $("#fname_error_message").hide();
         $("#phone_error_message").hide();
         $("#email_error_message").hide();
         $("#password_error_message").hide();
         $("#retype_password_error_message").hide();

         var error_fname = false;
         var error_phone = false;
         var error_email = false;
         var error_password = false;
         var error_retype_password = false;

         $("#form_fname").focusout(function(){
            check_fname();
         });
         $("#form_phone").focusout(function() {
            check_phone();
         });
         $("#form_email").focusout(function() {
            check_email();
         });
         $("#form_password").focusout(function() {
            check_password();
         });
         $("#form_retype_password").focusout(function() {
            check_retype_password();
         });

         function check_fname() {
            var pattern = /^[a-zA-Z]*$/;
            var fname = $("#form_fname").val();
            if (pattern.test(fname) && fname !== '') {
               $("#fname_error_message").hide();
               $("#form_fname").css("border-bottom","2px solid #34F458");
            } else {
               $("#fname_error_message").html("Should contain only Characters");
               $("#fname_error_message").show();
               $("#form_fname").css("border-bottom","2px solid #F90A0A");
               error_fname = true;
            }
         }

         function check_phone() {
            //var pattern = /^[a-zA-Z]*$/;
            var p = $("#form_phone").val().length;
            if (p <= 11) {
               $("#phone_error_message").hide();
               $("#form_phone").css("border-bottom","2px solid #34F458");
            } else {
               $("#phone_error_message").html("number should contain 11 digit");
               $("#phone_error_message").show();
               $("#form_phone").css("border-bottom","2px solid #F90A0A");
               error_phone = true;
            }
         }

         function check_password() {
            var password_length = $("#form_password").val().length;
            if (password_length < 8) {
               $("#password_error_message").html("Atleast 8 Characters");
               $("#password_error_message").show();
               $("#form_password").css("border-bottom","2px solid #F90A0A");
               error_password = true;
            } else {
               $("#password_error_message").hide();
               $("#form_password").css("border-bottom","2px solid #34F458");
            }
         }

         function check_retype_password() {
            var password = $("#form_password").val();
            var retype_password = $("#form_retype_password").val();
            if (password !== retype_password) {
               $("#retype_password_error_message").html("Passwords Did not Matched");
               $("#retype_password_error_message").show();
               $("#form_retype_password").css("border-bottom","2px solid #F90A0A");
               error_retype_password = true;
            } else {
               $("#retype_password_error_message").hide();
               $("#form_retype_password").css("border-bottom","2px solid #34F458");
            }
         }

         function check_email() {
            var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var email = $("#form_email").val();
            if (pattern.test(email) && email !== '') {
               $("#email_error_message").hide();
               $("#form_email").css("border-bottom","2px solid #34F458");
            } else {
               $("#email_error_message").html("Invalid Email");
               $("#email_error_message").show();
               $("#form_email").css("border-bottom","2px solid #F90A0A");
               error_email = true;
            }
         }

         $("#registration_form").submit(function() {
            error_fname = false;
            error_phone = false;
            error_email = false;
            error_password = false;
            error_retype_password = false;

            check_fname();
            check_phone();
            check_email();
            check_password();
            check_retype_password();

            if (error_fname === false && error_phone === false && error_email === false && error_password === false && error_retype_password === false) {
               alert("Registration Successfull");
               return true;
            } else {
               alert("Please Fill the form Correctly");
               return false;
            }
         });
      });
   </script>
</body>
</html>
