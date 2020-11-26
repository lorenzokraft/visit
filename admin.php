<?php

    include "config.php";

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from Users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: register.php');
        }else{
            echo "Invalid username or password";
        }

    }

};
?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>GoInstaTrip KYC</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100">
<form class="login100-form validate-form">
<span class="login100-form-title p-b-26">

</span>
<span class="login100-form-title p-b-48">
    <img src="images/goinstatrip.png" style="width: 250px">
<!-- <i class="zmdi zmdi-font"></i> -->
Login to Admin Dashboard
</span>
<div class="wrap-input100 validate-input">
<input class="input100" type="text" name="username">
<span class="focus-input100" data-placeholder="Username"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="Enter password">
<span class="btn-show-pass">
<i class="zmdi zmdi-eye"></i>
</span>
<input class="input100" type="password" name="pass">
<span class="focus-input100" data-placeholder="Password"></span>
</div>
<div class="container-login100-form-btn">
<div class="wrap-login100-form-btn">
<div class="login100-form-bgbtn"></div>
<button class="login100-form-btn">
Login
</button>
</div>
</div>

</form>
</div>
</div>
</div>
<div id="dropDownSelect1"></div>

<script src="vendor/jquery/jquery-3.2.1.min.js" type="d045a805421bc3a778d704c6-text/javascript"></script>

<script src="vendor/animsition/js/animsition.min.js" type="d045a805421bc3a778d704c6-text/javascript"></script>

<script src="vendor/bootstrap/js/popper.js" type="d045a805421bc3a778d704c6-text/javascript"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js" type="d045a805421bc3a778d704c6-text/javascript"></script>

<script src="vendor/select2/select2.min.js" type="d045a805421bc3a778d704c6-text/javascript"></script>

<script src="vendor/daterangepicker/moment.min.js" type="d045a805421bc3a778d704c6-text/javascript"></script>
<script src="vendor/daterangepicker/daterangepicker.js" type="d045a805421bc3a778d704c6-text/javascript"></script>

<script src="vendor/countdowntime/countdowntime.js" type="d045a805421bc3a778d704c6-text/javascript"></script>

<script src="js/main.js" type="d045a805421bc3a778d704c6-text/javascript"></script>


<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="d045a805421bc3a778d704c6-|49" defer=""></script></body>


</html>