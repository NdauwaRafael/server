<?php
require 'connection.php';
 if ($_POST) {
   $plate = $_POST['plate1'];

   $select = "SELECT * FROM `car` WHERE `plateno`='$plate'";
   $qcar = mysqli_query($dbc, $select);

   $car = array();
   while ($rowc = mysqli_fetch_array($qcar)) {
     $u = array('id'=>$row['0'],'model'=>$rowc['1'],'plateno'=>$row['2'],'image'=>$row['3'],'status'=>$row['4']);

     array_push($car, $u);
   }

   $acar = json_encode($car);
   echo $acar;
 }
 ?>
