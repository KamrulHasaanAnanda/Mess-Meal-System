<?php
include "includes/db_connect.inc.php";
session_start();
$uPass = $uName = $message = "";

/* mysqli_real_escape_string() helps prevent sql injection */
if($_SERVER["REQUEST_METHOD"] == "POST"){

	if(!empty($_POST['u_name'])){
		$uName = mysqli_real_escape_string($conn, $_POST['u_name']);
	}
	if(!empty($_POST['u_pass'])){
		$uPass = mysqli_real_escape_string($conn, $_POST['u_pass']);
	}

	$sqlUserCheck = "SELECT username, password FROM users WHERE username = '$uName'";
	$result = mysqli_query($conn, $sqlUserCheck);
	$rowCount = mysqli_num_rows($result);

	if($rowCount < 1){
		$message = "User does not exist!";
	}
	else{
		while($row = mysqli_fetch_assoc($result)){
			$uPassInDB = $row['password'];

			if(password_verify($uPass, $uPassInDB)){
				$_SESSION['u_name'] = $uName;
				header("Location: d.php");
			}
			else{
				$message = "Wrong Password!";
			}
		}
	}
}

?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
  	<title>Login</title>
  	<link rel="stylesheet" type="text/css" href="style.css">
  	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  </head>
  <body>
  	<div class="container">
  		<h1>Login</h1>
  		<form method="POST" action="login.php"  id="registration_form">
           <div>
  				<input type="text" id="form_fname" name="u_name" value="" required="">
  				<label>
  					User Name
  				</label>
  			</div>
        <div>
          <input type="password" id="form_password" name="u_pass" value="" required="">
          <label>Password</label>
        </div>
        <input type="submit" value="Login" name="login">
        <span style="color:red"><?php echo $message; ?></span>
        <span><b>Or Register <a href="registration.php">here</a></b></span>
      </form>
</body>
</head>
</html>
