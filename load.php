<?php

//check whether user is logged in
require 'connection.php';

$que = "SELECT `id`,`idno`, `firstname`, `lastname`, `email`, `model`, `plateno`, `image`, `status` FROM `car`,`ownermembership` WHERE `car`.`owner_email` = `ownermembership`.`email` AND `car`.`status`='free' ";
$res = mysqli_query($dbc, $que);

$cars = array();
while ($row = mysqli_fetch_array($res)) {
  $u = array('id'=>$row['0'],'idno'=>$row['1'],'firstname'=>$row['2'],'lastname'=>$row['3'],'email'=>$row['4'], 'model'=>$row['5'],'plateno'=>$row['6'],'image'=>$row['7'],'status'=>$row['8']);

  array_push($cars, $u);
}

$cardetails = json_encode($cars);
echo $cardetails;

?>
