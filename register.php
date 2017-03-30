<?php
require 'connection.php';

if($_POST){
     $username = $_POST['username'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $cpassword= $_POST['password_confirm'];
if (!empty($username) || !empty(!email) ||!empty($password) || !empty($cpassword)) {



     $qr = "INSERT INTO `membership`(`Id`, `username`,`idno`, `email`, `password`) VALUES (NULL,'$username','$email','noid','$password')";
     if (mysqli_query($dbc, $qr)) {
     	echo "Congratulations, you are now a registered member";
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
