<?php
  include "includes/db_connect.inc.php";
  session_start();

  if(!isset($_SESSION["u_name"])){
    header("Location: login.php");

  }


//$uname=$da1=$da2=$da3=$da4=$da5=$da6=$da7=$da88=$da9=$da10=$da11=$da12=$da13=$da14=$da15=$da16=$da17=$da18=$da19=$da20=$da21=$da22=$da23=$da24=$da25=$da26=$da27=$da28=$da29=$da30="";

if(isset($_POST['d1']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day1'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result)>0){
            echo 'Alredy Submitted';
        }
        else{
            MeleInsert($username,'day1',$number,$meal_cost);
        }

    }
    else{
        MeleInsert($username,'day1',$number,$meal_cost);
    }


}
if(isset($_POST['d2']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day2'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'alredy submited';
        }
        else{
             MeleInsert($username,'day2',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day2',$number,$meal_cost);
    }


}


if(isset($_POST['d3']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day3'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'alredy submited';
        }
        else{
             MeleInsert($username,'day3',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day3',$number,$meal_cost);
    }
}
if(isset($_POST['d4']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day4'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'alredy submited';
        }
        else{
             MeleInsert($username,'day4',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day4',$number,$meal_cost);
    }
}
if(isset($_POST['d5']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day5'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'alredy submited';
        }
        else{
             MeleInsert($username,'day5',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day5',$number,$meal_cost);
    }
}
if(isset($_POST['d6']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day6'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'alredy submited';
        }
        else{
             MeleInsert($username,'day6',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day6',$number,$meal_cost);
    }
}
if(isset($_POST['d7']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day7'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'alredy submited';
        }
        else{
             MeleInsert($username,'day7',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day7',$number,$meal_cost);
    }


}if(isset($_POST['d8']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day8'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'alredy submited';
        }
        else{
             MeleInsert($username,'day8',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day8',$number,$meal_cost);
    }


}if(isset($_POST['d9']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day9'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'already submited';
        }
        else{
             MeleInsert($username,'day9',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day9',$number,$meal_cost);
    }


}if(isset($_POST['d10']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day10'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'alredy submited';
        }
        else{
             MeleInsert($username,'day10',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day10',$number,$meal_cost);
    }


}if(isset($_POST['d11']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day11'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'alredy submited';
        }
        else{
             MeleInsert($username,'day11',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day11',$number,$meal_cost);
    }


}if(isset($_POST['d12']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day12'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'alredy submited';
        }
        else{
             MeleInsert($username,'day12',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day12',$number,$meal_cost);
    }


}if(isset($_POST['d13']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day13'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'alredy submited';
        }
        else{
             MeleInsert($username,'day13',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day13',$number,$meal_cost);
    }


}if(isset($_POST['d14']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day14'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'alredy submited';
        }
        else{
             MeleInsert($username,'day14',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day14',$number,$meal_cost);
    }


}if(isset($_POST['d15']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day15'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'already submited';
        }
        else{
             MeleInsert($username,'day15',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day15',$number,$meal_cost);
    }


}if(isset($_POST['d16']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day16'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'alredy submited';
        }
        else{
             MeleInsert($username,'day16',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day16',$number,$meal_cost);
    }


}if(isset($_POST['d17']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day17'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'already submited';
        }
        else{
             MeleInsert($username,'day17',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day17',$number,$meal_cost);
    }


}if(isset($_POST['d18']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day18'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'already submited';
        }
        else{
             MeleInsert($username,'day18',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day18',$number,$meal_cost);
    }


}if(isset($_POST['d19']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day19'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'already submited';
        }
        else{
             MeleInsert($username,'day19',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day19',$number,$meal_cost);
    }


}if(isset($_POST['d20']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day20'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'already submited';
        }
        else{
             MeleInsert($username,'day20',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day20',$number,$meal_cost);
    }


}if(isset($_POST['d21']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day21'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'already submited';
        }
        else{
             MeleInsert($username,'day21',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day21',$number,$meal_cost);
    }


}if(isset($_POST['d22']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day22'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'already submited';
        }
        else{
             MeleInsert($username,'day22',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day22',$number,$meal_cost);
    }


}if(isset($_POST['d23']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day23'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'already submited';
        }
        else{
             MeleInsert($username,'day23',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day23',$number,$meal_cost);
    }


}if(isset($_POST['d24']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day24'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'already submited';
        }
        else{
             MeleInsert($username,'day24',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day24',$number,$meal_cost);
    }


}if(isset($_POST['d25']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day25'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'already submited';
        }
        else{
             MeleInsert($username,'day25',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day25',$number,$meal_cost);
    }


}if(isset($_POST['d26']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day26'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'already submited';
        }
        else{
             MeleInsert($username,'day26',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day26',$number,$meal_cost);
    }


}if(isset($_POST['d27']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day27'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'already submited';
        }
        else{
             MeleInsert($username,'day27',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day27',$number,$meal_cost);
    }


}if(isset($_POST['d28']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day28'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'already submited';
        }
        else{
             MeleInsert($username,'day28',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day28',$number,$meal_cost);
    }


}if(isset($_POST['d29']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day29'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'alreqdy submited';
        }
        else{
             MeleInsert($username,'day29',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day29',$number,$meal_cost);
    }


}if(isset($_POST['d30']))
{
    $username=$_SESSION["u_name"];
    $meal_cost = $_POST['money'];
    $number=2;
    $query = "SELECT * FROM mealtable WHERE username = '$username'";
    $result = getData($query);
    if(mysqli_num_rows($result)>0){

        $sql = "SELECT * FROM mealtable WHERE username = '$username' AND Day = 'day30'";
        $result1 = getData($sql);
        if(mysqli_num_rows($result1) > 0){
            echo 'already submited';
        }
        else{
             MeleInsert($username,'day30',$number,$meal_cost);
        }
    }
    else{
        MeleInsert($username,'day30',$number,$meal_cost);
    }


}
//if(isset($_POST['d2']))
//{
//    $username=$_SESSION["u_name"];
//    $query = "SELECT * FROM mealtable WHERE username = '$username'";
//    $result = getData($query);
//
//    $row = mysqli_fetch_assoc($result);
//     if($row['Day'] != 'day2' ){
//         MeleInsert($username,'day2');
//    }
//    else{
//       echo 'Alredy inserted';
//    }
//}
//

//    $username=$_SESSION["u_name"];
//    $query = "SELECT * FROM mealtable WHERE username = '$username'";
//    $result = getData($query);
//    $row = mysqli_fetch_assoc($result);
//    echo $row['Day'];

//}

//     $username=$_SESSION["u_name"];
//    $query = "SELECT * FROM mealtable WHERE username = '$username'";
//    $result = getData($query);
//    $row = mysqli_fetch_assoc($result);
//    foreach($row as $data){
//        echo $data;
//
//    }







//if(isset($_POST['d2']))
//{
//    $username=$_SESSION["u_name"];
//    $query = "SELECT * FROM mealtable WHERE username = '$username'";
//    $result = getData($query);
//    if(mysqli_num_rows($result)>0){
//
//        $row = mysqli_fetch_assoc($result);
//        if($row['Day'] != 'day2' ){
//           MeleInsert($username,'day2');
//        }
//        else{
//            echo 'Alredy inserted';
//         }
//
//    }
//    else{
//        MeleInsert($username,'day2');
//    }
//
//
//}
//if(isset($_POST['d3']))
//{
//    $username=$_SESSION["u_name"];
//    $query = "SELECT * FROM mealtable WHERE username = '$username'";
//    $result = getData($query);
//    if(mysqli_num_rows($result)>0){
//
//        $row = mysqli_fetch_assoc($result);
//        if($row['Day'] != 'day3' ){
//           MeleInsert($username,'day3');
//        }
//        else{
//            echo 'Alredy inserted';
//         }
//
//    }
//    else{
//        MeleInsert($username,'day3');
//    }
//
//
//}
//if(isset($_POST['d4']))
//{
//    $username=$_SESSION["u_name"];
//    $query = "SELECT * FROM mealtable WHERE username = '$username'";
//    $result = getData($query);
//    if(mysqli_num_rows($result)>0){
//
//        $row = mysqli_fetch_assoc($result);
//        if($row['Day'] != 'day4' ){
//           MeleInsert($username,'day4');
//        }
//        else{
//            echo 'Alredy inserted';
//         }
//
//    }
//    else{
//        MeleInsert($username,'day4');
//    }
//
//
//}
//if(isset($_POST['d5']))
//{
//    $username=$_SESSION["u_name"];
//    $query = "SELECT * FROM mealtable WHERE username = '$username'";
//    $result = getData($query);
//    if(mysqli_num_rows($result)>0){
//
//        $row = mysqli_fetch_assoc($result);
//        if($row['Day'] != 'day5' ){
//           MeleInsert($username,'day5');
//        }
//        else{
//            echo 'Alredy inserted';
//         }
//
//    }
//    else{
//        MeleInsert($username,'day5');
//    }
//
//
//}
//if(isset($_POST['d6']))
//{
//    $username=$_SESSION["u_name"];
//    $query = "SELECT * FROM mealtable WHERE username = '$username'";
//    $result = getData($query);
//    if(mysqli_num_rows($result)>0){
//
//        $row = mysqli_fetch_assoc($result);
//        if($row['Day'] != 'day6' ){
//           MeleInsert($username,'day6');
//        }
//        else{
//            echo 'Alredy inserted';
//         }
//
//    }
//    else{
//        MeleInsert($username,'day7');
//    }
//
//
//}
//if(isset($_POST['d7']))
//{
//    $username=$_SESSION["u_name"];
//    $query = "SELECT * FROM mealtable WHERE username = '$username'";
//    $result = getData($query);
//    if(mysqli_num_rows($result)>0){
//
//        $row = mysqli_fetch_assoc($result);
//        if($row['Day'] != 'day7' ){
//           MeleInsert($username,'day7');
//        }
//        else{
//            echo 'Alredy inserted';
//         }
//
//    }
//    else{
//        MeleInsert($username,'day7');
//    }
//
//
//}
//if(isset($_POST['d8']))
//{
//    $username=$_SESSION["u_name"];
//    $query = "SELECT * FROM mealtable WHERE username = '$username'";
//    $result = getData($query);
//    if(mysqli_num_rows($result)>0){
//
//        $row = mysqli_fetch_assoc($result);
//        if($row['Day'] != 'day8' ){
//           MeleInsert($username,'day8');
//        }
//        else{
//            echo 'Alredy inserted';
//         }
//
//    }
//    else{
//        MeleInsert($username,'day8');
//    }
//
//
//}
//if(isset($_POST['d9']))
//{
//    $username=$_SESSION["u_name"];
//    $query = "SELECT * FROM mealtable WHERE username = '$username'";
//    $result = getData($query);
//    if(mysqli_num_rows($result)>0){
//
//        $row = mysqli_fetch_assoc($result);
//        if($row['Day'] != 'day9' ){
//           MeleInsert($username,'day9');
//        }
//        else{

function MeleInsert($username,$day,$number,$meal_cost){

        $sql = "INSERT INTO mealtable (username,Day,number,money)
                VALUES ('$username','$day','$number','$meal_cost')";
        $result = insertData($sql);
        if($result){
            echo '<script>alert("Successfully Inserted")</script>';

        }
        else{
            echo 'faild to login';
        }
    }
// if(isset($_POST['submit'])){
//    $m_cost = $_POST['money'];
//     echo $m_cost;
// }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Place Meal</title>
          <link rel="stylesheet" href="placemeal.css">
  </head>
  <body>
      <div >
           <h1>Welcome,<?php echo $_SESSION["u_name"]; ?> </h1>
      </div>
      <form method="post" action="placemeal.php">
          <h1 id="head">Submit your meal</h1>
           <div class="d1">
              <h2>Day 1:Meal rate<span id="money">40</span>(tk)</h2>
             <input style="display: none;" type="label" name="money" value="40">
             <input type="submit" name="d1">
          </div>
      </form>
      <form method="post" action="placemeal.php">
          <div class="d2">
               <h2>Day 2:Meal rate(50tk)</h2>
              <input style="display: none;" type="label" name="money" value="50">
             <input type="submit" name="d2">
          </div>
        </form>
      <form method="post" action="placemeal.php">
        <div class="d2">
            <h2>Day 3:Meal rate(50tk)</h2>
            <input style="display: none;" type="label" name="money" value="40">
            <input type="submit" name="d3">
        </div>
      </form>
      <form method="post" action="placemeal.php">
        <div class="d2">
            <h2>Day 4:Meal rate(40tk)</h2>
            <input style="display: none;" type="label" name="money" value="40">
            <input type="submit" name="d4">
          </div>
      </form>
      <form method="post" action="placemeal.php">
         <div class="d2">
            <h2>Day 5:Meal rate(55tk)</h2>
            <input style="display: none;" type="label" name="money" value="55">
            <input type="submit" name="d5">
          </div>
      </form>
        <form method="post" action="placemeal.php">
            <div class="d2">
        <h2>Day 6:Meal rate(50tk)</h2>
        <input style="display: none;" type="label" name="money" value="50">
         <input type="submit" name="d6">

      </div>
      </form>
      <form method="post" action="placemeal.php">
      <div class="d2">
         <h2>Day 7:Meal rate(80tk)</h2>
         <input style="display: none;" type="label" name="money" value="80">
         <input type="submit" name="d7">
      </div>
      </form>
      <form method="post" action="placemeal.php">
          <div class="d2">
           <h2>Day 8:Meal rate(40tk)</h2>
           <input style="display: none;" type="label" name="money" value="40">
         <input type="submit" name="d8">
          </div>
      </form>
    <form method="post" action="placemeal.php">
        <div class="d2">
         <h2>Day 9:Meal rate(50tk)</h2>
         <input style="display: none;" type="label" name="money" value="50">
         <input type="submit" name="d9">
      </div>
      </form>
      <form method="post" action="placemeal.php">
      <div class="d2">
        <h2>Day 10:Meal rate(50tk)</h2>
        <input style="display: none;" type="label" name="money" value="50">
         <input type="submit" name="d10">
      </div>
      </form>
      <form method="post" action="placemeal.php">
      <div class="d2">
          <h2>Day 11:Meal rate(40tk)</h2>
          <input style="display: none;" type="label" name="money" value="40">
         <input type="submit" name="d11">
      </div>
      </form>
      <form method="post" action="placemeal.php">
      <div class="d2">
           <h2>Day 12:Meal rate(60tk)</h2>
           <input style="display: none;" type="label" name="money" value="60">
         <input type="submit" name="d12">
      </div>
      </form>
      <form method="post" action="placemeal.php">
      <div class="d2">
            <h2>Day 13:Meal rate(55tk)</h2>
            <input style="display: none;" type="label" name="money" value="55">
         <input type="submit" name="d13">
      </div>
      </form>
      <form method="post" action="placemeal.php">
          <div class="d2">
        <h2>Day 14:Meal rate(90tk)</h2>
        <input style="display: none;" type="label" name="money" value="90">
         <input type="submit" name="d14">
      </div>
          </form>

      <form method="post" action="placemeal.php">
          <div class="d2">
        <h2>Day 15:Meal rate(40tk)</h2>
        <input style="display: none;" type="label" name="money" value="40">
         <input type="submit" name="d15">
      </div>
          </form>
      <form method="post" action="placemeal.php">
          <div class="d2">
          <h2>Day 16:Meal rate(50tk)</h2>
          <input style="display: none;" type="label" name="money" value="50">
         <input type="submit" name="d16">
      </div>
    <form method="post" action="placemeal.php">
    <div class="d2">
          <h2>Day 17:Meal rate(55tk)</h2>
          <input style="display: none;" type="label" name="money" value="55">
         <input type="submit" name="17">
      </div>
    </form>
      <form method="post" action="placemeal.php">
          <div class="d2">
            <h2>Day 18:Meal rate(45tk)</h2>
            <input style="display: none;" type="label" name="money" value="45">
         <input type="submit" name="d18">
      </div>
    </form>
      <form method="post" action="placemeal.php">
          <div class="d2">
            <h2>Day 19:Meal rate(55tk)</h2>
            <input style="display: none;" type="label" name="money" value="55">
         <input type="submit" name="d19">
      </div>
    </form>
      <form method="post" action="placemeal.php">
          <div class="d2">
         <h2>Day 20:Meal rate(45tk)</h2>
         <input style="display: none;" type="label" name="money" value="45">
         <input type="submit" name="d20">
      </div>
    </form>
     <form method="post" action="placemeal.php">
         <div class="d2">
            <h2>Day 21:Meal rate(80tk)</h2>
            <input style="display: none;" type="label" name="money" value="80">
         <input type="submit" name="d21">
      </div>
    </form>
      <form method="post" action="placemeal.php">
          <div class="d2">
           <h2>Day 22:Meal rate(40tk)</h2>
           <input style="display: none;" type="label" name="money" value="40">
         <input type="submit" name="d22">
      </div>
    </form>
      <form method="post" action="placemeal.php">
          <div class="d2">
         <h2>Day 23:Meal rate(45tk)</h2>
         <input style="display: none;" type="label" name="money" value="45">
         <input type="submit" name="d23">
      </div>
    </form>
      <form method="post" action="placemeal.php">
          <div class="d2">
         <h2>Day 24:Meal rate(50tk)</h2>
         <input style="display: none;" type="label" name="money" value="50">
         <input type="submit" name="d24">
      </div>
    </form>
      <form method="post" action="placemeal.php">
          <div class="d2">
          <h2>Day 25:Meal rate(55tk)</h2>
          <input style="display: none;" type="label" name="money" value="55">
         <input type="submit" name="d25">
      </div>
    </form>
    <form method="post" action="placemeal.php">
    <div class="d2">
  <h2>Day 26:Meal rate(45tk)</h2>
  <input style="display: none;" type="label" name="money" value="45">
         <input type="submit" name="d26">
      </div>
    </form>
    <form method="post" action="placemeal.php">
        <div class="d2">
       <h2>Day 27:Meal rate(40tk)</h2>
       <input style="display: none;" type="label" name="money" value="40">
         <input type="submit" name="d27">
      </div>
    </form>
    <form method="post" action="placemeal.php">
        <div class="d2">
            <h2>Day 28:Meal rate(90tk)</h2>
            <input style="display: none;" type="label" name="money" value="90">
         <input type="submit" name="d28">
        </div>
    </form>
    <form method="post" action="placemeal.php">
        <div class="d2">
           <h2>Day 29:Meal rate(40tk)</h2>
           <input style="display: none;" type="label" name="money" value="40">
         <input type="submit" name="d29">
        </div>
    </form>
        <form method="post" action="placemeal.php">
            <div class="d2">
                <h2>Day 30:Meal rate(110tk)</h2>
                <input style="display: none;" type="label" name="money" value="110">
                <input type="submit" name="d30">
            </div>
    </form>
<!--    </form>-->

      <script src="mealsavailable.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  </body>
</html>
