
<?php


$con = mysqli_connect('localhost', 'hova', 'hovakraft');

if (!$con) {
	
	echo "Not Connected to Server";
}

if (!mysqli_select_db($con, 'kyc')) {
	echo "databse Not Selected ";
}

$Name = $_POST['username'];

$Pass = $_POST['password'];

$email = $_POST['email'];

$sql = " INSERT INTO agent (Username, Password, email) VALUES ('$Name', '$Pass', '$email')";

if (!mysqli_query($con,$sql)) {
	echo "Not Inserted";
}else{
	echo '<script type="text/javascript">alert("NEW AGENT ACCOUNT CREATED !");</script>';
}

header("refresh:1; url=index.php")

?>
