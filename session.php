<?php
//check whether user is logged in
session_start();
require 'connection.php';

$query = "SELECT * FROM `membership` WHERE `username` = '{$_SESSION['username']}'";
$result = mysqli_query($dbc, $query);

$user = array();
while ($row = mysqli_fetch_array($result)) {
  $u = array('id'=>$row['0'],'username'=>$row['1'],'email'=>$row['2'],'password'=>$row['3']);

  array_push($user, $u);
}

$userdetails = json_encode($user);
echo $userdetails;

?>
