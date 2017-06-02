<?php
require "connection.php";
session_start();


if($_POST){
    $plate = $_POST['plate'];
    $days = $_POST['days'];
    $request = $_POST['request'];
    $user = $_SESSION['username'];


if(!empty($plate) && !empty($days) && !empty($user)){ //check whether fields are empty

 $check_query = "SELECT * FROM `requets` WHERE `status`='requested' AND  `custid` = '$user'";
 $check_result = mysqli_query($dbc, $check_query);
 if(mysqli_num_rows($check_result)>1){
      echo '<div class="alert btn-warning" role="alert">You have a pending reservation. You cannot reserve a car twice without getting a confirmation</div>';
 }else{
    $car_update ="UPDATE `car` SET `status`='Requested' WHERE `plateno`='$plate'"; 
    $hire_Query = "INSERT INTO `requets`(`id`, `carplate`, `custid`, `date`, `days`, `description`,`status`) VALUES (NULL,'$plate','$user',CURRENT_TIMESTAMP,'$days','$request','requested')";
    if(mysqli_query($dbc, $hire_Query) && mysqli_query($dbc, $car_update)){
        echo "Car Reserved";
    }else{
        echo "car could not be hired at this time";
    } 
 }

   
}else{
    echo "Input all required fields";
}



}

?>