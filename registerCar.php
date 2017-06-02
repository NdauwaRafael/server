<?php
header("Access-Control-Allow-Origin: *");
require 'connection.php';
session_start();
if ($_POST) {
  $model = $_POST['model'];
  $plate = $_POST['plate'];
  $city = $_POST['city'];
  $street = $_POST['street'];
  $email = $_SESSION['owner_email'];

  $query = "INSERT INTO `car`(`id`, `model`, `plateno`, `City`, `street`, `image`, `status`, `owner_email`) VALUES (NULL,'$model','$plate','$city','$street','noimage','free','$email')";
  if (mysqli_query($dbc, $query)) {
     echo '<div class="alert alert-success" role="alert"><i class="fa fa-car" aria-hidden="true"></i> Conratulations your car was added successfully</div>';
  }else
  {
   echo '<div class="alert alert-danger" role="alert"><i class="fa fa-car" aria-hidden="true"></i> Failed to add Car</div>';
  }
}

 ?>
