<?php
    session_start();
    $agentname = $_SESSION['username']; 

    include('../DB/connection.php');
    
    if(!isset($_SESSION['username'])){ //if login in session is not set
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">


    <?php include_once("../includes/head.php")?>

    <body>
    <!-- ########## START: LEFT PANEL ########## -->
    <?php include_once("../includes/sidebar.php")?>
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEADER ########## -->
    <?php include_once("../includes/header.php")?>
    <!-- ########## END: HEADER ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <?php include_once("../includes/right_panel.php")?>
    <!-- ########## END: RIGHT PANEL ########## -->
    
<div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20"        style="background-color:#e9ecef">
        </div><!-- br-pageheader -->



    <div class="br-pagebody">

        <!-- start you own content here -->
      <!-- Alert -->
      <div class="alert alert-success alert-dismissible" style="display: none; border-radius: 15px; text-align:center;">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> Form Submitted successfully. Please hand over the tab to the 
            receptionist, she will walk you to consultant .
          </div>
            <div class="alert alert-danger alert-dismissible" style="display: none;">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Error!</strong> Error in form submition.
            </div>
    <!-- END ALert -->

        <div class="row row-sm mg-t-20">
            <div class="col-8">
                <div class="card bd-0 shadow-base pd-30     mg-t-20" style="margin-top: 0%!Important">
                    <div class="d-flex align-items-center     justify-content-between mg-b-30">
                        <div>
                            <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">View CLient Full Details</h6>
                            <p class="mg-b-0"><i class="icon ion-arrow mg-r-5"></i> << Return to main page</p>
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
					  					
                        // $notes = $row['Notes'];
                        $Hear = $row['Hear'];
					  						$agent = $row['AgentName'];
                        $time = $row['Time'];
                        $referalAgent = $row['referalAgent'];
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
									<th>Where did you hear </th>
									<td><?php echo $Hear; ?></td>
								</tr>
								<tr>
									<th>Refered Agent</th>
									<td><?php echo $referalAgent; ?></td>
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
                  <i class="icon ion-ios-information alert-icon tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
                  
                  <h4 class="tx-success tx-semibold mg-b-20">Headups!!</h4>
                  <p class="mg-b-20 mg-x-20">You should leave some Remarks about what the client has said. <br>Let us know in particular the date and time they are willing to come back for the project.   </p>

                  <div class="form-group">
                  <form action="view-full-details.php" method="POST" enctype="multipart/form-data">

                    <textarea name="ffupcomment"rows="3" class="form-control" placeholder="Leave some comment about the client response HERE" required></textarea>

                    <input id="AgentName" type="hidden" class="form-control" name="AgentName" value="<?php echo $agentname ?>">

                    <input id="Hear" type="hidden" class="form-control" name="Hear" value="<?php echo $Hear ?>">

                    <input id="Hear" type="hidden" class="form-control" name="Nationality" value="<?php echo $nationality ?>">

                    <input id="Hear" type="hidden" class="form-control" name="Whatsapp" value="<?php echo $whatsapp ?>">

                    <input id="Hear" type="hidden" class="form-control" name="Phone_Number" value="<?php echo $phone ?>">

                    <input id="Hear" type="hidden" class="form-control" name="email" value="<?php echo $email ?>">

                    <input id="Hear" type="hidden" class="form-control" name="first_name" value="<?php echo $first_name ?>">

                    <input id="Hear" type="hidden" class="form-control" name="first_name" value="<?php echo $name ?>">

                  </div>

                      <br>
                      <button type="submit"name="submit"class="btn btn-success tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20">
                    Submit</button>

                  </form>
                   </div><!-- form-group -->
           
               
   
 
                
                  </div><!-- modal-body -->
                </div><!-- modal-content -->
              </div><!-- modal-dialog -->
          </div><!-- modal 4 end-->
          </div>
        </div><!-- br-pagebody -->
      <br>
      <br>
      <!-- MODALS  -->

        <!-- ########## START: FOOTER ########## -->
        <?php include_once("../includes/footer.php")?>
        <!-- ########## END: FOOTER ########## -->
</html>

<?php

if(isset($_POST['submit'])) {
  $_SESSION['last_insert_id']=$id;
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];
    $Phone_Number = $_POST['Phone_Number'];
    $whatsapp = $_POST['WhatsApp'];
    $nationality = $_POST['Nationality'];
    $Hear = $_POST['Hear'];
   
    $agentname = $_POST['AgentName'];
   
    
    $ffupcomment = $_POST ['ffupcomment'];


    $qry = "INSERT into followup (FirstName, Surname, Email,MobileNumber, WhatsApp, Nationality, Hear, AgentName,ffupcomment,Time)values ('$first_name', '', '$email', '$Phone_Number', '$whatsapp', '$nationality', '$Hear', '$agentname','$ffupcomment', now())";
  
    if(mysqli_query($con, $qry)) {
      $id=mysqli_insert_id($con);
  
  //header('Location: register_details.php');
  
  if (isset($_POST['submit'])) {
  $_SESSION['last_insert_id']=$id;
  
      echo '
          <script>
              $(".alert-success").css("display","block");
          </script>
      ';        
  }	
  
  header('Location: http://localhost/algbra/dashboard/app/index.php');

  }else {
      echo mysqli_error($con);
      echo '
          <script>
              $(".alert-danger").css("display","block");
          </script>
      ';
  }
}	

//Last Working Model

?>