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
		
			$notes=$row['Remarks'];
			$agentname=$row['AgentName'];
			$time=$row['Time'];
			$awt_amount=$row['awt_amount'];
		}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>INVOICE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>
	<style>
	<style>
.awtbutton {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
}
	</style>

</head>

<body>
<div id="printablediv">
	<div id="page-wrap">

		<textarea id="header" style="height:40px;">INVOICE</textarea>
		
		<div id="identity">

            <div id="logo" style="margin-top:45px;" >
				<img src="images/goinstatrip.png" width="350px" />
    
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		<br>
		<div id="customer">

    <p style="font-size: 16px;">
    <strong>Customer Name: </strong>
    <?php echo $firstname; ?> 
    <?php echo $surname; ?><br>


    <strong>Email : </strong>
    <?php echo $email; ?><br>

    <strong>Phone: </strong>
    <?php echo $mobile_no; ?><br>


    <strong>WhatsApp:<strong> <?php echo $whatsApp; ?>
</p>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea><?php echo $id; ?></textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Date</td>
                    <td><textarea id="date"><?php echo $time; ?></textarea></td>
                </tr>
               <!-- <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due">$875.00</div></td>
                </tr>-->

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th> Nationality</th>
		      <th>Visa Req</th>
		      <th>VisaChangeReq</th>
		      <th>globalVisa</th>
			  
			  <th>Notes</th>	
		  </tr>
		  

		  <tr class="item-row">
		      <td class="item-name"><?php echo $nationality; ?></td>
		      <td class="description"><?php echo $visaReq; ?></td>
		      <td><?php echo $visaChangeReq; ?></td>
		      <td><?php echo $globalVisa; ?></td>
		      
			    <td><span class="price"><?php echo $notes; ?></span></td>
		  </tr>
		
		  
	
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total Amount</td>
		      <td class="total-value"><div id="total"><?php echo $awt_amount; ?></div></td>
		  </tr>
		
		
		</table>
		
	
	</div>
	</div>
	<br>
	<center><button type="submit" onclick="javascript:printDiv('printablediv')" class="btn btn-primary" name="">Print</button></center>
	<br>
	<center><a href="../register.php" class="btn btn-danger" name="">GO BACK</a></center>
</body>

</html>
<script language="javascript" type="text/javascript">
        function printDiv(divID) {
        //Get the HTML of div
           var divElements = document.getElementById(divID).innerHTML;
        //	Get the HTML of whole page
           var oldPage = document.body.innerHTML;
		// Reset the page's HTML with div's HTML only
           document.body.innerHTML = "<html><head><title></title></head><body><h3><center>Invoice</center></h3>" + divElements + "</body>";
		//Print Page
			window.print();
		// Restore orignal HTML
           document.body.innerHTML = oldPage;
		}
</script>