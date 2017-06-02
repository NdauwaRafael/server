<?php
require 'connection.php';
if ($_POST) {
	$city = $_POST['city'];
    $street = '';

	if ($city=='' && $street=='') {
		$query_car = "SELECT `id`, `idno`, `firstname`, `lastname`, `email`, `model`, `plateno`, `image`, `status` FROM `car`,`ownermembership` WHERE `car`.`owner_email` = `ownermembership`.`email` AND `car`.`status`='free' ";
	}else{
        if ($city!='') {
        	$Scity = " `car`.`City` LIKE '$city' ";
        }else{
           $Scity = "`car`.`City` != 'null' ";
        }

        if ($street!='') {
        	$Sstreet = " `car`.`street` LIKE '$street' ";
        	
        }else{
           $Sstreet = "`car`.`street`!='null'";
        }
                    

		$query_car = "SELECT `id`, `idno`, `firstname`, `lastname`, `email`, `model`, `plateno`, `image`, `status` FROM `car`,`ownermembership` WHERE `car`.`owner_email` = `ownermembership`.`email` AND `car`.`status`='free' AND $Scity AND $Sstreet ";
		
        }

$res = mysqli_query($dbc, $query_car);

if(mysqli_num_rows($res)>1){

$cars = array();
while ($row = mysqli_fetch_array($res)) {
  $u = array('id'=>$row['0'],'idno'=>$row['1'],'firstname'=>$row['2'],'lastname'=>$row['3'],'email'=>$row['4'], 'model'=>$row['5'],'plateno'=>$row['6'],'image'=>$row['7'],'status'=>$row['8']);

  array_push($cars, $u);
}

$cardetails = json_encode($cars);
echo $cardetails;

}else{
    echo "No Cars Available";
}


}

?>
