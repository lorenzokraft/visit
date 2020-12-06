<?php
    session_start();
    $agentname = $_SESSION['username']; 
    

    include('../DB/connection.php');
    
    if(!isset($_SESSION['username'])){ //if login in session is not set
    header("Location: algbra/dashboard");
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

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5"> </h4>
        <p class="mg-b-0"></p>
      </div>

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Registration Form</h6>
          <p class="mg-b-40 tx-gray-600">Please make sure you fill al the form fields </p>
          <div class=" col-sm-12 row row-sm">
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
    <table class="table table-valign-middle mg-b-0">
                <tbody>
                  <?php 
                    $qry = "SELECT * from cus_details ORDER by ID DESC LIMIT 10";
                    $run = $con -> query($qry);
                    if($run -> num_rows > 0){
                      while($row = $run -> fetch_assoc()) {
                        $sid = $row['ID'];
                        $first_name = $row['FirstName'];
                        $sur_name = $row['Surname'];
                        $name = $first_name . ' ' . $sur_name;
                        $email = $row['Email'];
                        $phone = $row['MobileNumber'];
                        
                        $nationality = $row['Nationality'];
                        $services = $row['VisaType'];
                        $visaDays = $row['VisaReq'];
                        $visaChange = $row['VisaChangeReq'];
                        $visaGlobal = $row['GlobalVisa'];
                        $notes = $row['Notes'];
                        $agent = $row['AgentName'];
                        $time = $row['Time'];
                        $status = $row['Status']?$row['Status']:"Pending";
                       
                      
                  ?>
                  <tr>
                      <td><?php echo $sid; ?></td>
                    <td><?php echo $name; ?></td>
                    <!-- <td><?php //echo $email; ?></td> -->
                    <!-- <td><?php echo $phone; ?></td> -->
                  
                    <!-- <td><?php //echo $nationality; ?></td> -->
                  
                   <!--  <td><?php //echo $visaDays; ?></td>
                    <td><?php //echo $visaChange; ?></td>
                    <td><?php //echo $visaGlobal; ?></td> -->
                    <!--td><?php //echo $notes; ?></td-->
                      <td><span style="font-size: 12px; padding: 5px;" class="badge <?php echo $status=="Pending"?"badge-info":($status=="Accepted"?"badge-success":"badge-warning") ?>"><?php echo $status ?></span></td>
                    <td><?php echo $time; ?></td>
                    <td>
                     <?php if($status=="Pending"){ ?>
                    <button class="btn btn-success active btn-block mg-b-10" style="padding:4px;color:#ffffff!important;"><a href='view-full-details.php?id=<?php echo $row['ID']; ?>'> Accept
                    </button>
                    <?php }else{ ?>
                         <button class="btn btn-dark active btn-block mg-b-10" style="padding:4px;color:#ffffff!important;"><a href='view-full-details.php?id=<?php echo $row['ID']; ?>'> View
                         </button>
                      <?php } ?>
                      </div>
                    </td>
                    
                  </tr>
                  <?php
                      }
                    }
                  ?>
                </tbody>
              </table>
         
                 
           </div>
        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->



  <!-- ########## START: FOOTER ########## -->
  <?php include_once("../includes/footer.php")?>
  <!-- ########## END: FOOTER ########## -->

  </body>
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
    $emirateIDNo = $_POST['emirateIDNo'];
    $agentname = $_POST['AgentName'];
    $Address = $_POST['Address'];
    $projectID = $_POST['projectID'];
    $Notes = $_POST['Notes']; 
    $ProAmt =$_POST['ProAmt'];

  
    
    
    $qry = "INSERT into Cus_Reg (FirstName, Surname, Email,MobileNumber, WhatsApp, Nationality, Hear, EmirateIDNo, AgentName,ProAmt, Remarks, ProjectID, Address, Time)values ('$first_name', '', '$email', '$Phone_Number', '$whatsapp', '$nationality', '$Hear', '$emirateIDNo', '$agentname','$ProAmt','$Notes','$projectID', '$Address', now())";
    
   
  if(mysqli_query($con, $qry)) {
      $id=mysqli_insert_id($con);



  //header('Location: register_details.php');
  
  if (isset($_POST['submit'])) {
  $_SESSION['last_insert_id']=$id;
  echo '
          <script>
             window.location.href= "http://localhost/algbra/EditableInvoice/receipt.php";
          </script>
      ';       
  }else {
  
      echo '
          <script>
              $(".alert-success").css("display","block");
          </script>
      ';        
  }	
  

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