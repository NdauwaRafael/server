<?php
require 'connection.php';
session_start();

  if ($_POST) {
   $idno = $_POST['idno'];
   $fname = $_POST['firstname'];
   $lname = $_POST['lastname'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $cpassword = $_POST['cpassword'];

   $queri = "INSERT INTO `ownermembership`(`owner_id`, `idno`, `firstname`, `lastname`, `email`, `password`) VALUES (NULL,'$idno','$fname','$lname','$email','$password')";
   if (mysqli_query($dbc, $queri)) {
     echo "$fname $lname User was added successfully!!";
     $_SESSION['owner_email'] = $email;
     echo "<script>window.location.href='home.html';</script>";


   }else{
     echo '<div class="alert alert-danger" role="alert"><i class="fa fa-user-plus" aria-hidden="true"></i> Unable to add user details, Try again later </div>';

   }

 }else{
    echo '<div class="alert alert-danger" role="alert">
    <i class="fa fa-user-plus" aria-hidden="true"></i> Network ERROR!! COULD NOT ADD USER, TRY AGAIN LATER, IF PROBLEM PERSISTS, CONTACT SYSTEM CARE FOR DETAILS
    </div>';
 }
 ?>
