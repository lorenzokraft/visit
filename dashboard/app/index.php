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

  <style>
    .text-right {
    text-align: right !important;
    display: none;
}
  </style>
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href="">
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

        </a>
        </a>
        <a href="view-all-reg.php" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">View all Registration </span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <a href="card-dashboard.html" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">View all Follow Up </span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="card-dashboard.html" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label"> Total  Sales This Month </span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-list-outline tx-22"></i>
            <span class="menu-item-label">Complains  </span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="navigation.html" class="nav-link">Blocked ID Complain</a></li>

          <li class="nav-item"><a href="navigation.html" class="nav-link">New ID Complain</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Payment Complains  </a></li>
        </ul>
       
        <a href="card-dashboard.html" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label"> View Compalins  </span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-list-outline tx-22"></i>
            <span class="menu-item-label">Accounts  </span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">

          <li class="nav-item"><a href="create-account.php" class="nav-link">Create New Account</a>
          </li>

          <li class="nav-item"><a href="#"  class="nav-link">View All Accounts</a>
          </li>
        </ul>

          <a href="#" class="br-menu-link">
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
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i class="icon ion-ios-email-outline tx-24"></i>
              <!-- start: if statement -->
              <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
              <!-- end: if statement -->
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
              <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Messages</label>
                <a href="" class="tx-11">+ Add New Message</a>
              </div><!-- d-flex -->

              <div class="media-list">
                <!-- loop starts here -->
                <a href="" class="media-list-link">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <div class="d-flex align-items-center justify-content-between mg-b-5">
                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Donna Seay</p>
                        <span class="tx-11 tx-gray-500">2 minutes ago</span>
                      </div><!-- d-flex -->
                      <p class="tx-12 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
                <a href="" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <div class="d-flex align-items-center justify-content-between mg-b-5">
                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Samantha Francis</p>
                        <span class="tx-11 tx-gray-500">3 hours ago</span>
                      </div><!-- d-flex -->
                      <p class="tx-12 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <div class="d-flex align-items-center justify-content-between mg-b-5">
                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Robert Walker</p>
                        <span class="tx-11 tx-gray-500">5 hours ago</span>
                      </div><!-- d-flex -->
                      <p class="tx-12 mg-b-0">I should be incapable of drawing a single stroke at the present moment...</p>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <div class="d-flex align-items-center justify-content-between mg-b-5">
                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Larry Smith</p>
                        <span class="tx-11 tx-gray-500">Yesterday</span>
                      </div><!-- d-flex -->
                      <p class="tx-12 mg-b-0">When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
                    </div>
                  </div><!-- media -->
                </a>
                <div class="pd-y-10 tx-center bd-t">
                  <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Messages</a>
                </div>
              </div><!-- media-list -->
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
          <div class="dropdown">
            <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i class="icon ion-ios-bell-outline tx-24"></i>
              <!-- start: if statement -->
              <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
              <!-- end: if statement -->
            </a>
           
          </div><!-- dropdown -->
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name hidden-md-down">Katherine</span>
              <img src="http://via.placeholder.com/64x64" class="wd-32 rounded-circle" alt="">
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href=""><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                <li><a href=""><i class="icon ion-ios-gear"></i> Settings</a></li>
                <li><a href=""><i class="icon ion-ios-download"></i> Downloads</a></li>
                <li><a href=""><i class="icon ion-ios-star"></i> Favorites</a></li>
                <li><a href=""><i class="icon ion-ios-folder"></i> Collections</a></li>
                <li><a href=""><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
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
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <div class="br-sideright">
      <ul class="nav nav-tabs sidebar-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" role="tab" href="#contacts"><i class="icon ion-ios-contact-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#attachments"><i class="icon ion-ios-folder-outline tx-22"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#calendar"><i class="icon ion-ios-calendar-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#settings"><i class="icon ion-ios-gear-outline tx-24"></i></a>
        </li>
      </ul><!-- sidebar-tabs -->

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto active" id="contacts" role="tabpanel">
          <label class="sidebar-label pd-x-25 mg-t-25">Online Contacts</label>
          <div class="contact-list pd-x-10">
            <a href="" class="contact-list-link new">
              <div class="d-flex">
                <div class="pos-relative">
                  <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                  <div class="contact-status-indicator bg-success bd-br-primary"></div>
                </div>
                <div class="contact-person">
                  <p class="mg-b-0">Marilyn Tarter</p>
                  <span class="tx-12 op-5 d-inline-block">Clemson, CA</span>
                </div>
                <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 1 new</span>
              </div><!-- d-flex -->
            </a><!-- contact-list-link -->
            <a href="" class="contact-list-link">
              <div class="d-flex">
                <div class="pos-relative">
                  <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                  <div class="contact-status-indicator bg-success bd-br-primary"></div>
                </div>
                <div class="mg-l-10">
                  <p class="mg-b-0 ">Belinda Connor</p>
                  <span class="tx-12 op-5 d-inline-block">Fort Kent, ME</span>
                </div>
              </div><!-- d-flex -->
            </a><!-- contact-list-link -->
            <a href="" class="contact-list-link new">
              <div class="d-flex">
                <div class="pos-relative">
                  <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                  <div class="contact-status-indicator bg-success bd-br-primary"></div>
                </div>
                <div class="contact-person">
                  <p class="mg-b-0">Britanny Cevallos</p>
                  <span class="tx-12 op-5 d-inline-block">Shiboygan Falls, WI</span>
                </div>
                <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 3 new</span>
              </div><!-- d-flex -->
            </a><!-- contact-list-link -->
            <a href="" class="contact-list-link new">


            </a><!-- contact-list-link -->
            <a href="" class="contact-list-link">
              <div class="d-flex">
                <div class="pos-relative">
                  <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                  <div class="contact-status-indicator bg-success bd-br-primary"></div>
                </div>
                <div class="contact-person">
                  <p class="mg-b-0">Andrew Wiggins</p>
                  <span class="tx-12 op-5 d-inline-block">Springfield, MA</span>
                </div>
              </div><!-- d-flex -->
            </a><!-- contact-list-link -->
            <a href="" class="contact-list-link">
              <div class="d-flex">
                <div class="pos-relative">
                  <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                  <div class="contact-status-indicator bg-success bd-br-primary"></div>
                </div>
                <div class="contact-person">
                  <p class="mg-b-0">Theodore Gristen</p>
                  <span class="tx-12 op-5 d-inline-block">Nashville, TN</span>
                </div>
              </div><!-- d-flex -->
            </a><!-- contact-list-link -->
            <a href="" class="contact-list-link">
              <div class="d-flex">
                <div class="pos-relative">
                  <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                  <div class="contact-status-indicator bg-success bd-br-primary"></div>
                </div>
                <div class="contact-person">
                  <p class="mg-b-0">lawrence Omole</p>
                  <span class="tx-12 op-5 d-inline-block">North Shore, CA</span>
                </div>
              </div><!-- d-flex -->
            </a><!-- contact-list-link -->
          </div><!-- contact-list -->


          <label class="sidebar-label pd-x-25 mg-t-25">Offline Contacts</label>
          <div class="contact-list pd-x-10">
            <a href="" class="contact-list-link">
              <div class="d-flex">
                <div class="pos-relative">
                  <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                  <div class="contact-status-indicator bg-gray-500 bd-br-primary"></div>
                </div>
                <div class="contact-person">
                  <p class="mg-b-0">Marilyn Tarter</p>
                  <span class="tx-12 op-5 d-inline-block">Clemson, CA</span>
                </div>
              </div><!-- d-flex -->
            </a><!-- contact-list-link -->
            <a href="" class="contact-list-link">
              <div class="d-flex">
                <div class="pos-relative">
                  <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                  <div class="contact-status-indicator bg-gray-500 bd-br-primary"></div>
                </div>
                <div class="mg-l-10">
                  <p class="mg-b-0">Belinda Connor</p>
                  <span class="tx-12 op-5 d-inline-block">Fort Kent, ME</span>
                </div>
              </div><!-- d-flex -->
            </a><!-- contact-list-link -->
            <a href="" class="contact-list-link">
              <div class="d-flex">
                <div class="pos-relative">
                  <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                  <div class="contact-status-indicator bg-gray-500 bd-br-primary"></div>
                </div>
                <div class="contact-person">
                  <p class="mg-b-0">Britanny Cevallos</p>
                  <span class="tx-12 op-5 d-inline-block">Shiboygan Falls, WI</span>
                </div>
              </div><!-- d-flex -->
            </a><!-- contact-list-link -->

           
           
            
          </div><!-- contact-list -->

        </div><!-- #contacts -->


        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="attachments" role="tabpanel">
          <label class="sidebar-label pd-x-25 mg-t-25">Recent Attachments</label>
          <div class="media-file-list">
            <div class="media">
              <div class="pd-10 bg-primary wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                <i class="fa fa-file-image-o tx-28 tx-white"></i>
              </div>
              <div class="media-body">
                <p class="mg-b-0 tx-13">IMG_43445</p>
                <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                <p class="mg-b-0 tx-12 op-5">1.2mb</p>
              </div><!-- media-body -->
              <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- media -->
            <div class="media mg-t-20">
              <div class="pd-10 bg-purple wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                <i class="fa fa-file-video-o tx-28 tx-white"></i>
              </div>
              <div class="media-body">
                <p class="mg-b-0 tx-13">VID_6543</p>
                <p class="mg-b-0 tx-12 op-5">MP4 Video</p>
                <p class="mg-b-0 tx-12 op-5">24.8mb</p>
              </div><!-- media-body -->
              <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- media -->
            <div class="media mg-t-20">
              <div class="pd-10 bg-success wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                <i class="fa fa-file-word-o tx-28 tx-white"></i>
              </div>
              <div class="media-body">
                <p class="mg-b-0 tx-13">Tax_Form</p>
                <p class="mg-b-0 tx-12 op-5">Word Document</p>
                <p class="mg-b-0 tx-12 op-5">5.5mb</p>
              </div><!-- media-body -->
              <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- media -->
            <div class="media mg-t-20">
              <div class="pd-10 bg-warning wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                <i class="fa fa-file-pdf-o tx-28 tx-white"></i>
              </div>
              <div class="media-body">
                <p class="mg-b-0 tx-13">Getting_Started</p>
                <p class="mg-b-0 tx-12 op-5">PDF Document</p>
                <p class="mg-b-0 tx-12 op-5">12.7mb</p>
              </div><!-- media-body -->
              <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- media -->
            <div class="media mg-t-20">
              <div class="pd-10 bg-warning wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                <i class="fa fa-file-pdf-o tx-28 tx-white"></i>
              </div>
              <div class="media-body">
                <p class="mg-b-0 tx-13">Introduction</p>
                <p class="mg-b-0 tx-12 op-5">PDF Document</p>
                <p class="mg-b-0 tx-12 op-5">7.7mb</p>
              </div><!-- media-body -->
              <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- media -->
            <div class="media mg-t-20">
              <div class="pd-10 bg-primary wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                <i class="fa fa-file-image-o tx-28 tx-white"></i>
              </div>
              <div class="media-body">
                <p class="mg-b-0 tx-13">IMG_43420</p>
                <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                <p class="mg-b-0 tx-12 op-5">2.2mb</p>
              </div><!-- media-body -->
              <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- media -->
            <div class="media mg-t-20">
              <div class="pd-10 bg-primary wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                <i class="fa fa-file-image-o tx-28 tx-white"></i>
              </div>
              <div class="media-body">
                <p class="mg-b-0 tx-13">IMG_43447</p>
                <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                <p class="mg-b-0 tx-12 op-5">3.2mb</p>
              </div><!-- media-body -->
              <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- media -->
            <div class="media mg-t-20">
              <div class="pd-10 bg-purple wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                <i class="fa fa-file-video-o tx-28 tx-white"></i>
              </div>
              <div class="media-body">
                <p class="mg-b-0 tx-13">VID_6545</p>
                <p class="mg-b-0 tx-12 op-5">AVI Video</p>
                <p class="mg-b-0 tx-12 op-5">14.8mb</p>
              </div><!-- media-body -->
              <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- media -->
            <div class="media mg-t-20">
              <div class="pd-10 bg-success wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                <i class="fa fa-file-word-o tx-28 tx-white"></i>
              </div>
              <div class="media-body">
                <p class="mg-b-0 tx-13">Secret_Document</p>
                <p class="mg-b-0 tx-12 op-5">Word Document</p>
                <p class="mg-b-0 tx-12 op-5">4.5mb</p>
              </div><!-- media-body -->
              <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- media -->
          </div><!-- media-list -->
        </div><!-- #history -->
        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="calendar" role="tabpanel">
          <label class="sidebar-label pd-x-25 mg-t-25">Time &amp; Date</label>
          <div class="pd-x-25">
            <h2 id="brTime" class="tx-white tx-lato mg-b-5"></h2>
            <h6 id="brDate" class="tx-white tx-light op-3"></h6>
          </div>

          <label class="sidebar-label pd-x-25 mg-t-25">Events Calendar</label>
          <div class="datepicker sidebar-datepicker"></div>


          <label class="sidebar-label pd-x-25 mg-t-25">Event Today</label>
          <div class="pd-x-25">
            <div class="list-group sidebar-event-list mg-b-20">
              <div class="list-group-item">
                <div>
                  <h6 class="tx-white tx-13 mg-b-5 tx-normal">Roven's 32th Birthday</h6>
                  <p class="mg-b-0 tx-white tx-12 op-2">2:30PM</p>
                </div>
                <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
              </div><!-- list-group-item -->
              <div class="list-group-item">
                <div>
                  <h6 class="tx-white tx-13 mg-b-5 tx-normal">Regular Workout Schedule</h6>
                  <p class="mg-b-0 tx-white tx-12 op-2">7:30PM</p>
                </div>
                <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
              </div><!-- list-group-item -->
            </div><!-- list-group -->

            <a href="" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">+ Add Event</a>
            <br>
          </div>

        </div>
        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="settings" role="tabpanel">
          <label class="sidebar-label pd-x-25 mg-t-25">Quick Settings</label>

          <div class="pd-y-20 pd-x-25 tx-white">
            <h6 class="tx-13 tx-normal">Sound Notification</h6>
            <p class="op-5 tx-13">Play an alert sound everytime there is a new notification.</p>
            <div class="pos-relative">
              <input type="checkbox" name="checkbox" class="switch-button" checked>
            </div>
          </div>

          <div class="pd-y-20 pd-x-25 tx-white">
            <h6 class="tx-13 tx-normal">2 Steps Verification</h6>
            <p class="op-5 tx-13">Sign in using a two step verification by sending a verification code to your phone.</p>
            <div class="pos-relative">
              <input type="checkbox" name="checkbox2" class="switch-button">
            </div>
          </div>

          <div class="pd-y-20 pd-x-25 tx-white">
            <h6 class="tx-13 tx-normal">Location Services</h6>
            <p class="op-5 tx-13">Allowing us to access your location</p>
            <div class="pos-relative">
              <input type="checkbox" name="checkbox3" class="switch-button">
            </div>
          </div>

          <div class="pd-y-20 pd-x-25 tx-white">
            <h6 class="tx-13 tx-normal">Newsletter Subscription</h6>
            <p class="op-5 tx-13">Enables you to send us news and updates send straight to your email.</p>
            <div class="pos-relative">
              <input type="checkbox" name="checkbox4" class="switch-button" checked>
            </div>
          </div>

          <div class="pd-y-20 pd-x-25 tx-white">
            <h6 class="tx-13 tx-normal">Your email</h6>
            <div class="pos-relative">
              <input type="email" name="email" class="form-control form-control-inverse transition pd-y-10" value="janedoe@domain.com">
            </div>
          </div>

          <div class="pd-y-20 pd-x-25">
            <h6 class="tx-13 tx-normal tx-white mg-b-20">More Settings</h6>
            <a href="" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">Account Settings</a>
            <a href="" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">Privacy Settings</a>
          </div>

        </div>
      </div><!-- tab-content -->
    </div><!-- br-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->

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

       <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2020. Instaweb Technologies LLC.</div>
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
