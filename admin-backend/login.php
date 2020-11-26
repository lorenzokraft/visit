<?php 
  include('../DB/connection.php'); 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from lycaste.co/projects/avocadopanel/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Mar 2016 08:25:26 GMT -->
<head>

  <meta charset="utf-8">
  <title>AvocadoPanel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Styles -->
  <link href='assets/css/chosen.css' rel='stylesheet' tyle="text/css">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/theme/avocado.css" rel="stylesheet" type="text/css" id="theme-style">
  <link href="assets/css/prism.css" rel="stylesheet/less" type="text/css">
  <link href='assets/css/fullcalendar.css' rel='stylesheet' tyle="text/css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,600,300' rel='stylesheet' type='text/css'> 
  <style type="text/css">
    body { padding-top: 102px; }
  </style>
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  
  <!-- JavaScript/jQuery, Pre-DOM -->
  <!-- <script src="../../../ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
  <script src="assets/js/charts/excanvas.min.js"></script>
  <script src="assets/js/charts/jquery.flot.js"></script>
  <script src="assets/js/jquery.jpanelmenu.min.js"></script>
  <script src="assets/js/jquery.cookie.js"></script>
  <script src="assets/js/avocado-custom-predom.js"></script>

  <!-- HTML5, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>

<body>

     <div class="container">  

        <form class="form-signin form-horizontal" method="post">
        
        <div class="alert alert-danger alert-dismissible" style="display: none;">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Error!</strong> Invalid Username or Password.
        </div>


        <div class="top-bar">
          <h3><i class="icon-leaf"></i> Avocado<b>Panel</b></h3>
        </div>
        <div class="well no-padding">

          <div class="control-group">
            <label class="control-label" for="inputName"><i class="icon-user"></i></label>
            <div class="controls">
              <input type="email" name="email" id="inputName" placeholder="Email">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputUsername"><i class="icon-key"></i></label>
            <div class="controls">
              <input type="password" name="password" id="inputUsername" placeholder="Password">
            </div>
          </div>

        <div class="padding">
          <button class="btn btn-primary" type="submit" name="submit">Sign in</button>
          <button class="btn" type="submit">Forgot Password</button>
          </div>
        </div>
      </form>

    </div> 

</body>

	<!-- Javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src='assets/js/jquery.hotkeys.js'></script>
	<script src='assets/js/calendar/fullcalendar.min.js'></script>
	<script src="assets/js/jquery-ui-1.10.2.custom.min.js"></script>
	<script src="assets/js/jquery.pajinate.js"></script>
	<script src="assets/js/jquery.prism.min.js"></script>
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/charts/jquery.flot.time.js"></script>
	<script src="assets/js/charts/jquery.flot.pie.js"></script>
	<script src="assets/js/charts/jquery.flot.resize.js"></script>
	<script src="assets/js/bootstrap/bootstrap.min.js"></script>
	<script src="assets/js/bootstrap/bootstrap-wysiwyg.js"></script>
	<script src="assets/js/bootstrap/bootstrap-typeahead.js"></script>
  <script src="assets/js/jquery.easing.min.js"></script>
  <script src="assets/js/jquery.chosen.min.js"></script>
	<script src="assets/js/avocado-custom.js"></script>
	

<!-- Mirrored from lycaste.co/projects/avocadopanel/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Mar 2016 08:25:26 GMT -->
</html>

<?php  


if(isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $qry = "SELECT * from users where email='$email' && password='$password'";
  $run = $con -> query($qry);
  if($run -> num_rows == 1) {
    $_SESSION['email'] = $email;
    echo '<script>window.open("newuser.php", "_self");</script>';
  }else {
    echo '<script>
            $(".alert").css("display","block");
          </script>';
  }
}


