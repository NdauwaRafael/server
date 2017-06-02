<?php
require "connection.php";

$fileName = "write.txt";
if (file_exists($fileName) && filesize($fileName)>0) {  
  $handleMe = fopen($fileName, 'r');
  $carId= fread($handleMe, filesize($fileName));
  fclose($handleMe);


if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['carImage']['tmp_name'])) {
$sourcePath = $_FILES['carImage']['tmp_name'];
$targetPath = "images/".$_FILES['carImage']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
	$newImage = "http://localhost/server/images/".$_FILES['carImage']['name'];
	
?>
<img src= "<?php  echo $newImage; ?>" width="80%" />
<?php
$qUpload= "UPDATE `car` SET `image`='$newImage' WHERE `id`='$carId' ";
if (mysqli_query($dbc, $qUpload)) {
	echo "uploaded successfully";
}else{
	echo "file uploaded but coul not be stored. Try again later";
}

}
}
}

}

?>