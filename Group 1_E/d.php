<?php
  session_start();

  if(!isset($_SESSION["u_name"])){
    header("Location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    	<link rel="stylesheet" type="text/css" href="d.css">

  </head>
  <body>
    
      <div class="w">
           <h1>Welcome,<?php echo $_SESSION["u_name"]; ?> </h1>
      </div>
       <div class="t">
           <h1 id="ti" ><?php echo "Today is " . date("Y/m/d") . "<br>"?></h1>
      </div>
      <script type="text/javascript">
          console.log("its working");
               function showtime(){
                   var date=new date();
                   var h=today.getHours();
                   var m=today.getMinutes():
                   var s=today.getSeconds();
                   m=checkTime(m);
                   s=chechYime(s);
                  // document.getElementById('ti').innerHTML=h + ":" + m + ":" + s;
                   var t= setTimeout(startTime,500);
                   console.log(t);
               }
          function chechTime(i){
              if(i<10){ i = "0" + i;
                      }
              return i;
             }
           </script>
      <div id="sidebar">
          <div class="t-b">
          <span>
          </span>
          <span>
          </span>
          <span>
          </span>    
          </div>
          <ul>
              <li><a href="Homepage.html">Home </a></li>
              <li><a href="About.html">About </a></li>
              <li> <a href="logout.php">Logout</a></li>
          </ul>
      </div>
      <div class="mav">
          <a href="mealsavailable.php"><h1>Meals Available</h1></a>
      
      </div>
       <div class="pma">
           <a href="placemeal.php"><h1>Place Meal</h1></a>
      </div>
      <div class="tma">
          <a href="totalmeal.php"><h1>Total Meal</h1></a>
      </div>
  </body>
</html>
