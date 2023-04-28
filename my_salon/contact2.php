<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>Men Salon Management System || Contact Page</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <?php include_once('includes/header2.php');?>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">
                        <h2 class="page-title">Contact us</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Contact us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="widget widget-contact">
                         <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                        <!-- widget search -->
                        <h3 class="widget-title">Contact Info <i class="fa fa-address-book"></i></h3>
                        <address>
                            <strong><i class="fa fa-location-arrow"></i> Address: </strong>
                            <?php  echo $row['PageDescription'];?>
                           <br>
                            <br>
                            
                            <strong><i class="fa fa-phone-square"></i> Phone no:</strong> <a href="tel:9435059030"><?php echo $row['MobileNumber']; ?></a>

                        </address>
                        <address>
                            <strong> <i class="fa fa-envelope"></i> Email: </strong>
                            <a href="mailto:aayurdhafoundation@gmail.com"><?php  echo $row['Email'];?></a>
                          
                        </address>
                         <address>
                            <strong> <i class="fa fa-clock-o"></i> Timing: </strong>
                            
                           <?php  echo $row['Timing'];?>
                        </address><?php } ?>
                    </div>
                    <!-- /.widget search -->
                    <div class="widget widget-social">
                        <div class="social-circle">
                            <a href="https://www.facebook.com/ab.abhishek.1806?mibextid=ZbWKwL" class="#"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.linkedin.com/in/abhishek-singh-531889240/" class="#"><i class="fa fa-linkedin"></i></a>
                            <a href="https://www.instagram.com/shekabhi_03/" class="#"><i class="fa fa-instagram"></i></a>
                            
                            
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            
                          
                    <div class="well-block">
                        <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                        <h1><?php  echo $row['PageTitle'];?></h1>
                        <h5 class="small-title ">best experience ever</h5>
                        <p><?php  echo $row['PageDescription'];?></p><?php } ?>
                         </div>
                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- google map  -->
    <!-- <div style="overflow:hidden;resize:none;max-width:100%;width:1500px;height:500px;"><div id="my-map-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=NERIM+Group+of+Institutions,+Padma+Nath+sarmah+Bhawan,+Tripura+Road,+Jaya+Nagar,+Khanapara,+Guwahati,+Assam,+India&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="from-embedmap-code" href="https://www.bootstrapskins.com/themes" id="authorize-maps-data">premium bootstrap themes</a><style>#my-map-display img{max-height:none;max-width:none!important;background:none!important;}</style></div> -->
<!-- google map end  -->
<section class="enquiry">
    <div class="enquiry-section">
       
        <div class="enquiry-form">

            <form novalidate>
                <h2>Send us an enquiry </h2>
                <label for="name">Name <i class="fa fa-user"></i></label>
                <input type="text" id="name" name="name" required>

                <label for="phone">Phone <i class="fa fa-phone"></i></label>
                <input type="tel" id="phone" name="phone" required>

                <label for="email">Email <i class="fa fa-envelope"></i></label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message <i class="fa fa-comments" aria-hidden="true"></i></label>
                <textarea id="message" name="message" required></textarea>

                <a class="contact-btn" href="thanks-enquiry.php"> 
                    <span class="txt">Send a Message <i class="fa fa-location-arrow"></i></span> </a>
            </form>
        </div>
        
        <div class="col-xl-6">
            <div class="donate-one__right">
                <div class="donate-one__img">

                    <iframe width="600" height="512" id="gmap_canvas"
                        src="https://www.google.com/maps/embed/v1/place?q=NERIM+Group+of+Institutions,+Padma+Nath+sarmah+Bhawan,+Tripura+Road,+Jaya+Nagar,+Khanapara,+Guwahati,+Assam,+India&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
    </div>
    </section>   
    
   <?php include_once('includes/footer2.php');?>
    <!-- /.footer-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menumaker.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/sticky-header.js"></script>
</body>

</html>
