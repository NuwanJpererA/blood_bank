
<?php//while loop ekata
//connection
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn, "blood");

$detail = "SELECT * FROM doctordetails ";

$result = mysqli_query($conn, $detail);



?>


                        
<!---------EDIT second part-------->
<?php


$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn, "blood");


$id = '';
$name = '';
$idno = '';
$slmc = '';
$email = '';
$tp = '';

if (isset($_GET['getid']))//get id eken ena passwaord eka allagannawa 
{
    $getid = $_GET['getid'];
    
    $getdetail = "SELECT * FROM doctordetails WHERE id = '$getid'";
    
    $detailcheck = mysqli_query($conn, $getdetail);
    
    if ($detailcheck == true)
    {
        $detail_run = mysqli_fetch_assoc($detailcheck);
        
        $id = $detail_run['id'];//data table eke column 
        $name = $detail_run['name'];
        $idno = $detail_run['idcard'];
        $slmc = $detail_run['slmc'];
        $email = $detail_run['email'];
        $tp = $detail_run['tp'];
    }
    else
    {
        
    }
    
    
}

?>


<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Data Table | Blood Bank</title>
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
    <!-- x-editor CSS
		============================================ -->
    <link rel="stylesheet" href="css/editor/select2.css">
    <link rel="stylesheet" href="css/editor/datetimepicker.css">
    <link rel="stylesheet" href="css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="css/editor/x-editor-style.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
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
    
    <link rel="stylesheet" href="Doctor-details.css">
    
    
    <!--==============table link===============-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
</head>

<body>
    
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
                                <li><a title="Basic Form Elements" href="Donor-Elements.html"><span class="mini-sub-pro">Donor Elements</span></a></li>
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
           if($reqType == "Emergency")
           {
                $show = "<td><font color='red' size='5px'>".$row['request_type']."</font></td>";
           }
           else if ($reqType == "Urgent")
           {
                $show = "<td><font color='skyblue' size='5px'>".$row['request_type']."</font></td>";
           } 
           else
           {
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
           </li>';   
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
            
            
            <!-----SEARCH BAR AND PATH----->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search" aria-hidden="true"></i></a><!--SEARCH ICON-->
                                            </form>
                                        </div>
                                    </div>
                                    <!--PATH-->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Doctor Table
                                            </span>
                                            </li>
                                        </ul>
                                    </div><!--PATH END-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-----SEARCH BAR AND PATH END----->
        </div>
        
        
        
        <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Doctor <b>Details</b></h2></div>
                    
                    <div class="col-sm-4 add-new-btn">
                           <button class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                    </div>
                </div>
            </div>
<!--                         <div class="insert">   -->
                         
                     <style>
                         .d-none{
                             display:none !important;
                         }
                     </style>
                     
            <div class=" m-auto ">
                <form action="php/insertdoctor.php" method="post" class="insert-form d-none" >
                    <div class="form-group">
                        <input type="hidden" name="memid" value="'.$id.'">
                    </div>
                    <table class="d-flex justify-content-center">
                        <tr>
                            <td>
                               <!-- <div class="col-sm-3">-->
                                   <!--<div class="form-group">-->
                                        <input type="text" name="name"  class="form-control" placeholder="Doctor Name">
                                    <!--</div>    second part eken value gannwa-->
                               <!--</div>-->

                            </td>
                            <td>
                              <!--<div class="col-sm-2">-->
                                    <!--<div class="form-group">-->
                                        <input type="text" name="idcard"  class="form-control" placeholder="ID Card">
                                    <!--</div>-->
                               <!--</div>-->
                            </td>
                            <td>
                                <!--<div class="col-sm-3">-->
                                    <!--<div class="form-group">-->
                                        <input type="text" name="slmc"  class="form-control" placeholder="SLMC Number">
                                    <!--</div>-->
                               <!-- </div>--> 
                            </td>
                            <td>
                                <!--<div class="col-sm-3">-->
                                    <!--<div class="form-group">-->
                                        <input type="text" name="email"  class="form-control" placeholder="Email">
                                    <!--</div>-->
                                <!--</div> -->
                            </td>
                        </tr><br>
                         <tr>
                            <td>
                               <!-- <div class="col-sm-3">-->
                                    <!--<div class="form-group">-->
                                        <input type="text" name="tp"  class="form-control" placeholder="Contact Number">
                                    <!--</div>-->
                                <!--</div>--> 
                            </td>
                        </tr><br>
                         <!--<div class="col-sm-4">-->
                            <button type="submit" name="submit" class="btn btn-info add-new"><i class="fa fa-plus"></i> Insert</button>
                        <!--</div>--> 
                    </table>
                </form>
                    </div>
                    <br>
                    
<script> 
//console.log("123");
    const addNew = document.querySelector(".add-new-btn");
    const form = document.querySelector(".insert-form");
                
    addNew.addEventListener("click" , e => 
    {
         const test = form.classList.remove("d-none");
         console.log(test);
    });
</script>

           
            
<?php ///Error of succesfull msg
    if(isset($_GET['delete']))
    {    
         echo '<div class="alert alert-danger">Delete Successful!</div>';
    }
    if(isset($_GET['error']))
    {
         echo '<div class="alert alert-danger">Cant Delete!</div>';                            
    }
?>
                       
<!--Refresh and hide--> 
<script>    
     if(typeof window.history.pushState == "function")
     {
          window.history.pushState({}, "Hide", "Doctor-details.php");
     }
</script> <!---Error end--> 
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Doctor name</th>
                        <th>ID Card</th>
                        <th>SLMC Number</th>
                        <th>Email</th>
                        <th>Contact Cumber</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
               <?php
               
                    $conn = mysqli_connect("localhost","root","");
                    mysqli_select_db($conn, "blood");

                    $detail = "SELECT * FROM doctordetails ";

                    $result = mysqli_query($conn, $detail);

                    if($result)
                    {
                        while ($row = mysqli_fetch_assoc($result))
                        {
                            echo'<tr>
                                <td>'.$row["id"].'</td>
                                <td>'.$row["name"].'</td>
                                <td>'.$row["idcard"].'</td>
                                <td>'.$row["slmc"].'</td>
                                <td>'.$row["email"].'</td>
                                <td>'.$row["tp"].'</td>
                                <td>
                                    <a href="Doctor-details.php?getid='.$row["id"].'"><i class="material-icons">&#xE254;</i></a>
                                    <a href="php/doctordetailsdelete.php?delid='.$row["id"].'"><i class="material-icons">&#xE872;</i></a>
                                </td>
                            </tr>';   
                        }
                    }
                    ?>
            
                </tbody>
            </table>
            
     <?php      
      
      if (isset($_GET['getid']))
      {
            
      echo'<div class="edit">   
               <div class="row">
                  <form action="php/updatedoctordetails.php" method="post" id="togglef1">
                   <div class="col-sm-3"> 
                   <div class="form-group">
                            <input type="hidden" name="memid" value="'.$id.'">
                    </div>
                       <div class="form-group">
                            <input type="text" name="dname" value="'.$name.'" class="form-control" placeholder="Doctor Name">
                        </div>
                   </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="text" name="idn" value="'.$idno.'" class="form-control" placeholder="ID Card NO">
                        </div>
                   </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="text" name="slmc" value="'.$slmc.'" class="form-control" placeholder="SLMC Number">
                        </div>
                    </div> 
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="text" name="email" value="'.$email.'" class="form-control" placeholder="Email">
                        </div>
                    </div>    
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="text" name="tp" value="'.$tp.'" class="form-control" placeholder="Contact Number">
                        </div>
                    </div> 
                    <div class="col-sm-4">
                        <button type="submit" name="add" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                    </div>
                   </form>      
                   </div>    
                </div>                                        
            </div>  ';
        
        }
        
        ?>
        
        
        
                            
                                </div>
                            </div>
                        </div>

                    
            
       
        <!-- Static Table End -->
        
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
    
    <!------------------------Start Welcome area END------------------------------> 

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
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
    <!-- data table JS
		============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
		============================================ -->
    <script src="js/editable/jquery.mockjax.js"></script>
    <script src="js/editable/mock-active.js"></script>
    <script src="js/editable/select2.js"></script>
    <script src="js/editable/moment.min.js"></script>
    <script src="js/editable/bootstrap-datetimepicker.js"></script>
    <script src="js/editable/bootstrap-editable.js"></script>
    <script src="js/editable/xediable-active.js"></script>
    <!-- Chart JS
		============================================ -->
    <script src="js/chart/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>