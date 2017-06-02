<?php
//check whether user is logged in
session_start();
require 'connection.php';

$query = "SELECT * FROM `ownermembership` WHERE `email` = '{$_SESSION['owner_email']}'";
$result = mysqli_query($dbc, $query);

$owner = array();
while ($row = mysqli_fetch_array($result)) {
  $u = array('owner_id'=>$row['0'],'idno'=>$row['1'],'firstname'=>$row['2'],'lastname'=>$row['3'],'email'=>$row['4'],'password'=>$row['5']);

  array_push($owner, $u);
}

$ownerdetails = json_encode($owner);
echo $ownerdetails;

?>
