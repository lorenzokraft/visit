<?php
    session_start();
    // $agentname = $_SESSION['username']; 

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
<body class="animate-page" data-spy="scroll" data-target="#navbar" data-offset="100" style="background-color:#2fefd67a; background-position: center;"><script type="text/javascript">

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
 
<header id="top" class="header parallax-bg" style="height:400px;!important; position: static!important;">
<div class="container">
<div class="header_top-bg">

<h1></h1>
 
</header>
 

 
<div class="container" id="contact">

<div class="section-title">

    



<!-- <p>Fields Marked In Red are Mandatery  </p> -->
</div>
<div class="contact-form bottom-space-xl wow fadeInUp" style="margin-bottom: 80px;
    background: #ffffff5c;
    padding: 54px;
    border-radius: 39px;
    margin-top: -200px;
    z-index: 999;">

    <div class="alert alert-success alert-dismissible" style="display: none; border-radius: 15px; text-align:center;">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Success!</strong> Form Submitted successfully. Please hand over the tab to the 
      receptionist, she will walk you to consultant .
    </div>
    <div class="alert alert-danger alert-dismissible" style="display: none;">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Error!</strong> Error in form submition.
    </div>
	
<form action="index.php" method="POST" enctype="multipart/form-data">
<div class="row">
<p style="text-align: center;
    FONT-SIZE: 16PX;
    color: #ec0d0d;
    font-weight: 900;">
    ALL FIELDS ARE MANDATORY</p>
    <br>
    <br>
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
<input type="text" class="form-control" name="surname" placeholder=" Last Name" required>
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
<input type="number" class="form-control required-field" name="Phone_Number" placeholder="+971" required>
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
<label>What's App Number</label>
<input type="number" class="form-control" name="whatsapp" placeholder=" What's App Number" required>
</div>
</div>
</div>

<div class="form-group">
        <div class="form-group">
            <label>Nationality </label>

            <select id="Nationalty" name="Nationalty" style="width:100%;
            height: 40px;"> 
            <option value="">-- select one --</option>
            <option value="afghan">Afghan</option>
            <option value="albanian">Albanian</option>
            <option value="algerian">Algerian</option>
            <option value="american">American</option>
            <option value="andorran">Andorran</option>
            <option value="angolan">Angolan</option>
            <option value="antiguans">Antiguans</option>
            <option value="argentinean">Argentinean</option>
            <option value="armenian">Armenian</option>
            <option value="australian">Australian</option>
            <option value="austrian">Austrian</option>
            <option value="azerbaijani">Azerbaijani</option>
            <option value="bahamian">Bahamian</option>
            <option value="bahraini">Bahraini</option>
            <option value="bangladeshi">Bangladeshi</option>
            <option value="barbadian">Barbadian</option>
            <option value="barbudans">Barbudans</option>
            <option value="batswana">Batswana</option>
            <option value="belarusian">Belarusian</option>
            <option value="belgian">Belgian</option>
            <option value="belizean">Belizean</option>
            <option value="beninese">Beninese</option>
            <option value="bhutanese">Bhutanese</option>
            <option value="bolivian">Bolivian</option>
            <option value="bosnian">Bosnian</option>
            <option value="brazilian">Brazilian</option>
            <option value="british">British</option>
            <option value="bruneian">Bruneian</option>
            <option value="bulgarian">Bulgarian</option>
            <option value="burkinabe">Burkinabe</option>
            <option value="burmese">Burmese</option>
            <option value="burundian">Burundian</option>
            <option value="cambodian">Cambodian</option>
            <option value="cameroonian">Cameroonian</option>
            <option value="canadian">Canadian</option>
            <option value="cape verdean">Cape Verdean</option>
            <option value="central african">Central African</option>
            <option value="chadian">Chadian</option>
            <option value="chilean">Chilean</option>
            <option value="chinese">Chinese</option>
            <option value="colombian">Colombian</option>
            <option value="comoran">Comoran</option>
            <option value="congolese">Congolese</option>
            <option value="costa rican">Costa Rican</option>
            <option value="croatian">Croatian</option>
            <option value="cuban">Cuban</option>
            <option value="cypriot">Cypriot</option>
            <option value="czech">Czech</option>
            <option value="danish">Danish</option>
            <option value="djibouti">Djibouti</option>
            <option value="dominican">Dominican</option>
            <option value="dutch">Dutch</option>
            <option value="east timorese">East Timorese</option>
            <option value="ecuadorean">Ecuadorean</option>
            <option value="egyptian">Egyptian</option>
            <option value="emirian">Emirian</option>
            <option value="equatorial guinean">Equatorial Guinean</option>
            <option value="eritrean">Eritrean</option>
            <option value="estonian">Estonian</option>
            <option value="ethiopian">Ethiopian</option>
            <option value="fijian">Fijian</option>
            <option value="filipino">Filipino</option>
            <option value="finnish">Finnish</option>
            <option value="french">French</option>
            <option value="gabonese">Gabonese</option>
            <option value="gambian">Gambian</option>
            <option value="georgian">Georgian</option>
            <option value="german">German</option>
            <option value="ghanaian">Ghanaian</option>
            <option value="greek">Greek</option>
            <option value="grenadian">Grenadian</option>
            <option value="guatemalan">Guatemalan</option>
            <option value="guinea-bissauan">Guinea-Bissauan</option>
            <option value="guinean">Guinean</option>
            <option value="guyanese">Guyanese</option>
            <option value="haitian">Haitian</option>
            <option value="herzegovinian">Herzegovinian</option>
            <option value="honduran">Honduran</option>
            <option value="hungarian">Hungarian</option>
            <option value="icelander">Icelander</option>
            <option value="indian">Indian</option>
            <option value="indonesian">Indonesian</option>
            <option value="iranian">Iranian</option>
            <option value="iraqi">Iraqi</option>
            <option value="irish">Irish</option>
            <option value="israeli">Israeli</option>
            <option value="italian">Italian</option>
            <option value="ivorian">Ivorian</option>
            <option value="jamaican">Jamaican</option>
            <option value="japanese">Japanese</option>
            <option value="jordanian">Jordanian</option>
            <option value="kazakhstani">Kazakhstani</option>
            <option value="kenyan">Kenyan</option>
            <option value="kittian and nevisian">Kittian and Nevisian</option>
            <option value="kuwaiti">Kuwaiti</option>
            <option value="kyrgyz">Kyrgyz</option>
            <option value="laotian">Laotian</option>
            <option value="latvian">Latvian</option>
            <option value="lebanese">Lebanese</option>
            <option value="liberian">Liberian</option>
            <option value="libyan">Libyan</option>
            <option value="liechtensteiner">Liechtensteiner</option>
            <option value="lithuanian">Lithuanian</option>
            <option value="luxembourger">Luxembourger</option>
            <option value="macedonian">Macedonian</option>
            <option value="malagasy">Malagasy</option>
            <option value="malawian">Malawian</option>
            <option value="malaysian">Malaysian</option>
            <option value="maldivan">Maldivan</option>
            <option value="malian">Malian</option>
            <option value="maltese">Maltese</option>
            <option value="marshallese">Marshallese</option>
            <option value="mauritanian">Mauritanian</option>
            <option value="mauritian">Mauritian</option>
            <option value="mexican">Mexican</option>
            <option value="micronesian">Micronesian</option>
            <option value="moldovan">Moldovan</option>
            <option value="monacan">Monacan</option>
            <option value="mongolian">Mongolian</option>
            <option value="moroccan">Moroccan</option>
            <option value="mosotho">Mosotho</option>
            <option value="motswana">Motswana</option>
            <option value="mozambican">Mozambican</option>
            <option value="namibian">Namibian</option>
            <option value="nauruan">Nauruan</option>
            <option value="nepalese">Nepalese</option>
            <option value="new zealander">New Zealander</option>
            <option value="ni-vanuatu">Ni-Vanuatu</option>
            <option value="nicaraguan">Nicaraguan</option>
            <option value="Nigerian">Nigerian</option>
            <option value="north korean">North Korean</option>
            <option value="northern irish">Northern Irish</option>
            <option value="norwegian">Norwegian</option>
            <option value="omani">Omani</option>
            <option value="pakistani">Pakistani</option>
            <option value="palauan">Palauan</option>
            <option value="panamanian">Panamanian</option>
            <option value="papua new guinean">Papua New Guinean</option>
            <option value="paraguayan">Paraguayan</option>
            <option value="peruvian">Peruvian</option>
            <option value="polish">Polish</option>
            <option value="portuguese">Portuguese</option>
            <option value="qatari">Qatari</option>
            <option value="romanian">Romanian</option>
            <option value="russian">Russian</option>
            <option value="rwandan">Rwandan</option>
            <option value="saint lucian">Saint Lucian</option>
            <option value="salvadoran">Salvadoran</option>
            <option value="samoan">Samoan</option>
            <option value="san marinese">San Marinese</option>
            <option value="sao tomean">Sao Tomean</option>
            <option value="saudi">Saudi</option>
            <option value="scottish">Scottish</option>
            <option value="senegalese">Senegalese</option>
            <option value="serbian">Serbian</option>
            <option value="seychellois">Seychellois</option>
            <option value="sierra leonean">Sierra Leonean</option>
            <option value="singaporean">Singaporean</option>
            <option value="slovakian">Slovakian</option>
            <option value="slovenian">Slovenian</option>
            <option value="solomon islander">Solomon Islander</option>
            <option value="somali">Somali</option>
            <option value="south african">South African</option>
            <option value="south korean">South Korean</option>
            <option value="spanish">Spanish</option>
            <option value="sri lankan">Sri Lankan</option>
            <option value="sudanese">Sudanese</option>
            <option value="surinamer">Surinamer</option>
            <option value="swazi">Swazi</option>
            <option value="swedish">Swedish</option>
            <option value="swiss">Swiss</option>
            <option value="syrian">Syrian</option>
            <option value="taiwanese">Taiwanese</option>
            <option value="tajik">Tajik</option>
            <option value="tanzanian">Tanzanian</option>
            <option value="thai">Thai</option>
            <option value="togolese">Togolese</option>
            <option value="tongan">Tongan</option>
            <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
            <option value="tunisian">Tunisian</option>
            <option value="turkish">Turkish</option>
            <option value="tuvaluan">Tuvaluan</option>
            <option value="ugandan">Ugandan</option>
            <option value="ukrainian">Ukrainian</option>
            <option value="uruguayan">Uruguayan</option>
            <option value="uzbekistani">Uzbekistani</option>
            <option value="venezuelan">Venezuelan</option>
            <option value="vietnamese">Vietnamese</option>
            <option value="welsh">Welsh</option>
            <option value="yemenite">Yemenite</option>
            <option value="zambian">Zambian</option>
            <option value="zimbabwean">Zimbabwean</option>
            
            </select>
        </div>
    </div>

<div class="form-group" name="DoYouHaveTime">
<label>Do you have free time to do this project?</label>
<div id="DoYouHaveTime"> 
<input type="checkbox" name="checkbox[ ]" value="YES" required> YES
<input type="checkbox" name="checkbox[ ]" value="No" onclick="alert('Sorry, there is no need for you to continue if you dont have time to fill the form.'); window.location = 'index.php'"> NO
</div>
<br>
<div class="form-group">
<label>Where did you hear about this project? </label>
<input type="text" class="form-control" name="Hear" placeholder="Dubizzle, Facebook, From a friend " required>
</div>

    <div class="form-group">
        <div class="form-group">
            <label>Select Agent </label>

            <select id="referalAgent" name="referalAgent" style="width:100%;
            height: 40px;"> 
            <option value=" ">Click here to Select</option>
            <option value="Namita">Namita</option>
            <option value="Abraham">Abraham </option>
            <option value="Ramiat">Ramiat </option>
            <option value="Direct Walk In"> Direct Walk in </option>
            
            </select>
        </div>
    </div>

<div class="form-group">
<label>Who did you speak to before coming to the office? </label>
<input type="text" class="form-control" name="Speak" placeholder=" " required>
</div>

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

    var IDLE_TIMEOUT = 10 * 60;  // 1 minutes of inactivity
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
    $referalAgent = $_POST['referalAgent'];  
    $Speak = $_POST['Speak'];
    $DoYouHaveTime = $_POST['checkbox'];
    
    
    
    $qry = "INSERT into cus_details (FirstName, Surname, Email, MobileNumber, WhatsApp, Nationality, Hear, Speak, referalAgent, DoYouHaveTime,Time) values ('$first_name', '$surname', '$email', '$Phone_Number', '$whatsapp', '$Nationalty', '$Hear','$Speak', '$referalAgent', '$DoYouHaveTime', now())";
    
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