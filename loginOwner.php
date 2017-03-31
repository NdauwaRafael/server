<?php
require "connection.php";
session_start();


 if ($_POST) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $quer = "SELECT * FROM `ownermembership` WHERE `email`='$email' AND  `password`='$password'";
  $rl = mysqli_query($dbc, $quer);

  if(mysqli_num_rows($rl)==1){
    $_SESSION['owner_email'] = $email;
    echo "<script>window.location.href='home.html';</script>";
  }else{
    echo '<div class="alert alert-danger" role="alert"><i class="fa fa-user-plus" aria-hidden="true"></i> LOgin Details Invalid </div>';
  }


 }else {
   echo "Something went wrong while submiting your Login Form. Check your network connection or contact Help service";
 }

 ?>
