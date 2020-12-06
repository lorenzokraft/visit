<?php
    session_start();
    $agentname = $_SESSION['username']; 

    include('../DB/connection.php');
    
    if(!isset($_SESSION['username'])){ //if login in session is not set
    header("Location: http://localhost/algbra/dashboard/");
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
      <div class="br-pageheader pd-y-15 pd-l-20">
        <!-- <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">Bracket</a>
          <span class="breadcrumb-item active">Blank Page</span>
        </nav> -->
      </div><!-- br-pageheader -->

    
      <div class="br-pagebody">

        <!-- start you own content here -->
        <?php 
	      include_once('information_box.php');
        ?>
         <div class="br-pagebody mg-t-5 pd-x-30">
        <div class=" col-sm-12 row row-sm">

          <div class="col-sm-4 col-xl-3">
            <div class="bg-teal rounded overflow-hidden"style="background-image: url(../img/c1.png); border-radius:15px!Important;">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total <br>Follow Up this Month</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1"><?php echo $totAgentCount; ?>
                      <span style="font-size: 20px;">Counselling </span>
                  </p>
               
                </div>
              </div>
            </div>
          </div><!-- col-3 -->


          <div class="col-sm-4 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="bg-danger rounded overflow-hidden" style="background-image: url(../img/c2.png); border-radius:15px!Important;">
              <div class="pd-25 d-flex align-items-center">
                
                <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total <br>Visitation <br>This Month</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1"><?php echo $totEnqCurrMonCount; ?><br>
                      <span style="font-size: 20px;">Visitation</span>
                  </p>
                  <span class="tx-11 tx-roboto tx-white-6"></span>
                </div>
              </div>
            </div>
          </div>
          <!-- col-3 -->

          <div class="col-sm-4 col-xl-3 mg-t-20 mg-xl-t-0" style="margin-bottom: 30px;!Important; margin-top: 0px!Important; ">
            <div class="bg-primary rounded overflow-hidden" style="background-image: url(../img/c3.png); border-radius:15px!Important;">
              <div class="pd-25 d-flex align-items-center">
               <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total  <br>sales<br> this Month</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">
                    <span class="small">AED</span><br> 12,500
                      <span style="font-size: 20px; color: #0766c6;">. </span>
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div><!-- row -->
         


        <?  echo $_SESSION['message']; ?>

        <div class="row row-sm mg-t-20">
          <div class="col-8">
          <div class="alert alert-danger alert-dismissible" style="display: none;">
					          <button type="button" class="close" data-dismiss="alert">&times;</button>
					          <strong>Error!</strong> Error in registering new Agent.
					        </div>


					        <div class="alert alert-success alert-dismissible" style="display: none;">
					          <button type="button" class="close" data-dismiss="alert">&times;</button>
					          <strong>Success!</strong> New Agent Registered Successfully.
					        </div>

            <div class="card bd-0 shadow-base pd-30 mg-t-20" style="margin-top: 0%!Important">
              <div class="d-flex align-items-center justify-content-between mg-b-30">
                <div>
                  <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Top 10 Consultations</h6>
                  <p class="mg-b-0"><i class="icon ion-calendar mg-r-5"></i> Month of December  2020</p>
                </div>
                <a href="view-all-reg.php" class="btn btn-outline-info btn-oblong tx-11 tx-uppercase tx-mont tx-medium tx-spacing-1 pd-x-30 bd-2">See All</a>
              </div><!-- d-flex -->
            <table class="table table-valign-middle mg-b-0">
                <tbody>
                  <?php 
                    $qry = "SELECT * from cus_details ORDER by ID DESC LIMIT 20";
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
                    <!--td><?php //echo $agent; ?></td-->
                    <td><?php echo $time; ?></td>
                    <td>
                    <button class="btn btn-dark active btn-block mg-b-10" style="padding:4px;color:#ffffff!important;"><a href='view-full-details.php?id=<?php echo $row['ID']; ?>'> Accept
                    </button>
                  
                      </div>
                    </td>
                    
                  </tr>
                  <?php
                      }
                    }
                  ?>
                </tbody>
              </table>
            </div><!-- card -->

       
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

                      <button data-toggle="modal" data-target="#modaldemo4"  class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">They want to think about it
                      
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

            </div><!-- col-9 -->
          <div class="col-4">


            <div class="card bd-0 shadow-base pd-30">
              <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1" style="text-align: center;">CALENDAR </h6>

                <div class="datepicker sidebar-datepicker hasDatepicker" id="dp1603796559718"><div class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" style="display: block;"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">October</span>&nbsp;<span class="ui-datepicker-year">2020</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">1</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">2</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">3</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">4</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">5</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">6</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">7</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">8</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">9</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">10</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">11</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">12</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">13</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">14</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">15</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">16</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">17</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">18</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">19</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">20</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">21</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">22</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">23</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">24</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">25</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">26</a></td><td class=" ui-datepicker-days-cell-over  ui-datepicker-current-day ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default ui-state-highlight ui-state-active" href="#">27</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">28</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">29</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">30</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">31</a></td></tr></tbody></table></div></div>
             
            </div><!-- card -->
            <!-- Calendar end  -->

          

            <div class="card bd-0 mg-t-20">
              <div id="carousel2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel2" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel2" data-slide-to="1"></li>
                  <li data-target="#carousel2" data-slide-to="2"></li>
                </ol>
                


              </div><!-- carousel -->
            </div><!-- card -->

          </div><!-- col-3 -->
        </div><!-- row -->

      </div>
      <!-- br-pagebody -->

      </div><!-- br-pagebody -->

    <!-- ########## START: FOOTER ########## -->
    <?php include_once("../includes/footer.php")?>
    <!-- ########## END: FOOTER ########## -->
    <script src="../lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="../lib/peity/jquery.peity.js"></script>

    <script src="../js/bracket.js"></script>
  </body>
</html>
