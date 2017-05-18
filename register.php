<?php
require 'connection.php';
session_start();
if($_POST){
     $username = $_POST['username'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $cpassword= $_POST['confirmpassword'];
if (!empty($username) || !empty(!email) ||!empty($password) || !empty($cpassword)) {



     $qr = "INSERT INTO `membership`(`id`, `username`, `email`, `password`) VALUES (NULL,'$username','$email','$password')";
     if (mysqli_query($dbc, $qr)) {
     	echo "Congratulations, you are now a registered member";
       $_SESSION['username'] = $username;
        echo "<script>window.location.href='home.html';</script>";
     }else{
     	echo "failed".mysqli_errno();
     }

}else {
  echo "Input all the fields";
}

}else{
	echo "Something went wrong adding the user".mysqli_errno();

}


 ?>
