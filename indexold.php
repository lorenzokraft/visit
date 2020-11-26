<?php
session_start();
    // include "config.php";
include('DB/connection.php');

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from agent where Username='".$uname."' and Password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['username'] = $uname;
            header('Location: register.php');
        }else{
            header('Location: index.php?tag=error');
        }

    }

};

// if (uname) { 
// // in your login check set this two session variables 
//     // $_SESSION["username"] = "uname";
//     $_SESSION['last_login_timestamp'] = time();
// }
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

<form method="POST" action ="index.php" class="login100-form validate-form">
    
    <span class="login100-form-title p-b-26">
        
    </span>

    <span class="login100-form-title p-b-48">
    <img src="images/goinstatrip.png" style="width: 250px">
<!-- <i class="zmdi zmdi-font"></i> -->
<?php if (isset($_GET['tag']) && $_GET['tag'] == "error") { ?>
            <div style="text-align:center; color: red;"> Invalid Username or password </div>
            <?php }?>
    </span>

 
<div class="wrap-input100 validate-input">
<input class="input100" type="text" id="txt_uname" name="txt_uname">

<span class="focus-input100" data-placeholder="Username"></span>
</div>

<div class="wrap-input100 validate-input" data-validate="Enter password">
<span class="btn-show-pass">
<i class="zmdi zmdi-eye"></i>
</span>
<input class="input100" type="password" id="txt_pass" name="txt_pwd">
<span class="focus-input100" data-placeholder="Password"></span>
</div>

<div class="container-login100-form-btn">
<div class="wrap-login100-form-btn">

<div class="login100-form-bgbtn"></div>

<button class="login100-form-btn" type="submit" value="Submit" name="but_submit" id="but_submit" style="color: white!important;">
    Login

</button>

<!-- <button><a href="register.html">LOGIN</button> -->
</div>
</div>


<div class="text-center p-t-115">
<span class="txt1">
Admin ?
</span>
<a class="txt2" href="admin.php">
Login here
</a>
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
<!-- https://codeshack.io/secure-login-system-php-mysql/ -->