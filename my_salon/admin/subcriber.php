<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{



  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>SALON | Subsrciber</title>

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
		<?php include_once 'includes/sidebar.php'; ?>
		<!-- left-fixed-navigation -->
		
		<?php include_once 'includes/header.php'; ?>
		<!-- header-ends -->

		<!-- main content start-->
		<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<?php include_once('includes/sidebar.php');?>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<?php include_once('includes/header.php');?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h3 class="title1">Subscriber</h3>
					<div class="table-responsive bs-example widget-shadow">
						<h4>View Subscriber Emails:</h4>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>Subscriber Email</th>
									<th>Date of Subscription</th>
									<th>Delete Subscriber</th>
								</tr>
							</thead>
							<tbody>
								
								<?php
								$ret=mysqli_query($con,"select * from tblsubscriber");
								$cnt=1;
								while ($row=mysqli_fetch_array($ret)) {
									?>
									<tr>
										<th scope="row"><?php echo $cnt;?></th>
										<td><?php  echo $row['Email'];?></td>
										<td><?php  echo $row['DateofSub'];?></td>
										<td>
											<form method="post" action="">
												<input type="hidden" name="subscriber_id" value="<?php echo $row['ID'];?>">
												<button type="submit" class="btn btn-danger" name="delete">Delete</button>
											</form>
										</td>
									</tr>
									<?php 
									$cnt++;
								}?>
							</tbody>
						</table> 
					</div>
					<?php
					if(isset($_POST['delete'])){
						$subscriber_id = $_POST['subscriber_id'];
						$query = mysqli_query($con, "DELETE FROM tblsubscriber WHERE ID = '$subscriber_id'");
						if($query){
							echo "<script>alert('Subscriber Deleted Sucessfully.');</script>";
					    	header('Location: subscriber.php');
							exit();
							
						} else {
							echo "<script>alert('Failed to delete subscriber.');</script>";
						}
					}
					?>
				</div>
			</div>
		</div>
		<!--footer-->
		<?php include_once('includes/footer.php');?>
        <!--//footer-->
	</div>
				</body>

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
<?php }  ?>