<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Men Salon Management System || Home Page</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js "></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js "></script>
<![endif]-->
</head>


<body>
    <?php include_once('includes/header2.php'); ?>

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">
                        <h2 class="page-title">About us</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">About us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="space-medium bg-default">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><img src="images/about-img.jpg" alt=""
                        class="img-responsive"></div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="well-block">
                        <?php
                        $ret = mysqli_query($con, "select * from tblpage where PageType='aboutus' ");
                        $cnt = 1;
                        while ($row = mysqli_fetch_array($ret)) {

                            ?>
                            <h1>
                                <?php echo $row['PageTitle']; ?>
                            </h1>
                            <h5 class="small-title ">best experience ever</h5>
                            <p>
                                <?php echo $row['PageDescription']; ?>
                            </p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include_once('includes/footer2.php'); ?>