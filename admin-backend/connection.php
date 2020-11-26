<?php 
$mysql_server = "localhost";

$mysql_user = "root";

$mysql_pass = "";



$db = "one_db";

// connection to server........
$dbcon = mysql_connect($mysql_server,$mysql_user, $mysql_pass) || die("Could not connect to server".mysql_error());

// cselect database .........
$getdb = mysql_select_db($db) || die("Could not select databse".mysql_error());

$sql =" SELECT * FROM attendance ";

//query run 

$result =mysql_query($sql);
 ?>