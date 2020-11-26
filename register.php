<?php
    session_start();
    $agentname = $_SESSION['username']; 

    include('DB/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
 

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
<meta name="author" content="#">
<meta name="description" content="inspire Calabar 2015.">
<meta name="keywords" content="Calabar, inspire, event, Confrence, Digital, conference, gather, rsvp, tech">
 
<script type="text/javascript">

</script>
<link rel="shortcut icon" href="#">
 
<title>Instaweb Data Entry</title>
 
<link href="css/bootstrap.min.css" rel="stylesheet">
 
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
 
<link href="css/plugins/animate.css" rel="stylesheet">
<link href="css/plugins/slick.css" rel="stylesheet">
<link href="css/plugins/magnific-popup.css" rel="stylesheet">
<link href="css/plugins/font-awesome.css" rel="stylesheet">
<link href="css/plugins/streamline-icons.css" rel="stylesheet">
 
<link href="css/event.css" rel="stylesheet">
 
 
<link href="css/themes/green.css" rel="stylesheet">
 
 
<!-- <link rel="stylesheet" title="green" media="screen" href="css/themes/green.css">
<link rel="alternate stylesheet" title="purple" media="screen" href="css/themes/purple.css">
<link rel="alternate stylesheet" title="red" media="screen" href="css/themes/red.css">
<link rel="alternate stylesheet" title="mint" media="screen" href="css/themes/mint.css">
<link rel="alternate stylesheet" title="blue" media="screen" href="css/themes/blue.css">
<link rel="alternate stylesheet" title="yellow" media="screen" href="css/themes/yellow.css">
<link rel="alternate stylesheet" title="black" media="screen" href="css/themes/black.css"> -->
<link rel="alternate stylesheet" title="black" media="screen" href="css/main.css">
 
<link href="css/demo.css" rel="stylesheet">
 
 
<script src="js/modernizr.min.js"></script>
 
<script src="js/plugins/pace.js"></script>
</head>
<body class="animate-page" data-spy="scroll" data-target="#navbar" data-offset="100" style="background-color:#ffff; background-position: center;"><script type="text/javascript">

</script>
 
<div class="preloader"></div>
 
<nav class="navbar navbar-default navbar-fixed-top reveal-menu js-reveal-menu reveal-menu-hidden"style="display:none;">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#"><img src="images/event-logo33.png" alt="Digital Tech"> </a>
</div>
 
</div>
</nav>
 
<header id="top" class="header parallax-bg">
<div class="container">
<div class="header_top-bg">

<h1></h1>
 
</header>
 

 
<div class="container" id="contact">

<div class="section-title">

    <div class="alert alert-success alert-dismissible" style="display: none;">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Success!</strong> Form Submitted successfully. Please hand over the tab to the 
      receptionist, she will walk you to consultant .
    </div>
    <div class="alert alert-danger alert-dismissible" style="display: none;">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Error!</strong> Error in form submition.
    </div>


<h5 style="font-size: 30px; color:#e62049;">COUNSELLING FORM </h5>
<!-- <p>Fields Marked In Red are Mandatery  </p> -->
</div>
<div class="contact-form bottom-space-xl wow fadeInUp">
	
<form action="register.php" method="POST" enctype="multipart/form-data">
<div class="row">

<div class="col-md-6 col-md-offset-3">
<div class="row">
<div class="col-sm-6">
<div class="form-group">

<label id="req">FIrst Name  </label>
<input type="text" class="form-control required-field" name="first_name" placeholder="First Name" required>
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
<label>Last Name </label>
<input type="text" class="form-control" name="surname" placeholder=" surname" required>
</div>
</div>
</div>

<div class="form-group">
<label> Email</label>
<input type="email" class="form-control" name="email" placeholder="Enter your email Address" required>
</div>

<div class="row">
<div class="col-sm-6">
<div class="form-group">

<label id="req">Contact Number </label>
<input type="number" class="form-control required-field" name="Phone_Number" placeholder="First Name" required>
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
<label>What's App Number</label>
<input type="number" class="form-control" name="whatsapp" placeholder=" Your What's App Number" required>
</div>
</div>
</div>

<div class="form-group">
<label>Nationality </label>
<input type="text" class="form-control" name="Nationalty" placeholder="Your home  Country" required>
</div>

<div class="form-group">
<label>Do you have free time to do this project?</label>


<div id="Global_Visa"> 
<input type="checkbox" name="GlobalVisa" value="UkVisa" required> YES
<input type="checkbox" name="GlobalVisa" value="NijaVisa"> NO
</div>
<br>
<div class="form-group">
<label>Where did you hear about this project? </label>
<input type="text" class="form-control" name="Hear" placeholder="Dubizzle, Facebook, From a friend " required>
</div>


<div class="form-group">
<label>Who did you speak to before coming to the office? </label>
<input type="text" class="form-control" name="notes" placeholder=" " required>
</div>
<!-- <select id="services" name="services" onchange='on_change(this)'> 
  <option value=" ">Select</option>
  <option value="Visa">Visa</option>
  <option value="Global_Visa">GLobal Visa</option>
  <option value="Visa_Change">Visa Change </option>
  <option value="Flight_Booking">Hotel & Flight Bookings </option>
  <option value="Local_global_tours">Global Tours</option>
</select>
</div> -->

<!-- <div id="visas" style="display:none;"> 
<input type="checkbox" name="DaysVisa" value="14_Days_UAE_VIsa_Change"> 14 Days Visa
<input type="checkbox" name="DaysVisa" value="30DaysVisa"> 30 Days Visa
<input type="checkbox" name="DaysVisa" value="90DaysVisa"> 90 Days Visa
</div>

<div id="Visa_Change" style="display:none;"> 
<input type="checkbox" name="ChangeVisa" value="Airport"> Airport to Airport
<input type="checkbox" name="ChangeVisa" value="BusVisaChange"> Bus Visa Change
</div>

<div id="Global_Visa" style="display:none;"> 
<input type="checkbox" name="GlobalVisa" value="UkVisa"> UK Visa
<input type="checkbox" name="GlobalVisa" value="NijaVisa"> Nigeria VIsa
</div> -->

<!-- end text 2 -->

<!-- <div class="form-group">
<label>Notes </label>
<textarea rows="4" cols="50" class="form-control" name="notes" placeholder="Notes " required>
</textarea>
</div> -->

<div class="form-group">
<div class="text-center top-space">
<button type="submit" class="btn btn-success btn-block btn-lg" type="submit" name="submit">Submit</button>
</div>
</div>

</div>

</form>
</div>
</div>
 


</div>
 
<footer>
<p> <small class="text-muted">Copyright © Instaweb Technologies LLC 2020. All rights reserved. <br>
For Internal Use Only.</small></p>
</footer>
<a href="#top" class="back_to_top"><img src="images/back_to_top.png" alt="back to top"></a>
 
<div class="modal fade" id="register-now" tabindex="-1" role="dialog" aria-labelledby="register-now-label">
<div class="modal-dialog modal-sm" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title text-center" id="register-now-label">Send in your proposal
</h4>
</div>
</div>
</div>
</div>
</div>
</div>
 
 
<script src="js/jquery.min.js"></script>
 
<script src="js/bootstrap.min.js"></script>
 
<script src="js/plugins/countdown.js"></script>
<script src="js/plugins/wow.js"></script>
<script src="js/plugins/slick.js"></script>
<script src="js/plugins/magnific-popup.js"></script>
<script src="js/plugins/validate.js"></script>
<script src="js/plugins/appear.js"></script>
<script src="js/plugins/count-to.js"></script>
<script src="js/plugins/nicescroll.js"></script>
<script src="js/plugins/parallax.js"></script>
 
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="js/plugins/infobox.js"></script>
<script src="js/plugins/google-map.js"></script>
<script src="js/plugins/directions.js"></script>
 
<script src="js/plugins/style-switcher.js"></script>
 
<script src="js/includes/subscribe.js"></script>
<script src="js/includes/contact_form.js"></script>
 
<script src="js/animate.js"></script>

<script>
    function on_change(el){
        if(el.options[el.selectedIndex].value == 'Visa_Change'){ 
            document.getElementById('Visa_Change').style.display = 'block'; // Show el
        }else if (el.options[el.selectedIndex].value == 'Visa') {
        	document.getElementById('visas').style.display = 'block'; 
        }else if (el.options[el.selectedIndex].value == 'Global_Visa') {
            document.getElementById('Global_Visa').style.display = 'block'; 
        }
        else{
            document.getElementById('visas').style.display = 'none';
            document.getElementById('Visa_Change').style.display = 'none';
            document.getElementById('Global_Visa').style.display = 'none';
        }
    }

    $('input[type="checkbox"]').on('change', function() {
   $(this).siblings('input[type="checkbox"]').prop('checked', false);
});

    var IDLE_TIMEOUT = 10 * 60;  // 10 minutes of inactivity
    var _idleSecondsCounter = 0;
    document.onclick = function() {
        _idleSecondsCounter = 0;
    };
    document.onmousemove = function() {
        _idleSecondsCounter = 0;
    };
    document.onkeypress = function() {
        _idleSecondsCounter = 0;
    };
    window.setInterval(CheckIdleTime, 100);
    function CheckIdleTime() {
        _idleSecondsCounter++;
        var oPanel = document.getElementById("SecondsUntilExpire");
        if (oPanel)
            oPanel.innerHTML = (IDLE_TIMEOUT - _idleSecondsCounter) + "";
        if (_idleSecondsCounter >= IDLE_TIMEOUT) {
            // destroy the session in logout.php 
            document.location.href = "index.php";
        }
    }

</script>

</body>


</html>


<?php 

if(isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $Phone_Number = $_POST['Phone_Number'];
    $whatsapp = $_POST['whatsapp'];
    $Nationalty = $_POST['Nationalty'];
    $Hear = $_POST['Hear'];
    
    $notes = $_POST['notes'];

    if(isset($_POST['DaysVisa'])){ $visas = $_POST['DaysVisa']; }else {$visas = '-';}
    if(isset($_POST['ChangeVisa'])){ $changeVisa = $_POST['ChangeVisa']; }else {$changeVisa = '-';}
    if(isset($_POST['changeVisa'])){ $globalVisa = $_POST['changeVisa']; }else {$globalVisa = '-';}
    
    $qry = "INSERT into cus_details (FirstName, Surname, Email, MobileNumber, WhatsApp, Nationality, Hear, VisaChangeReq, GlobalVisa, Notes, AgentName, Time) values ('$first_name', '$surname', '$email', '$Phone_Number', '$whatsapp', '$Nationalty', '$Hear', '$changeVisa', '$globalVisa', '$notes', '$agentname', now())";
    if(mysqli_query($con, $qry)) {
        echo '
            <script>
                $(".alert-success").css("display","block");
            </script>
        ';
    }else {
        echo mysqli_error($con);
        echo '
            <script>
                $(".alert-danger").css("display","block");
            </script>
        ';
    }
}



?>