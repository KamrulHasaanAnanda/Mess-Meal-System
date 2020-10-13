<?php
  include "includes/db_connect.inc.php";
  session_start();

  if(!isset($_SESSION["u_name"])){
    header("Location: login.php");

  }
$username=$_SESSION["u_name"];
$query="SELECT SUM(number) AS `totalmeal` FROM mealtable WHERE username ='$username'";
 $result = getData($query);
$data=mysqli_fetch_assoc($result);
$total = $data['totalmeal'];
$_SESSION['total_meal'] = $total;

// total cost
$query1="SELECT SUM(money) AS `totalcost` FROM mealtable WHERE username ='$username'";
 $result1 = getData($query1);
$data1=mysqli_fetch_assoc($result1);
$total_cost = $data1['totalcost'];
$_SESSION['total_cost'] = $total_cost;



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Total Meal</title>
      <link rel="stylesheet" href="totalmeal.css">
  </head>
  <body>
      <h1 id="head">Total Meal</h1>
      <h2 id="un"><span id="u">User name:</span> &nbsp; <?php echo $_SESSION["u_name"]; ?></h2>
      <h2 id="un"><span id="u">Total meal this month: </span> &nbsp; <?php echo $_SESSION["total_meal"]; ?></h2>
      <h2 id="un"><span id="u">Total meal cost: </span> &nbsp; <?php echo $_SESSION["u_name"]; ?></h2>
      <h2 id="un"><span id="u">Total Cost: </span> &nbsp; <?php echo $_SESSION["total_cost"]; ?></h2>
      <button id="l"><a href="logout.php">Logout</a></button>


  </body>
</html>
