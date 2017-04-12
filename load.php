<?php
//check whether user is logged in
session_start();
require 'connection.php';

$que = "SELECT * FROM `car`";
$res = mysqli_query($dbc, $que);

$car = array();
while ($row = mysqli_fetch_array($res)) {
  $u = array('id'=>$row['0'],'model'=>$row['1'],'plateno'=>$row['2'],'image'=>$row['3'],'status'=>$row['4']);

  array_push($car, $u);
}

$cardetails = json_encode($car);
echo $cardetails;

?>
