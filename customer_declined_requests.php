<?php
//check whether user is logged in
session_start();
require 'connection.php';

$query_request = "SELECT * FROM `requets` WHERE `custid` = '{$_SESSION['username']}'";
$result = mysqli_query($dbc, $query_request);

$request = array();
while ($row = mysqli_fetch_array($result)) {
  $u = array('id'=>$row['0'],'carplate'=>$row['1'],'custid'=>$row['2'],'date'=>$row['3'],'days'=>$row['4'],'description'=>$row['5']);

  array_push($request, $u);
}

$customer_request = json_encode($request);
echo $customer_request;

?>