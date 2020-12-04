<?php
    session_start();
    //$agentname = $_SESSION['username']; 

    include('../DB/connection.php');
    
    if(!isset($_SESSION['username'])){ //if login in session is not set
    header("Location: http://localhost/algbra/dashboard/");
}
?>
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

    <title>Instaweb Data </title>

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">



    <script type="text/javascript">
		$(document).ready( function () {
		    $('.table').DataTable();
		} );
	</script>
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href="index.php">
      <img src="../img/logo.png" 
      style="  width: 120px;height: 78px;">
    </div>
    <div class="br-sideleft overflow-y-auto">
      <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>

      <div class="br-sideleft-menu">
        <a href="index.php" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->

        </a><!-- br-menu-link -->
        <a href="mailbox.html" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
            <span class="menu-item-label">Mailbox</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="card-dashboard.html" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Onboarding </span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
    

        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-list-outline tx-22"></i>
            <span class="menu-item-label">Registrations </span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="navigation.html" class="nav-link">View Registrations </a></li>
          <li class="nav-item"><a href="navigation-layouts.html" class="nav-link">Add New Registrations </a></li>
        </ul>
       
    
        <a href="layouts.html" class="br-menu-link">
          <div class="br-menu-item">
          
            <i class="menu-item-icon icon ion-power tx-22"></i>
            <span class="menu-item-label">Logout</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->


      </div><!-- br-sideleft-menu -->

      <label class="sidebar-label pd-x-15 mg-t-25 mg-b-20 tx-info op-9"></label>

     

      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="input-group hidden-xs-down wd-170 transition">
          <input id="searchbox" type="text" class="form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
          </span>
        </div><!-- input-group -->
      </div><!-- br-header-left -->
      <div class="br-header-right">
      
        <div class="navicon-right">
          <a id="btnRightMenu" href="" class="pos-relative">
            <i class="icon ion-ios-chatboxes-outline"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger pos-absolute t-10 r--5 rounded-circle"></span>
            <!-- end: if statement -->
          </a>
        </div><!-- navicon-right -->
      </div><!-- br-header-right -->
    </div><!-- br-header -->
    
<div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20"        style="background-color:#e9ecef">
        </div><!-- br-pageheader -->



    <div class="br-pagebody">

        <!-- start you own content here -->

        <div class="row row-sm mg-t-20">
            <div class="col-8">
                <div class="card bd-0 shadow-base pd-30     mg-t-20" style="margin-top: 0%!Important">
                    <div class="d-flex align-items-center     justify-content-between mg-b-30">
                        <div>
                            <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">New Consultations</h6>
                            <p class="mg-b-0"><i class="icon ion-calendar mg-r-5"></i> November 15th 2020</p>
                        </div>
               
                    </div><!-- d-flex -->      

          <table class="table table-valign-middle mg-b-0">
                  
						<?php 
						
						$qry = "SELECT * from cus_details WHERE ID=".$_GET['id']."";
					  				$run = $con -> query($qry);
					  				if($run -> num_rows > 0){
					  				$row = $run -> fetch_assoc();
					  						$first_name = $row['FirstName'];
					  						$sur_name = $row['Surname'];
					  						$name = $first_name . ' ' . $sur_name;
					  						$email = $row['Email'];
					  						$phone = $row['MobileNumber'];
					  						$whatsapp = $row['WhatsApp'];
					  						$nationality = $row['Nationality'];
					  						$services = $row['VisaType'];
					  						$visaDays = $row['VisaReq'];
					  						$visaChange = $row['VisaChangeReq'];
					  						$visaGlobal = $row['GlobalVisa'];
                        // $notes = $row['Notes'];
                        $Hear = $row['Hear'];
					  						$agent = $row['AgentName'];
					  						$time = $row['Time'];
					  				}
						?>
					  	    <!-- <caption style='font-size:14px;font-weight:bold;'>Enquries Records</caption> -->
					  		<thead>
					  			<tr class="table table-valign-middle mg-b-0">
					  				<th>CLient Name</th>
									<td><?php echo $name; ?></td>
								  </tr>
                  <tr>
                      <th>Client Email</th>
                    <td><?php echo $email; ?></td>
                  </tr>
								  <tr class="table table-valign-middle mg-b-0">
					  				<th>Phone Number</th>
									<td><?php echo $phone; ?></td>
                                </tr>
                                <tr>
									<th>WhatsApp</th>
									<td><?php echo $whatsapp; ?></td>
					  			</tr>
								
								<tr class="table table-valign-middle mg-b-0">
					  				<th>Visit Date </th>
									<td><?php echo $time; ?></td>
								</tr>
								
								<tr>
									<th>Nationality</th>
								<td><?php echo $nationality; ?></td>
								</tr>
								
								<tr class="table table-valign-middle mg-b-0">
									<th>Referal</th>
									<td><?php echo $Hear; ?></td>
								</tr>
								<tr>
									<th>Activity</th>
									<td>Enquiry</td>
								</tr>
					  		</thead>
					  		<tbody>
					  		
					  			<tr>
					  				
					  				
					  				
					  				<!--td><?php //echo $whatsapp; ?></td>
					  				<td><?php //echo $nationality; ?></td>
					  				<td><?php //echo $services; ?></td>
					  				<td><?php //echo $visaDays; ?></td>
					  				<td><?php //echo $visaChange; ?></td>
					  				<td><?php //echo $visaGlobal; ?></td>
					  				<td><?php //echo $notes; ?></td-->
					  				
					  				
					
					  			</tr>
					  			
					  		</tbody>
					  </table>
					  	<br>
                          
                          
                         <button class="btn btn-secondary" type="button" style="
                          "><i class="fa fa-arrow-left"><a href="index.php" style="
                          font-size: 16px;
                            font-family: 'Roboto';
                            font-weight: 900;
                            color: #6dec0d;">  GO BACK </i></a></button>
      


                </div><!-- col-9 -->
          </div><!-- br-pagebody -->
          <div class="col-4">
            <button class="btn btn-primary pd-y-12 btn-block" style="color: #fff!important;
                    background-color: #858e96!important;
                    border-color: #1d2939!important;">
                    <a href="register-client.php?id=<?php echo $row['ID']; ?>">Register Client</a>
                </button>
<br>
                <button class="btn btn-primary pd-y-12 btn-block" style="color: #fff!important;
                    background-color: #858e96!important;
                    border-color: #1d2939!important;">
                    <a href="#" data-toggle="modal" data-target="#modaldemo2">Add To Follow Up </a>
                </button>
<br>
                <button class="btn btn-primary pd-y-12 btn-block" style="color: #fff!important;
                    background-color: #858e96!important;
                    border-color: #1d2939!important;">
                    <a href="index.php">Go Back </a>
                </button>

                <!-- Follow Up MODAL -->
            <div id="modaldemo2" class="modal fade">
              <div class="modal-dialog" role="document">
                <div class="modal-content tx-size-sm">
                  <div class="modal-body tx-center pd-y-20 pd-x-20">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <i class="icon icon ion-ios-close-outline tx-100 tx-danger lh-1 mg-t-20 d-inline-block"></i>
                    <h4 class="tx-danger  tx-semibold mg-b-20">HEY, Why are you not <br>converting this client?</h4>
                    <p class="mg-b-5" style="font-size: 16px!important;
                    color: #0f151d;
                    padding: 10px;
                    font-family: 'Roboto';">REMEMBER, You should always spend at least 15 Minutes with a client to explain the project to them in details. </p>
                    <br>
                    <button type="button" data-toggle="modal" data-target="#Modalthink"  class="btn btn-danger tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">They are not interested
                      
                      </button>

                      <button data-toggle="modal" data-target="#modaldemo4"class="btn btn-primary tx-11 active pd-y-12 pd-x-25 tx-mont tx-medium">
                      THEY WANT TO THINK ABOUT IT
                      </button>


                    </div><!-- modal-body -->
                  </div><!-- modal-content -->
                </div><!-- modal-dialog -->
              </div>
              
          <!-- Think about it Modal -->
           <div id="Modalthink" class="modal fade">
            <div class="modal-dialog" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-body tx-center pd-y-20 pd-x-20">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location = 'index.php';">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <i class="icon ion-ios-checkmark-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
                  <h4 class="tx-success tx-semibold mg-b-20"> Thank you :(</h4>
                  <p class="mg-b-20 mg-x-20">Your descission has been recorder. <br>
                  
                  </p>
                  
                  <button type="button" class="btn btn-success tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" data-dismiss="modal" aria-label="Close" onclick="window.location = 'index.php';">
                    Continue</button>
                  </div><!-- modal-body -->
                </div><!-- modal-content -->
              </div><!-- modal-dialog -->
          </div><!-- ENd modal -->
         
           <!-- Not interested Modal  -->
           <div id="modaldemo4" class="modal fade">
            <div class="modal-dialog" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-body tx-center pd-y-20 pd-x-20">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location = 'index.php';">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <i class="icon ion-ios-checkmark-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
                  <h4 class="tx-success tx-semibold mg-b-20">Awesome!!</h4>
                  <p class="mg-b-20 mg-x-20">Thank you, the client has been added to the follow up list Successfully. you will get an automated reminder to contact the client again after 7 days.</p>
                  
                  <button type="button" class="btn btn-success tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" data-dismiss="modal" aria-label="Close" onclick="window.location = 'index.php';">
                    Okay</button>
                  </div><!-- modal-body -->
                </div><!-- modal-content -->
              </div><!-- modal-dialog -->
          </div><!-- modal -->
          </div>
        </div><!-- br-pagebody -->
      <br>
      <br>
      <!-- MODALS  -->

        
      

               
        <p style="text-align:center; margin-top:10px;">Copyright &copy; 
              2020. Instaweb Technologies LLC.
        </p>
      <footer class="br-footer">
        <div>
          
            <div>For Internal use only.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracket/intro"><i class="fa fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracket/intro"><i class="fa fa-twitter tx-20"></i></a>
        </div>
      </footer>

</div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>
    <script src="../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="../lib/moment/moment.js"></script>
    <script src="../lib/jquery-ui/jquery-ui.js"></script>
    <script src="../lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="../lib/peity/jquery.peity.js"></script>

    <script src="../js/bracket.js"></script>
  </body>
</html>
