<?php  

$con = mysqli_connect('localhost', 'root', 'secret', 'data_entry');
if(!$con) {
  die('Error in db connection . '. mysqli_error($con));
}


?>