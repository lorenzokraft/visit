<!DOCTYPE html>
<html lang="en">


<head>

	<meta charset="utf-8">
	<title>Admin</title>
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
	<script src="../../../ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
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

	<!-- Top Fixed Bar -->
	<div class="navbar navbar-inverse navbar-fixed-top">

		<!-- Top Fixed Bar: Navbar Inner -->
		<div class="navbar-inner">

			<!-- Top Fixed Bar: Container -->
			<div class="container">

				<!-- Mobile Menu Button -->
				<a href="#">
					<button type="button" class="btn btn-navbar mobile-menu">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</a>
				<!-- / Mobile Menu Button -->

				<!-- / Logo / Brand Name -->
				<!-- <a class="brand" href="#"><i class="icon-user"></i> Admin<b>Panel</b></a> -->
				<!-- / Logo / Brand Name -->

				<!-- User Navigation -->
				<ul class="nav pull-right">
					
					<!-- User Navigation: Notifications -->
					<li class="dropdown">

						<!-- User Navigation: Notifications Link -->
						<!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-align-justify icon-white"></i>
							<span class="hidden-phone"> Notifications </span>
							<span class="badge badge-inverse">16</span>
						</a> -->

						<!-- / User Navigation: Notifications Link -->

						<!-- User Navigation: Notifications Dropdown -->
						<ul class="dropdown-menu widget">

							<!-- User Navigation: Notifications Top -->
							<li>

								<!-- User Navigation: Notifications Add News -->
								<a href="#" class="send" rel="tooltip" title="Add News"><i class="icon-edit"></i></a>
								<!-- / User Navigation: Notifications Add News -->

								<!-- User Navigation: Notifications Header -->
								<h2><i class="icon-align-justify"></i> Notifications 
								<span class="badge badge-light small">16</span></h2>
								<!-- / User Navigation: Notifications Header -->
							</li>
							<!-- / User Navigation: Notifications Top -->

							<!-- User Navigation: Notifications Item -->
							<li>
								<a href="#" class="note">
									<small>1 hour ago</small>
									<p><i class="icon-edit"></i> <b>You</b> added <b>We´ve launched!</b></p>
								</a>
							</li>
							<!-- / User Navigation: Notifications Item -->

							<!-- User Navigation: Notifications Item -->
							<li>
								<a href="#" class="note">
									<small>6 hour ago</small>
									<p><i class="icon-edit"></i> <b>You</b> added <b>Some changes</b></p>
								</a>
							</li>
							<!-- / User Navigation: Notifications Item -->

							<!-- User Navigation: Notifications Item -->
							<li>
								<a href="#" class="note">
									<small>12 hour ago</small>
									<p><i class="icon-envelope"></i> <b>Jason</b> sendt you a message</p>
								</a>
							</li>
							<!-- / User Navigation: Notifications Item -->

							<!-- User Navigation: Notifications Item -->
							<li>
								<a href="#" class="note">
									<small>15 hour ago</small>
									<p><i class="icon-user"></i> <b>Kate</b> added you as friend</p>
								</a>
							</li>
							<!-- / User Navigation: Notifications Item -->

							<!-- User Navigation: Notifications View All -->
							<li><a href="#" class="text-center"><i class="icon-inbox"></i> View All Notifications</a></li>
							<!-- / User Navigation: Notifications View All -->

						</ul>
						<!-- / User Navigation: Notifications Dropdown -->

					</li>
					<!-- / User Navigation: Notifications -->

					<!-- User Navigation: Messages -->
					<li class="dropdown">

						<!-- User Navigation: Messages Link -->
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class=""></i>
							<span class="hidden-phone">  </span>
							<span class="badge badge-inverse">WELCOME</span>
						</a>
						<!-- / User Navigation: Messages Link -->

						<!-- / User Navigation: Messages Dropdown -->
						<ul class="dropdown-menu widget">

							<!-- User Navigation: Messages Top -->
							<li>

								<!-- User Navigation: Messages New Message -->
								<a href="#" class="send" rel="tooltip" title="New Message"><i class="icon-edit"></i></a>
								<!-- / User Navigation: Messages New Message -->

								<!-- User Navigation: Messages Header -->
								<h2><i class="icon-envelope"></i> Messages <span class="badge badge-light small">6</span></h2>
								<!-- / User Navigation: Messages Header -->

							</li>
							<!-- / User Navigation: Messages Top -->

							<!-- User Navigation: Messages Message -->
							<li>
								<a href="#" class="message">
									<small>1 hour ago</small>
									<h3><i class="icon-user"></i> Jason</h3>
									<p>Keep up the work! </p>
								</a>
							</li>
							<!-- / User Navigation: Messages Message -->

							<!-- User Navigation: Messages Message -->
							<li>
								<a href="#" class="message">
									<small>3 hour ago</small>
									<h3><i class="icon-user"></i> Janika</h3>
									<p>Did you update that thing? </p>
								</a>
							</li>
							<!-- / User Navigation: Messages Message -->

							<!-- User Navigation: Messages View All Messages -->
							<li>
								<a href="#" class="text-center">
									<i class="icon-inbox"></i> View All Messages
								</a>
							</li>
							<!-- / User Navigation: Messages View All Messages -->

						</ul>
						<!-- / User Navigation: Messages Dropdown -->

					</li>
					<!-- / User Navigation: Messages -->

					<!-- User Navigation: User -->
					<li class="dropdown">

						<!-- User Navigation: User Link -->
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user icon-white"></i> 
							<span class="hidden-phone">Admin</span>
						</a>
						<!-- / User Navigation: User Link -->

						<!-- User Navigation: User Dropdown -->
						<ul class="dropdown-menu">
							<li><a href="#"><i class="icon-user"></i> Profile</a></li>
							<li><a href="#settings" data-toggle="modal"><i class="icon-cog"></i> Settings</a></li>
							<li><a href="#messages" data-toggle="modal"><i class="icon-envelope"></i> Messages</a></li>
							<li class="divider"></li>
							<li><a href="#"><i class="icon-off"></i> Logout</a></li>
						</ul>
						<!-- / User Navigation: User Dropdown -->

					</li>
					<!-- / User Navigation: User -->

				</ul>
				<!-- / User Navigation -->

			</div>
			<!-- / Top Fixed Bar: Container -->

		</div>
		<!-- / Top Fixed Bar: Navbar Inner -->

		<!-- Top Fixed Bar: Breadcrumb -->
		<div class="breadcrumb clearfix">

			<!-- Top Fixed Bar: Breadcrumb Container -->
			<div class="container">

				<!-- Top Fixed Bar: Breadcrumb Location -->
				<!-- <ul class="pull-left">
					<li><a href="#"><i class="icon-home"></i> </a> <span class="divider">/</span></li>
					<li class="active"><a href="#"><i class="icon-align-justify"></i> </a></li>
				</ul> -->
				<!-- / Top Fixed Bar: Breadcrumb Location -->

				<!-- Top Fixed Bar: Breadcrumb Right Navigation -->
				<ul class="pull-right">

					<!-- Top Fixed Bar: Breadcrumb Theme -->
					<li class="dropdown">
						<!-- Top Fixed Bar: Breadcrumb Theme Link -->
						<!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i> Theme</a> -->

						<!-- Top Fixed Bar: Breadcrumb Theme Dropdown -->
						<ul class="dropdown-menu" id="theme">
							<li><a href="#" data-style="avocado" class="active"><i class="icon-circle"></i> Avocado</a></li>
							<li><a href="#" data-style="strawberry"><i class="icon-circle"></i> Strawberry</a></li>
							<li><a href="#" data-style="blueberry"><i class="icon-circle"></i> Blueberry</a></li>
							<li><a href="#" data-style="azalea"><i class="icon-circle"></i> Azalea</a></li>
							<li><a href="#" data-style="tangerine"><i class="icon-circle"></i> Tangerine</a></li>
						</ul>
						<!-- / Top Fixed Bar: Breadcrumb Theme Dropdown -->

					</li>
					<!-- / Top Fixed Bar: Breadcrumb Theme -->

					<li><a href="login.html"><i class="icon-off"></i> Logout</a></li>
				</ul>
				<!-- / Top Fixed Bar: Breadcrumb Right Navigation -->

			</div>
			<!-- / Top Fixed Bar: Breadcrumb Container -->

		</div>
		<!-- / Top Fixed Bar: Breadcrumb -->

	</div>
	<!-- / Top Fixed Bar -->

	<!-- Moldule: Settings -->
	<div id="settings" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel"><i class="icon-cog"></i> Account settings</h3>
		</div>

		<div class="modal-body">

			<form class="form-horizontal">
		
				<div class="control-group">
					<label class="control-label" for="inputName"><i class="icon-user"></i> Name</label>
					<div class="controls">
						<input type="text" id="inputName" placeholder="Name">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="inputUsername"><i class="icon-user"></i> Username</label>
					<div class="controls">
						<input type="text" id="inputUsername" placeholder="Username">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="inputPassword"><i class="icon-key"></i> Password</label>
					<div class="controls">
						<input type="password" id="inputPassword" placeholder="Password">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="inputRepeat"><i class="icon-key"></i> Repeat Password</label>
					<div class="controls">
						<input type="password" id="inputRepeat" placeholder="Password">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="inputEmail"><i class="icon-envelope"></i> Email</label>
					<div class="controls">
						<input type="text" id="inputEmail" placeholder="Email">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="inputWebsite"><i class="icon-home"></i> Website</label>
					<div class="controls">
						<input type="text" id="inputUsername" placeholder="Website">
					</div>
				</div>
						 
		</div>

		<div class="modal-footer">

			<button class="btn btn-primary">Save changes</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			</form>

		</div>

	</div> 
	<!-- / Module: Settings -->

	<!-- Module: Messages -->
	<div id="messages" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel"><i class="icon-comment"></i> Messages</h3>
		</div>

		<div class="modal-body no-padding">
		
			<div class="list-widget">

				<div class="item">
					<small class="pull-right">2 hours ago</small>
					<h3><i class="icon-user"></i> Kasper <span class="label">admin</span></h3>
					<p>This panel is so cool!</p>
				</div>
			
				<div class="item">
					<small class="pull-right">6 hours ago</small>
					<h3><i class="icon-user"></i> Janika <span class="label">admin</span></h3>
					<p>Look at this stuff I made!</p>
				</div>

				<div class="item">
					<small class="pull-right">8 hours ago</small>
					<h3><i class="icon-user"></i> Janika <span class="label">admin</span></h3>
					<p>I'll make this admin panel holy as swiss cheese.</p>
				</div>

			</div>

		</div>

		<div class="modal-footer">

			<a href="#newmessage" class="btn btn-primary" data-dismiss="modal" data-toggle="modal">New mesaage</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>

		</div>

	</div>
	<!-- / Module: Messages -->
	 
	<!-- Module: New Messages -->
	<div id="newmessage" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel"><i class="icon-comment"></i> New Message</h3>
		</div>

		<div class="modal-body">
			<div class="control-group">
				<label class="control-label" for="inputName"> </label>
				<div class="controls">
					<input type="text" id="inputName" placeholder="Recipient">
				</div>
			</div>
			
			<!-- Textarea -->
			<div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">

				<div class="btn-group">
					<a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="icon-font"></i><b class="caret"></b></a>
					<ul class="dropdown-menu">
					</ul>
				</div>

				<div class="btn-group">
					<a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
					<ul class="dropdown-menu">
					<li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
					<li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
					<li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
					</ul>
				</div>

				<div class="btn-group">
					<a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>
					<a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>
					<a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="icon-strikethrough"></i></a>
					<a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="icon-underline"></i></a>
				</div>
				
				<div class="btn-group">
					<a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="icon-picture"></i></a>
					<input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
				</div>

			</div>

			<div id="sendmessage"></div>
			<!-- /Textarea -->

		</div>
		<div class="modal-footer">

			<button class="btn btn-primary">Send Message</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>

		</div>

	</div>
	<!-- / Module: New Messages -->

	<!-- Content Container -->
	<div class="container">

		<!-- Main Navigation: Box -->
		<div class="navbar navbar-inverse" id="nav">

			<!-- Main Navigation: Inner -->
			<div class="navbar-inner">

				<!-- Main Navigation: Nav -->
				<ul class="nav">

					<!-- Main Navigation: Dashboard -->
					<li class="active"><a href="index.php"><i class="icon-align-justify"></i> Dashboard</a></li>
					<!-- / Main Navigation: Dashboard -->

					<!-- Main Navigation: General -->
					<li><a href="newuser.php"><i class="icon-picture"></i> Add New Agent User </a></li>
					<!-- / Main Navigation: General -->

					<!-- Main Navigation: UI Elements -->
			
					<!-- / Main Navigation: UI Elements -->

					<!-- Main Navigation: Components -->
				
					<!-- / Main Navigation: Components -->

					<!-- Main Navigation: Gallery -->
					<li><a href="enquires.html"><i class="icon-picture"></i> View Enquires</a></li>
					<!-- / Main Navigation: Gallery -->

				</ul>
				<!-- / Main Navigation: Nav -->
			
				<!-- Main Navigation: Search -->
				
				<!-- / Main Navigation: Search -->

			</div>
			<!-- / Main Navigation: Inner -->

		</div>
		<!-- / Main Navigation: Box -->

		<!-- Alert -->
		<!-- <div class="alert alert-light">
			<a class="close" data-dismiss="alert">&times;</a>
			<i class="icon-comment"></i> Welcome back, <b>Admin</b>. We have missed you!
		</div> -->
		<!-- / Alert -->

		<!-- Information Boxes -->
		<div class="row-fluid">

			<!-- Information Boxes: Users Registered -->
			<div class="span4 well infobox">
				<i class="icon-6x icon-user"></i>
				<div class="pull-right text-right">
					 Registered Agent<br>
					<b class="huge">5</b><br>
					<span class="caps muted"></span>
				</div>
			</div>
			<!-- / Information Boxes: Users Registered -->


			<!-- Information Boxes: Images -->
			<div class="span4 well infobox">
				<i class="icon-6x icon-calendar"></i>
				<div class="pull-right text-right">
					 Enquires This Month<br>
					<b class="huge">31</b><br>
					<!-- <span class="caps muted">+5 Today</span> -->
				</div>
			</div>

			<!-- Information Boxes: Active Users -->
			<div class="span4 well infobox">
				<i class="icon-6x icon-rss"></i>
				<div class="pull-right text-right">
					All Enquires <br>
					<b class="huge">432</b><br>
					<!-- <span class="caps muted">+5 Today</span> -->
				</div>
			</div>
			<!-- / Information Boxes: Active Users -->

			
			<!-- / Information Boxes: Images -->
			
			<!-- Information Boxes: Applications -->
			<!-- <div class="span3 well infobox">
				<i class="icon-6x icon-Calender"></i>
				<div class="pull-right text-right">
					Days Left in the Month<br>
					<b class="huge">4</b><br>
					<span class="caps muted">Installed</span>
				</div>
			</div> -->
			<!-- / Information Boxes: Applications -->

		</div>
		<!-- / Information Boxes -->

		<!-- Site Traffic and Pie -->
		<div class="row-fluid">

			<!-- Site Traffic: Box -->
			<div class="span8">

				<!-- Site Traffic: Top Bar -->
				<div class="top-bar">
					<ul class="tab-container">
					  <li class="active">
					  	<a href="#tab-traffic"><i class="icon-bar-charR"></i> </a></li>
					  <!-- <li><a href="#tab-server"><i class="icon-cogs"></i> Serch by Name</a></li>
					  <li><a href="#tab-server"><i class="icon-cogs"></i> Serch Attendance by Date</a></li>
					  <li><a href="#tab-server"><i class="icon-cogs"></i> Serch by Name & Date</a></li> -->

					</ul>
				</div>
				<!-- / Site Traffic: Top Bar -->

				<!-- Site Traffic: Content -->
				<div class="well">

					<div class="tab-content">

					  <div class="tab-pane active" id="tab-traffic">

						  <!-- 	<div class="progress progress-mini">
							<div class="bar" style="width: 15%;"></div>
							</div> -->

							<!-- <div class="alert alert-info">
								<button type="button" data-dismiss="alert">&times;</button>
								<i class="icon-bolt"></i> <b>Create A New Agent Account </b> 


							</div> -->
							<!-- <div>
							<h5 style="font-size: 20px;">Create A New Agent Account </h5>
							<form>
								 USERNAME<br>
								  <input type="text" name="firstname"> <br>

								  <br>
								  AGENT EMAIL <br>
								  <input type="text" name="firstname"> <br>
								  <br>
								  CHOOSE A PASSWORD<br>
								  <input type="text" name="firstname"> <br>
<br>							
								<button class="btn btn-large" type="button">Create Account </button>
								  
								</form>
							</div> -->


							

							
						</div>
						  
						<div class="tab-pane" id="tab-server">

							<div class="progress progress-danger progress-mini">
							<div class="bar" style="width: 98%;"></div>
							</div>

							<div class="alert alert-error">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<i class="icon-bolt"></i> <b>Huge Traffic</b> Your server has nearly exceeded the bandwidth limits.
							</div>

							<div class="graph realtimechart"></div>
						
						</div>

					</div>

				</div>
				<!-- / Site Traffic: Content -->

			</div>
			<!-- / Site Traffic: Box -->
			
			<!-- Pie: Box -->
			<div class="span4">

				<!-- Pie: Top Bar -->
				<div class="top-bar">
					<h3><i class="icon-money"></i> Calendar </h3>
				</div>
				<!-- / Pie: Top Bar -->

				<!-- Pie: Content -->
				<div class="well">

					<!-- <div class="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<i class="icon-star"></i> <b>Income Update</b> Your income has gone up by 74% the last week.
					</div> -->
					<div>
						<center>
								<script language="javascript" type="text/javascript">
								var day_of_week = new Array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
								var month_of_year = new Array('January','February','March','April','May','June','July','August','September','October','November','December');

								//  DECLARE AND INITIALIZE VARIABLES
								var Calendar = new Date();

								var year = Calendar.getFullYear();     // Returns year
								var month = Calendar.getMonth();    // Returns month (0-11)
								var today = Calendar.getDate();    // Returns day (1-31)
								var weekday = Calendar.getDay();    // Returns day (1-31)

								var DAYS_OF_WEEK = 7;    // "constant" for number of days in a week
								var DAYS_OF_MONTH = 31;    // "constant" for number of days in a month
								var cal;    // Used for printing

								Calendar.setDate(1);    // Start the calendar day at '1'
								Calendar.setMonth(month);    // Start the calendar month at now


								/* VARIABLES FOR FORMATTING
								NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
								      tags to customize your caledanr's look. */

								var TR_start = '<TR>';
								var TR_end = '</TR>';
								var highlight_start = '<TD WIDTH="30"><TABLE CELLSPACING=0 BORDER=1 BGCOLOR=DEDEFF BORDERCOLOR=CCCCCC><TR><TD WIDTH=20><B><CENTER>';
								var highlight_end   = '</CENTER></TD></TR></TABLE></B>';
								var TD_start = '<TD WIDTH="30"><CENTER>';
								var TD_end = '</CENTER></TD>';

								/* BEGIN CODE FOR CALENDAR
								NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
								tags to customize your calendar's look.*/

								cal =  '<TABLE BORDER=1 CELLSPACING=0 CELLPADDING=0 BORDERCOLOR=BBBBBB><TR><TD>';
								cal += '<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=2>' + TR_start;
								cal += '<TD COLSPAN="' + DAYS_OF_WEEK + '" BGCOLOR="#daeef4"><CENTER><B>';
								cal += month_of_year[month]  + '   ' + year + '</B>' + TD_end + TR_end;
								cal += TR_start;

								//   DO NOT EDIT BELOW THIS POINT  //

								// LOOPS FOR EACH DAY OF WEEK
								for(index=0; index < DAYS_OF_WEEK; index++)
								{

								// BOLD TODAY'S DAY OF WEEK
								if(weekday == index)
								cal += TD_start + '<B>' + day_of_week[index] + '</B>' + TD_end;

								// PRINTS DAY
								else
								cal += TD_start + day_of_week[index] + TD_end;
								}

								cal += TD_end + TR_end;
								cal += TR_start;

								// FILL IN BLANK GAPS UNTIL TODAY'S DAY
								for(index=0; index < Calendar.getDay(); index++)
								cal += TD_start + '  ' + TD_end;

								// LOOPS FOR EACH DAY IN CALENDAR
								for(index=0; index < DAYS_OF_MONTH; index++)
								{
								if( Calendar.getDate() > index )
								{
								  // RETURNS THE NEXT DAY TO PRINT
								  week_day =Calendar.getDay();

								  // START NEW ROW FOR FIRST DAY OF WEEK
								  if(week_day == 0)
								  cal += TR_start;

								  if(week_day != DAYS_OF_WEEK)
								  {

								  // SET VARIABLE INSIDE LOOP FOR INCREMENTING PURPOSES
								  var day  = Calendar.getDate();

								  // HIGHLIGHT TODAY'S DATE
								  if( today==Calendar.getDate() )
								  cal += highlight_start + day + highlight_end + TD_end;

								  // PRINTS DAY
								  else
								  cal += TD_start + day + TD_end;
								  }

								  // END ROW FOR LAST DAY OF WEEK
								  if(week_day == DAYS_OF_WEEK)
								  cal += TR_end;
								  }

								  // INCREMENTS UNTIL END OF THE MONTH
								  Calendar.setDate(Calendar.getDate()+1);

								}// end for loop

								cal += '</TD></TR></TABLE></TABLE>';

								//  PRINT CALENDAR
								document.write(cal);

								//  End -->
								</script>
								</center>
								<br/>
								<div style="clear:both">
								</div>
						
					</div>
					<!--calender end-->

					
				<!-- / Pie: Content -->

			</div>
			<!-- / Pie -->
			
		</div>
		<!-- / Site Traffic and Pie -->

		<!-- Create Account and Messages -->
	
		<!-- / Create Account and Messages -->

		<!-- Calendar and Todo List -->
		<
			<!-- / Todo List: Box -->

		</div>
		<!-- / Calendar and Todo List --> 

		<!-- Add News and Activity -->
		<div class="row-fluid">

			<!-- Add News: Box -->
			<div class="span8">
				<!-- Add News: Top Bar -->
				
			<!-- / Add News: Box -->

			<!-- Activity: Box -->
			<div class="span4">

				<!-- Activity: Top Bar -->
				
			<!-- / Activity: Box -->
				
		</div>
		<!-- / Add News and Activity -->

	</div> 
	<!-- / Content Container -->

	<!-- Footer -->
	<!-- <footer class="footer">

			Footer Container
      <div class="container"> -->

				<!-- Footer Container: Content -->
        <!-- <p>Development and design by <a href="#">Lorenzo Kraft</a> 

        <p>Copyrighted <a href="#">WCP</a> 2016. All rights resserved.</p> -->

        <!-- <p><a href="http://fortawesome.github.io/Font-Awesome/">Fontawesome</a> licensed under <a href="http://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&amp;id=OFL">SIL OFL </a>.</p>

        <ul>
          <li><a href="http://themeforest.net/user/LycheeDesigns">Buy Theme</a></li>
          <li class="muted">·</li>
          <li><a href="http://themeforest.net/user/LycheeDesigns">Lychee</a></li>
          <li class="muted">·</li>
          <li><a href="https://twitter.com/lycheedesigns">Twitter</a></li>
        </ul> -->
        <!-- / Footer Container: Content -->

      </div>
      <!-- / Footer Container -->

	</footer>
	<!-- / Footer -->

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
	

</html>