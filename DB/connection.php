<?php  

$con = mysqli_connect('localhost', 'root', 'root', 'data_entry');
if(!$con) {
	die('Error in db connection . '. mysqli_error($con));
}


?>