<?php if (isset($_POST['message'])) {
  $message = $_POST['message'];
  $file = 'message.txt';
  file_put_contents($file, $message);
} else {
  // handle the case where $_POST['message'] is not set
}
?>


<!DOCTYPE HTML>
<html>
<head>
<title>SALON | Message</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		 <style type="text/css">
  #leftCol {
    position: fixed;
    width: 309px;
    overflow-y: scroll;
    top: 0;
    bottom: 0;
  }
</style>

<div class=" sidebar" role="navigation">
  <div class="navbar-collapse">
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
      <ul class="nav" id="leftCol" style="margin-top:7%;background: #1e1e1e;">
        <li>
          <a href="dashboard.php"><i class="fa fa-home nav_icon"></i>Dashboard</a>
        </li>
        <li>
          <a href="add-services.php"><i class="fa fa-cogs nav_icon"></i>Services<span class="fa arrow"></span> </a>
          <ul class="nav nav-second-level collapse">
            <li>
              <a href="add-services.php">Add Services</a>
            </li>
            <li>
              <a href="manage-services.php">Manage Services</a>
            </li>
          </ul>
          <!-- /nav-second-level -->
        </li>
        <li class="">
          <a href="about-us.php"><i class="fa fa-book nav_icon"></i>Pages <span class="fa arrow"></span></a>
          <ul class="nav nav-second-level collapse">
            <li>
              <a href="about-us.php">About Us</a>
            </li>
            <li>
              <a href="contact-us.php">Contact Us</a>
            </li>
          </ul>
          <!-- /nav-second-level -->
        </li>

        
        <li>
          <a href="subcriber.php" class="chart-nav"><i class="fa fa-user nav_icon"></i>Subscribe</a>
        </li>

        
        <li>
          <a href="customer-list.php" class="chart-nav"><i class="fa fa-users nav_icon"></i>Appointment List</a>
        </li>


        <li>
          <a href="submit_message.php" class="chart-nav"><i class="fa fa-comments nav_icon"></i>Send Message</a>
        </li>

        <li class="dropdown">
          <a href="#" class="chart-nav"><i class="fa fa-file-text-o nav_icon"></i>Reports<span
              class="fa arrow"></span></a>
          <ul class="dropdown-content nav nav-second-level collapse">
            <li>
              <a href="bwdates-reports-ds.php" class="chart-nav"><i class="fa fa-file-text-o nav_icon"></i>B/W Dates
                Report</a>
            </li>
            <li>
              <a href="sales-reports.php" class="chart-nav"><i class="fa fa-file-text-o nav_icon"></i>Sales Report</a>
            </li>
          </ul>
        </li>



        <li class="dropdown">
          <a href="" class="chart-nav"><i class="fa fa-file-text-o nav_icon"></i>Invoices<span
              class="fa arrow"></span></a>
          <ul class="dropdown-content nav nav-second-level collapse">
            <li><a href="invoices.php"><i class="fa fa-eye nav_icon"></i>View Invoices</a></li>
            <li><a href="search-invoices.php"><i class="fa fa-search nav_icon"></i>Search Invoices</a></li>
          </ul>
        </li>
      </ul>
     
      <style>
        .dropdown-content {
          display: none;
        }

        .dropdown:hover .dropdown-content {
          display: block;
        }
      </style>

      <div class="clearfix"> </div>
      <!-- //sidebar-collapse -->
    </nav>
  </div>
</div>		<!--left-fixed -navigation-->
		<!-- header-starts -->
		 <div class="sticky-header header-section ">
      <div class="header-left">
        <!--toggle button start-->
        <button id="showLeftPush"><i class="fa fa-bars"></i></button>
        <!--toggle button end-->
        <!--logo -->
        <div class="logo">
          <a href="index.html">
            <h1>MEN'S SALON</h1>
            <span>AdminPanel</span>
          </a>
        </div>
        <!--//logo-->
       
       
        <div class="clearfix"> </div>
      </div>
      <div class="header-right">
        <div class="profile_details_left"><!--notifications of menu start -->
          <ul class="nofitications-dropdown">
              
            <li class="dropdown head-dpdn">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">0</span></a>
              
              <ul class="dropdown-menu">
                <li>
                  <div class="notification_header">
                    <h3>You have 0 new notification</h3>
                  </div>
                </li>
                <li>
            
                   <div class="notification_desc">
                         <a class="dropdown-item" href="all-appointment.php">No New Appointment Received</a>
                                   
                  </div>
                  <div class="clearfix"></div>  
                 </a></li>
                 
                
                 <li>
                  <div class="notification_bottom">
                    <a href="new-appointment.php">See all notifications</a>
                  </div> 
                </li>
              </ul>
            </li> 
          
          </ul>
          <div class="clearfix"> </div>
        </div>
        <!--notification menu end -->
        <div class="profile_details">  
         
          <ul>
            <li class="dropdown profile_details_drop">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <div class="profile_img"> 
                  <span class="prfil-img"><img src="images/download (1).png" alt="" width="50" height="60"> </span> 
                  <div class="user-name">
                    <p>Admin</p>
                    <span>Administrator</span>
                  </div>
                  <i class="fa fa-angle-down lnr"></i>
                  <i class="fa fa-angle-up lnr"></i>
                  <div class="clearfix"></div>  
                </div>  
              </a>
              <ul class="dropdown-menu drp-mnu">
                <li> <a href="change-password.php"><i class="fa fa-cog"></i> Settings</a> </li> 
                <li> <a href="admin-profile.php"><i class="fa fa-user"></i> Profile</a> </li> 
                <li> <a href="index.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
              </ul>
            </li>
          </ul>
        </div>  
        <div class="clearfix"> </div> 
      </div>
      <div class="clearfix"> </div> 
    </div>		<!-- //header-ends -->
		<!-- main content start-->
		

<section class="contact-form">
  <form action="submit_message.php" method="post" class="form">
    <h2 class="form-title">Write Your Message</h2>
    <div class="form-group">
      <label for="message" class="form-label">Message</label>
      <textarea id="message" name="message" class="form-control"></textarea>
    </div>
    <button type="submit" class="form-submit">Submit</button>
  </form>
</section>
<style>
.contact-form {
  background-color: #f5f5f5;
  padding: 60px 0;
}

.form-title {
  font-size: 2em;
    color: #a80032;
    margin-bottom: 0.8em;
    font-weight: bold;
    margin-left: 263px;
    margin-top: 14px;
}

.form-label {
  font-size: 18px;
  font-weight: bold;
  display: block;
  margin-bottom: 10px;
}

.form-control {
  width: 62%;
    height: 150px;
    border: none;
    border-radius: 5px;
    padding: 10px;
    font-size: 16px;
    font-family: Arial, sans-serif;
    resize: none;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    transition: box-shadow 0.3s ease;
    margin-left: 401px;
}

.form-control:focus {
  outline: none;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
}

.form-submit {
  display: block;
  margin: 34px auto 0;
  padding: 5px 18px;
  font-size: 18px;
  /* font-weight: bold; */
  text-transform: uppercase;
  color: #fff;
  background-color: #428bca;
  border: none;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  transition: background-color 0.3s ease;
  font-size: 16px;
  /* margin-left: -5px; */
  margin-left: 729px;
}

.form-submit:hover {
  background-color: #3071a9;
}
</style>
		<!--footer-->
		 <!--footer-->
    <div class="footer">
       <p>&copy; 2023 Men's Salon Management System Admin Panel || Created by Abhishek Singh</p>
    </div>
        <!--//footer-->        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>
</body>
</html>
