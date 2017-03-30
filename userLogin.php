<?php
require "connection.php";
session_start();
 if ($_POST) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM membership WHERE username = '$username' AND Password = '$password'";
  $r = mysqli_query($dbc, $query);

  if(mysqli_num_rows($r)==1){
    $_SESSION['username'] = $username;
    echo "<script>window.location.href='home.html';</script>";
  }else{
    echo '<div class="alert alert-danger" role="alert"><i class="fa fa-user-plus" aria-hidden="true"></i> LOgin Details Invalid </div>';
  }


 }else {
   echo "Something went wrong while submiting your Login Form";
 }

 ?>
