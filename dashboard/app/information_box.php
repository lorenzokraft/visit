<!-- Information Boxes -->
<div class="row-fluid">

<!-- Information Boxes: Users Registered -->
<div class="span4 well infobox">
    <i class="icon-6x icon-user"></i>
    <div class="pull-right text-right">
         Registered Agent<br>
<?php 
$totAgentQry="SELECT ID as tot_agent FROM followup";
$totAgentR=mysqli_query($con,$totAgentQry);
$totAgentCount=mysqli_num_rows($totAgentR);
?>
        <b class="huge"><?php echo $totAgentCount; ?></b><br>
        <span class="caps muted"></span>
        <!-- <a href='viewAgentList.php'>View All Agent Details</a> -->
    </div>
</div>
<!-- / Information Boxes: Users Registered -->




<!-- Information Boxes: Images -->
<div class="span4 well infobox">
    <i class="icon-6x icon-calendar"></i>
    <div class="pull-right text-right">
         Enquires This Month<br>
        <?php
        $totEnqCurrMonQry="SELECT ID FROM cus_details WHERE MONTH(Time) = MONTH(CURRENT_DATE()) AND YEAR(Time) = YEAR(CURRENT_DATE())";
        $totEnqCurrMonR=mysqli_query($con,$totEnqCurrMonQry);
        $totEnqCurrMonCount=mysqli_num_rows($totEnqCurrMonR);
        ?>
        <!-- <b class="huge"><?php echo $totEnqCurrMonCount; ?></b><br> -->
        <span class="caps muted"></span>
        <!--a href='viewAgentList.php'>View All Agent Details</a-->
    </div>
</div>

<!-- Information Boxes: Active Users -->
<div class="span4 well infobox">
    <i class="icon-6x icon-rss"></i>
    <div class="pull-right text-right">
        All Enquires <br>
<?php 
$totEnqTotQry="SELECT ID FROM cus_details";
$totEnqTotR=mysqli_query($con,$totEnqTotQry);
$totEnqTotCount=mysqli_num_rows($totEnqTotR);
?>
        <!-- <b class="huge"><?php echo $totEnqTotCount; ?></b><br> -->
        <span class="caps muted"></span>
        <!-- <a href='enquires.php'>View All Enquiries</a> -->
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