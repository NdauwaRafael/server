<?php
header("Access-Control-Allow-Origin: *");
require 'connection.php';

if ($_POST) {
  $model = $_POST['model'];
  $plate = $_POST['plate'];

  $query = "INSERT INTO `car`(`id`, `model`, `plateno`, `image`, `status`) VALUES (NULL,'$model','$plate','noimage','free')";
  if (mysqli_query($dbc, $query)) {
     echo '<div class="alert alert-success" role="alert"><i class="fa fa-car" aria-hidden="true"></i> Conratulations your car was added successfully</div>';
  }
}

 ?>
