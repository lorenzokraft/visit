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
          
         
                  <?php 
                  
                  $qry = "SELECT * from cus_details WHERE ID=".$_GET['id'];
                          $run = $con -> query($qry);
                          if($run -> num_rows > 0){
                          $row = $run -> fetch_assoc();
                              $first_name = $row['FirstName'];
                              $sur_name = $row['Surname'];
                              $name = $first_name . ' ' . $sur_name;
                              // FirstName + Surname COnc
                              $email = $row['Email'];
                              $phone = $row['MobileNumber'];
                              $whatsapp = $row['WhatsApp'];
                              $nationality = $row['Nationality'];
                              $Hear = $row['Hear'];
                              // $notes = $row['Notes'];
                              $agent = $row['AgentName'];
                              $time = $row['Time'];
                              $referalAgent = $row['referalAgent'];
                          }
                  ?>
                  <form action="register-client.php?id=<?php echo $_GET['id'] ?>" method="POST" enctype="multipart/form-data" style="width:100%">
                        <div class="input-group">
                        <span class="input-group-addon" style="width:118px;">Client Name </span>
                        <input required id="FirstName" type="text" class="form-control" name="first_name" value="<?php echo $name ?> ">
                      </div>
                       
                      <div class="input-group" style="margin-top:10px;">
                        <span class="input-group-addon" style="width:118px;">Client Email </span>
                        <input required id="Email" type="email" class="form-control" name="email" value="<?php echo $email ?> ">
                      </div>
                      

                      <div class="input-group" style="margin-top:10px;">
                        <span class="input-group-addon" style="width:118px;">Phone Number </span>
                        <input required id="MobileNumber" type="text" class="form-control" name="Phone_Number" value="<?php echo $phone ?> ">
                      </div>
                      

                      <div class="input-group" style="margin-top:10px;">
                        <span class="input-group-addon" style="width:118px;">WhatsApp </span>
                        <input required id="WhatsApp" type="text" class="form-control" name="WhatsApp" value="<?php echo $whatsapp ?> ">
                      </div>
                      
                      
                      <div class="input-group" style="margin-top:10px;">
                        <span class="input-group-addon" style="width:118px;">Nationality </span>
                        <input required id="Nationality" type="text" class="form-control" name="Nationality" value="<?php echo $nationality ?> ">
                      </div>
                      
                      <div class="input-group" style="margin-top:10px;">
                        <span class="input-group-addon" style="width:118px;">Visit Date </span>
                        <input required id="Time" type="text" class="form-control" name="Time" value="<?php echo $time ?> ">
                      </div>

                      <div class="input-group" style="margin-top:10px;">
                        <span class="input-group-addon" style="width:118px;">Reference  </span>
                        <input id="Hear" type="text" class="form-control" name="Hear" value="<?php echo $Hear ?> "readonly>
                      </div>

                      <div class="input-group" style="margin-top:10px;">
                        <span class="input-group-addon" style="width:118px;">Refered By </span>
                        <input  required id="AgentName" type="text" class="form-control" name="AgentName" value="<?php echo $referalAgent ?>"readonly>
                      </div>
                      
                      <div class="input-group" style="margin-top:10px;">
                        <span class="input-group-addon" style="width:118px;">Emirate ID/ Passport</span>
                        <input  required class="form-control" id="emirateID"type="text" name="emirateIDNo" placeholder=" Emirate ID Number">
                      </div>

                      <div class="input-group" style="margin-top:10px;">
                        <span class="input-group-addon" style="width:118px;">UAE Address</span>
                        <input required class="form-control" id="Address"type="text" name="Address" placeholder=" UAE Address">
                      </div>


                      <div class="input-group" style="margin-top:10px;">
                          <span class="input-group-addon" style="width:118px;">Select Project</span>
                          <select class="form-control" required id="ProAmt" name="ProAmt">
                              <option value="">--Click here to Select Project--</option>
                              <option value="AED 450">10 Days Project</option>
                              <option value="AED 950">15 Days Project </option>

                          </select>
                      </div>

                      <!-- <div class="input-group" style="margin-top:10px;">
                        <span class="input-group-addon" style="width:118px;">Project ID</span>
                        <input class="form-control" id="projectID"type="text" name="projectID" placeholder=" Project ID">
                      </div> -->
    </div>
                      
                          
<<<<<<< HEAD
                    <div class="col-lg-12"
                    style="margin-top:30px;">
                        
                      <div class="form-group">
                       <label><strong>REMARKS</strong></label>
                        <textarea rows="5" cols="50" class="form-control" name="Notes" placeholder="Please leave your remarks here  " required></textarea>
                      </div>
=======
                    <div class="row">
                        <div class="col-lg-12"
                             style="margin-top:30px;">

                            <div class="form-group">
                                <label><strong>REMARKS</strong></label>
                                <textarea required rows="5" cols="50" class="form-control" name="Notes" placeholder="Please leave your remarks here  " required>
                        </textarea>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <br>
                            <button class="btn btn-secondary active"type="submit" name="submit" style="width:100%">R E G I S T E R
                            </button>
                        </div>
>>>>>>> 951be46d03fc76e77d0888074cc19d9e2c6c1871
                    </div>


              </form>   
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

    $sql_query = "SELECT ID FROM cus_details WHERE ID=".$_GET['id']." AND (Status <> 'Pending' OR Status != '' )";
    if(mysqli_num_rows(mysqli_query($con, $sql_query)) > 0) {
        $id = $_GET['id'];
        echo "<script>
            alert('This registration has already been updated by another user!!');
             window.location.href= 'view-full-details.php?id=$id';
        </script>";
        exit;
    }

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
    $Notes = $_POST['Notes']; 
    $ProAmt =$_POST['ProAmt'];
    
    $qry = "INSERT into Cus_Reg (FirstName, Surname, Email,MobileNumber, WhatsApp, Nationality, Hear, EmirateIDNo, AgentName,ProAmt, Remarks, Address, Time)values ('$first_name', '', '$email', '$Phone_Number', '$whatsapp', '$nationality', '$Hear', '$emirateIDNo', '$agentname','$ProAmt','$Notes','$Address', now())";
   
  if(mysqli_query($con, $qry)) {
      $id=mysqli_insert_id($con);

      $sql_query = "UPDATE `cus_details` SET Status='Accepted' WHERE ID=".$_GET["id"];
      if(!mysqli_query($con, $sql_query))
      {
          $error = mysqli_error($con);
          echo "<script>
            '$error $sql_query';
        </script>";
          echo mysqli_error($con).$sql_query;
          exit;
      }

      //header('Location: register_details.php');
  
  if (isset($_POST['submit'])) {
  $_SESSION['last_insert_id']=$id;
  echo '
          <script>
             window.location.href= "../../EditableInvoice/receipt.php";
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