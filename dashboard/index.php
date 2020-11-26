


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Instaweb Admin</title>

    <!-- vendor css -->
    <link href="./lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="./lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="./css/bracket.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse">
           <img src="img/instaweb-logo.png">
        </div>

             <div class="tx-center mg-b-60" style="margin-top: -11%;
                margin-bottom: 10%; font-family: 'Roboto';
                text-align: center;
                font-size: 20px;">Admin Login
            </div>


        <!-- Error Msg -->
       
        <?php if (isset($_GET['tag']) && $_GET['tag'] == "error") { ?>
            <div style="text-align:center; color: red; margin-top: -5%;
    margin-bottom: 10%;"> Invalid Username or password </div>
            <?php }?>

        <!-- FOrm Start -->

        <form method="POST" action ="index.php" class="login100-form validate-form">


        <!-- form-group  Username-->
        <div class="form-group">
          <input type="text" id="txt_uname" name="txt_uname" class="form-control" placeholder="Enter your username">
        </div>



        <!-- form-group  Password-->
        <div class="form-group">
          <input type="password" id="txt_pass" name="txt_pwd" class="form-control" placeholder="Enter your password">

        <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
        </div>
        <!-- form-group -->


        <!-- Submit Button -->
        <button type="submit" value="Submit" name="but_submit"
        class="btn btn-info btn-block">Sign In
        </button>
        <!-- button Submit  -->

        <div class="mg-t-60 tx-center">Not yet a member? <a href="" class="tx-info">Sign Up</a></div>
        </div>

    </form>

        <!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="./lib/jquery/jquery.js"></script>
    <script src="./lib/popper.js/popper.js"></script>
    <script src="./lib/bootstrap/bootstrap.js"></script>

  </body>
</html>


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
            header('Location: app/index.php');
        }else{
            header('Location: index.php?tag=error');
        }

    }

};
