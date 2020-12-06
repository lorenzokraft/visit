<?php

session_start();

$agentname = $_SESSION['username'];

include('../DB/connection.php');

if(!isset($_SESSION['username'])) { //if login in session is not set
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

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      
     <br>

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6  style="text-align:center;"class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Create Account </h6>
          <p style="text-align:center;"class="mg-b-30 tx-gray-600">Create a new aagent account</p>


          <div class="form-layout form-layout-1">
          <form action="" method="post">

              <?php

              if(isset($_POST['but_submit'])){


                  $created_by = mysqli_real_escape_string($con,$_SESSION["username"]);
                  $role = mysqli_real_escape_string($con,$_POST['role']);
                  $uname = mysqli_real_escape_string($con,$_POST['username']);
                  $email = mysqli_real_escape_string($con,$_POST['email']);
                  $password = mysqli_real_escape_string($con,$_POST['password']);


                  $sql_query = "SELECT ID FROM agent WHERE Username='$uname'";
                  $result = mysqli_query($con,$sql_query);
                  if(mysqli_num_rows($result) > 0){
                      echo '<div style="text-align:center; color: red;margin-bottom:15px;"> Username has already been taken </div>';

                  }else{

                      $sql_query = "SELECT ID FROM agent WHERE Email = '$email'";
                      $result = mysqli_query($con,$sql_query);
                      if(mysqli_num_rows($result) > 0){
                          echo '<div style="text-align:center; color: red; margin-bottom:15px;"> Email has already been taken </div>';
                      }else{

                          $sql_query = "INSERT INTO `agent` (`Email`, `Username`, `Password`, `Role`, `Created_by`) VALUES ('$email', '$uname', '$password', '$role', '$created_by')";

                          if(mysqli_query($con, $sql_query)) {
                              echo "<script>
                                alert('User created successfully');
                                window.location.href = 'index.php';
                                </script>";
                              exit;
                          }else {
                            echo mysqli_error($con).$created_by;
                          }

                      }
                  }





              };
              ?>
            <div class="row mg-b-25">

            
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Username: <span class="tx-danger">*</span></label>
                  <input class="form-control" value="<?php echo @$_POST['username'] ?>" required minlength="3" type="text" name="username" placeholder="Enter Username">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                  <input class="form-control" required value="<?php echo @$_POST['email'] ?>" type="email" name="email" value="some@email" placeholder="Enter staff email address">
                </div>
              </div><!-- col-4 -->

            <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                    <label class="form-control-label">Choose Role: <span class="tx-danger">*</span></label>
                    <select required class="form-control" name="role" data-placeholder="Choose Role">
                        <option value="">--Select Role---</option>
                        <option value="super admin" <?php echo $role=="super admin"?"selected":"" ?>>Super Admin</option>
                        <option value="agent" <?php echo $role=="agent"?"selected":"" ?>>Agent</option>
                    </select>
                </div>
            </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Enter a password: <span class="tx-danger">*</span></label>
                  <input class="form-control" required type="password" value="<?php echo @$_POST['password'] ?>" name="password" placeholder="choose default password">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Repeat password: <span class="tx-danger">*</span></label>
                  <input class="form-control" required type="password" value="<?php echo @$_POST['confirm_password'] ?>" name="confirm_password"placeholder="Re enter password">
                </div>
              </div><!-- col-4 -->


            </div><!-- col-8 -->
              
            </div><!-- row -->

            <div class="form-layout-footer mt-2">
              <button type="submit" value="Submit" name="but_submit" class="btn btn-info">Submit Form</button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->

     </form>

         

          
        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->

    <!-- ########## START: FOOTER ########## -->
    <?php include_once("../includes/footer.php")?>
    <!-- ########## END: FOOTER ########## -->
    <script>
      $(function(){
        'use strict'

        $('.form-layout .form-control').on('focusin', function(){
          $(this).closest('.form-group').addClass('form-group-active');
        });

        $('.form-layout .form-control').on('focusout', function(){
          $(this).closest('.form-group').removeClass('form-group-active');
        });

        // Select2
        $('#select2-a, #select2-b').select2({
          minimumResultsForSearch: Infinity
        });

        $('#select2-a').on('select2:opening', function (e) {
          $(this).closest('.form-group').addClass('form-group-active');
        });

        $('#select2-a').on('select2:closing', function (e) {
          $(this).closest('.form-group').removeClass('form-group-active');
        });

      });
    </script>
  </body>
</html>
