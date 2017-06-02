<?php
require 'connection.php';
  if($_POST){
      $plate = $_POST['plate1'];
      $status = $_POST['status'];

     

      $update  = "UPDATE `requets` SET `status`='$status' WHERE `carplate`='$plate'";
      if(mysqli_query($dbc, $update)){
           if($status=="Accepted"){
              echo "Reservation Accepted";
           }else
           {
               echo "Reservation Declined Successfully";
           }

          
      }else{
          echo "Coudnt accept";
      }
  }

?>