<?php
require "connection.php";
if($_POST){
    $plate = $_POST['plate1'];
    $status = $_POST['status'];

 $update_car = "UPDATE `car` SET `status`='free' WHERE `plateno`='$plate'";
 $update  = "UPDATE `requets` SET `status`='$status' WHERE `carplate`='$plate'";
    if(mysqli_query($dbc, $update_car)){
        echo "car freed";
    }else{
        echo "Unable to free car";
    }

if( mysqli_query($dbc, $update)){
   echo "Job completed successfully";
}else
{
    echo "Unable to complete job";
}


}

?>