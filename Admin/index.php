<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard V.1 | Blood Bank</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- link fontawesome
		============================================ -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-----------------------------MENU PANEL BOARD----------------------------------->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="img/logo/weblogo.png" alt="" /></a>
                <strong><img src="img/logo/weblogo.png" alt="" /></strong>
            </div>
            <!---------------PROFILE----------------->
			<div class="nalika-profile">
				<div class="profile-dtl">
					<a href="#"><img src="img/notification/userimg.png" alt="" /></a>
					<h2>Nuwan <span class="min-dtn">Jp</span></h2>
				</div>
				<!---ICON--->
				<div class="profile-social-dtl">
					<ul class="dtl-social">
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div><!---ICON END--->
			</div>
           <!------------PROFILE END--------------->
           
           <!-----------DASHBOARD------------->
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="index.html">
								   <i class="icon nalika-home icon-wrap"></i>
				<!------------HOME-------------->
								   <span class="mini-click-non">Home</span>
								</a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.2" href="index.php"><span class="mini-sub-pro">Dashboard v.1</span></a></li>
                                <li><a title="Product Edit" href="BloodRequest.php"><span class="mini-sub-pro">Blood Request</span></a></li>
                                <li><a title="Product Cart" href="Transaction.php"><span class="mini-sub-pro">Transaction</span></a></li>
                            </ul>
                        </li>
                    <!------------MAILBOX-------------->
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-mail icon-wrap"></i> <span class="mini-click-non">Mailbox</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="mailbox.html"><span class="mini-sub-pro">Inbox</span></a></li>
                                <li><a title="View Mail" href="mailbox-view.html"><span class="mini-sub-pro">View Mail</span></a></li>
                                <li><a title="Compose Mail" href="mailbox-compose.html"><span class="mini-sub-pro">Compose Mail</span></a></li>
                            </ul> 
                        </li>
                    <!------------BLODD BANKS-------------->
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-diamond icon-wrap"></i> <span class="mini-click-non">Blodd Bnaks</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Google Map" href="google-map.html"><span class="mini-sub-pro">Google Map</span></a></li>
                            </ul> 
                        </li>
                    <!------------DETAILS-------------->
                       <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-table icon-wrap"></i> <span class="mini-click-non">Blood Details</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="Blood-group.php"><span class="mini-sub-pro">Blood Groups</span></a></li>
                                <li><a title="Product List" href="Blood-types.php"><span class="mini-sub-pro">Blood Types</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-table icon-wrap"></i> <span class="mini-click-non">Details</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Product List" href="DonorDetails.php"><span class="mini-sub-pro">Donor Details</span></a></li>
                                <li><a title="Peity Charts" href="memberdetails.php"><span class="mini-sub-pro">Member Details</span></a></li>
                                <li><a title="Data Table" href="Doctor-details.php"><span class="mini-sub-pro">Doctor Details</span></a></li>
                            </ul>
                        </li>
                         <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-table icon-wrap"></i> <span class="mini-click-non">Requests</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="viewAppointment.php"><span class="mini-sub-pro">Appoinment</span></a></li>
                                <li><a title="Product List" href="Blood-types.php"><span class="mini-sub-pro">Blood Camp</span></a></li>
                            </ul>
                        </li>
                    <!------------FORMS ELEMENTS-------------->
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-forms icon-wrap"></i> <span class="mini-click-non">Forms Elements</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Basic Form Elements" href="Donor-Elements.php"><span class="mini-sub-pro">Donor Elements</span></a></li>
                                <li><a title="Advance Form Elements" href="Doctor-Elements.html"><span class="mini-sub-pro">Doctor Elements</span></a></li>
                            </ul>
                        </li>
                    <!------------APP VIEW-------------->
                        <!-----------<li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-smartphone-call icon-wrap"></i> <span class="mini-click-non">App views</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Notifications" href="notifications.html"><span class="mini-sub-pro">Notifications</span></a></li>
                                <li><a title="Alerts" href="alerts.html"><span class="mini-sub-pro">Alerts</span></a></li>
                            </ul>
                        </li>-------------->
                    </ul>
                </nav>
            </div>
            <!---------DASHBOARD END---------->
        </nav>
    </div>
    <!-----MENU PANEL BOARD END----->
    
    <!-------------------------------------- Start Welcome area ------------------------------------------>
    <div class="all-content-wrapper">
       <!--Search bar-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/weblogo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div><!--Search bar end-->
        
        
        <!-------SEARCH BAR AND THE CURRENT NAVIGATION BAR-------->
        <div class="header-advance-area">
            <div class="header-top-area"><!---Search bar--->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                   <!---MENU ICON--->
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
												<i class="icon nalika-menu-task"></i><!--MENU ICON(mark)-->
								            </button>
                                        </div>
                                    </div>
                                    <!---MENU ICON END--->
                                    
                                    <!---SEARCH BAR--->
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n hd-search-rp">
                                            <div class="breadcome-heading">
												<form role="search" class="">
													<input type="text" placeholder="Search..." class="form-control">
													<a href=""><i class="fa fa-search"></i></a>
												</form>
											</div>
                                        </div>
                                    </div>
                                    <!---SEARCH BAR END--->
                                    
            <!------------------------------RIGHT SIDE PROFILE AND MENU NEWS-------------------------------------------->                        
                                    
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                
                                              
                                <!---------------------------------PROFILE--------------------------------->
                                               
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<i class="fa fa-user-o" aria-hidden="true"></i><!--USER ICON(mark)-->
															<span class="admin-name">Profile</span>
															<i class="fa fa-angle-down" aria-hidden="true"></i>
												    </a>
                                                   <!---PROFILE LIST--->
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="register.html"><span class="icon nalika-home author-log-ic"></span> Register</a>
                                                        </li>
                                                        <!--<li><a href="#"><span class="icon nalika-user author-log-ic"></span> My Profile</a>
                                                        </li>
                                                        <li><a href="#"><span class="icon nalika-settings author-log-ic"></span> Settings</a>
                                                        </li>-->
                                                        <li><a href="login.html"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a>
                                                        </li>
                                                    </ul><!---PROFILE LIST END--->
                                                </li><!--------END PROFILE---------->
                                                                                                           
                               <!-----------------------------MENU NEWS--------------------------------> 
                                               
                                                <li class="nav-item nav-setting-open">
                                                   <!---MENU ICON--->
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="fa fa-bars" aria-hidden="true"></i><!--MENU ICON(mark)-->
                                                    </a><!---MENU ICON END--->
                                                    
                                                    
            <style>
                .customCSS
                {
                    color:white;
                }

            </style>
                    
                                
                                                    
                                                    <!--MENU NEWS DETAILS-->
                                                    <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                        <ul class="nav nav-tabs custon-set-tab">
                                                            <li class="active"><a data-toggle="tab" href="#Notes">News</a>
                                                            </li>
                                                        </ul>
                                                        
                                                        <!--LATEST NEWS-->
                                                        <div class="tab-content custom-bdr-nt">
                                                            <div id="Notes" class="tab-pane fade in active">
                                                                <div class="notes-area-wrap">
                                                                   
                                                                    <div class="notes-list-area notes-menu-scrollbar">
                                                                        <ul class="notes-menu-list">
                                                                           
                                                                        
             <style>
                #em{
                    color:red;
                   }                                      
             </style> 
           
           <?php
               
               $conn = mysqli_connect("localhost","root","");
               mysqli_select_db($conn, "blood");

               $detail = "SELECT * FROM bloodrequest WHERE `status` ='not_delivered' ";

               $result = mysqli_query($conn, $detail);

               if($result)
               {
                   while ($row = mysqli_fetch_assoc($result))
                   {
                        $reqType = $row["request_type"];
                        if($reqType == "Emergency"){
                            $show = "<td><font color='red' size='5px'>".$row['request_type']."</font></td>";
                        }
                        else if ($reqType == "Urgent"){
                            $show = "<td><font color='skyblue' size='5px'>".$row['request_type']."</font></td>";
                        } else{
                            $show = "<td><font  size='5px' color='#fff'>".$row['request_type']."</font></td>";

                        }
                       echo'
                       <li>
                       
                       <tr>
                           
                                                  
                             '.$show.'
                           <td><font size="5px" color="#fff">'.$row["blood_type"].'</font></td>
                           <td><font color="#fff">'.$row["date_required"].'</font></td>
                           <td><a href="Transaction.php"> More Info </a></td>
                       </tr>
                       
                      
                       </li>'
                       ;   
                   }
               }
            ?>                                                               
                                                                                
                                                                                        
                                                                            
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div><!--END LATEST NEWS-->
                                                    </div><!-- ENDMENU NEWS DETAILS-->
                                                </li><!------END MENU NEWS----->
                                            </ul>
                                        </div>
                                    </div><!-------RIGHT SIDE PROFILE AND MENU NEWS--------->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <!------------------THE CURRENT NAVIGATION BAR AND PRINT------------------------->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
											<div class="breadcomb-icon">
												<i class="icon nalika-home"></i>
											</div>
											<div class="breadcomb-ctn">
												<h2>Home</h2>
												<p>Welcome to  <span class="bread-ntd">Blood Bank</span></p>
											</div>
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <!--<div class="breadcomb-report">
											<button data-toggle="tooltip" data-placement="left" title="Print Report" class="btn"><i class="fa fa-print" aria-hidden="true"></i></button>
										</div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-------THE CURRENT NAVIGATION BAR PRINT MENU END-------->
        </div><!-------SEARCH BAR AND THE CURRENT NAVIGATION BAR END-------->
        
        
        <!---------------DASHBOARD V.2 FIRST----------------------->
        
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b>Blood Request</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green">30% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">10,000</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 78%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Tax Deduction</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-red">15% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">5,000</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 38%;" class="progress-bar progress-bar-danger bg-red"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Revenue</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-blue">50% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">$70,000</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 60%;" class="progress-bar bg-blue"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Yearly Sales</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-purple">80% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">$100,000</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 60%;" class="progress-bar bg-purple"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <!---------------DASHBOARD V.2 FIRST END----------------------->
        

        <!------CALENDER------->
        <div class="calender-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="calender-inner">
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------CALENDER END------->
        
        <!-------FOOTER-------->
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2020 <a href="https://colorlib.com/wp/templates/">BLOOD BANK</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-------FOOTER END-------->
    </div>
    <!------------------------Start Welcome area END------------------------------>
    
    
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
	<!-- float JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/curvedLines.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>