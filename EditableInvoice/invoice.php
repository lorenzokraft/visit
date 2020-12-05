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
			
			$ProAmt =$row['ProAmt'];
		}
?>



<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box" id="printablediv">

        <table id="page-wrap" cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="https://www.sparksuite.com/images/logo.png" style="width:100%; max-width:300px;">
                            </td>
                            
                            <td>
                <p style="font-size:26px;">Invoice # 00<?php echo $id; ?></p>  <br>
                  <?php echo $time; ?><br>
                                
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                            

                            <span><strong>CUSTOMER NAME:</strong></span>  <?php echo $firstname; ?> 
    <?php echo $surname; ?><br><br>

                            <span><strong>EMAIL:</strong></span>  <?php echo $time; ?><br>
                                
                            </td>
                            
                            
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Payment Method
                </td>
                
                <td>
                   
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    Cash
                </td>
                
                <td>
                    
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Item Description
                </td>
                
                <td>
                    AMOUNT
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    10 Days Online Project
                </td>
                
                <td>
                <?php echo $ProAmt; ?>
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Consultation Fee
                </td>
                
                <td>
                    AED 0
                </td>
            </tr>
            
           
            
            <tr class="total">
                <td></td>
                
                <td>
                   <strong>TOTAL PRICE </STRONG>
                   <?php echo $ProAmt; ?>
                </td>
            </tr>
        </table>

       
    </div>
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
