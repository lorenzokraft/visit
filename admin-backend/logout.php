<?php  

sesssion_start();

session_destroy();
header('location: login.php');


?>