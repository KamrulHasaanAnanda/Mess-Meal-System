<?php

$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "webtec";

$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

if(mysqli_connect_errno()){
  echo "Error: ".mysqli_connect_err();
}

//////////////////////////
function getData($query){
	$connection=mysqli_connect('localhost','root','','webtec');
	if($connection){
		$result = mysqli_query($connection,$query);
		mysqli_close($connection);
		return $result;
	}
}

function insertData($query){
	$connection=mysqli_connect('localhost','root','','webtec');
	if($connection){
		$result= mysqli_query($connection,$query);
		mysqli_close($connection);
		if($result){
			$result = true;
		}
		else{
			$result = false;
		}
		return $result;
	}
}


?>
