<?php 
if ($_POST) {
	 
	                    $id = $_POST['id1'];
						$handle = fopen('write.txt', 'w');
						fwrite($handle, $id);
						fclose($handle, 'r');
						 
}


?>