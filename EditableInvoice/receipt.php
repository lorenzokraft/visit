<?php
    session_start();
    $agentname = $_SESSION['username']; 

    include('../DB/connection.php');
   
    
    if(!isset($_SESSION['username'])){ //if login in session is not set
    header("Location: http://localhost/algbra/dashboard/");
		
}
$id=$_SESSION['last_insert_id'];
  $qry="SELECT * FROM Cus_Reg WHERE ID=".$id."";
  $res=mysqli_query($con,$qry);
	$rowcount1=mysqli_num_rows($res);
		if($rowcount1>0){
			$row=mysqli_fetch_array($res);
			$id=$row['ID'];
			$firstname=$row['FirstName'];
			$surname=$row['Surname'];
			$email=$row['Email'];
			$mobile_no=$row['MobileNumber'];
			$whatsApp=$row['WhatsApp'];
			$nationality=$row['Nationality'];
      $Address = $_POST['Address'];
			$notes=$row['Remarks'];
			$agentname=$row['AgentName'];
			$time=$row['Time'];
			
			$ProAmt =$row['ProAmt'];
		}
?>




<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="http://demo.harnishdesign.net/html/koice/images/favicon.png" rel="icon" />
<title>Flight Booking Invoice - Koice</title>
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts
======================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
======================= -->
<link rel="stylesheet" type="text/css" href="http://demo.harnishdesign.net/html/koice/vendor/bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="http://demo.harnishdesign.net/html/koice/vendor/font-awesome/css/all.min.css"/>
<link rel="stylesheet" type="text/css" href="http://demo.harnishdesign.net/html/koice/css/stylesheet.css"/>
</head>
<body>
<!-- Container -->
<div class="container-fluid invoice-container">
  <!-- Header -->
  <header>
  <div class="row align-items-center">
    <div class="col-sm-7 text-center text-sm-left mb-3 mb-sm-0">
      <img id="logo" src="images/algebra-logo.png" style="    width: 180px;" title="Koice" alt="Koice" />
    </div>
    <div class="col-sm-5 text-center text-sm-right">
      <h4 class="text-7 mb-0">Invoice</h4>
    </div>
  </div>
  <hr>
  </header>
  
  <!-- Main Content -->
  <main>
  <div class="row">
    <div class="col-sm-6"><strong>Date:</strong> <?php echo $time; ?></div>
    <div class="col-sm-6 text-sm-right"> <strong>Invoice No:</strong> 00<?php echo $id; ?></div>
	  
  </div>
  <hr>
  <div class="row">
    <!-- <div class="col-sm-6 text-sm-right order-sm-1"> <strong>Pay To:</strong>
      <address>
      Koice Inc<br />
      2705 N. Enterprise St<br />
      Orange, CA 92865<br />
	  contact@koiceinc.com
      </address>
    </div> -->
    <div class="col-sm-6 order-sm-0"> <strong>Invoiced To:</strong>
      <address>
      <?php echo $firstname; ?> 
    <?php echo $surname; ?><br />
      Email:   <?php echo $email; ?><br><br />
      Dubai <br />
     <?php echo $Address; ?> 
      </address>
    </div>
  </div>  
  <div class="card">
    <div class="card-header px-2 py-0">
      <table class="table mb-0">
        <thead>
          <tr>
            <td class="col-3 border-0"><strong>Description</strong></td>
			<td class="col-4 border-0"><strong></strong></td>
            
            <td class="col-2 text-right border-0"><strong>Amount</strong></td>
          </tr>
        </thead>
      </table>
    </div>
    <div class="card-body px-2">
      <div class="table-responsive">
        <table class="table">
          <tbody>
            <tr>
              <td class="col-3 border-0"><?php echo $notes ?></td>
              <td class="col-4 text-1 border-0"></td>
              <td class="col-2 text-center border-0"></td>
			  <td class="col-1 text-center border-0"></td>
			  <td class="col-2 text-right border-0"><?php echo $ProAmt; ?></td>
            </tr>
            <tr>
              <td>Consultation Fee</td>
              <td class="text-1"></td>
              <td class="text-center"></td>
			  <td class="text-center"></td>
			  <td class="text-right">0.00</td>
            </tr>

			
            <tr>
              <td colspan="4" class="bg-light-2 text-right"><strong>Sub Total:</strong></td>
              <td class="bg-light-2 text-right"><?php echo $ProAmt; ?></td>
            </tr>
           
            <tr>
              <td colspan="4" class="bg-light-2 text-right"><strong>Total:</strong></td>
              <td class="bg-light-2 text-right"><?php echo $ProAmt; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </main>
  <!-- Footer -->
  <footer class="text-center mt-4">
  <p class="text-1"><strong>NOTE :</strong> This is computer generated receipt and does not require physical signature.</p>
  <div class="btn-group btn-group-sm d-print-none"> <a href="javascript:window.print()" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-print"></i> Print</a> <a href="#" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-download"></i> Download</a> </div>
  </footer>
</div>
</body>

<!-- Mirrored from demo.harnishdesign.net/html/koice/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Dec 2020 14:54:22 GMT -->
</html>