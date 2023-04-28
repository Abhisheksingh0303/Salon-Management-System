<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid'] == 0)) {
	header('location:logout.php');
} else {

	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobilenum = $_POST['mobilenum'];
		$gender = $_POST['gender'];
		$details = $_POST['details'];

		$eid = $_GET['editid'];

		$query = mysqli_query($con, "update  tblcustomers set Name='$name',Email='$email',MobileNumber='$mobilenum',Gender='$gender',Details='$details' where ID='$eid' ");
		if ($query) {

			echo '<script>alert("Customer Detail has been Updated")</script>';
		} else {
			echo '<script>alert("Something Went Wrong. Please try again.")</script>';
		}


	}
	?>
	<!DOCTYPE HTML>
	<html>

	<head>
		<title>Update Customer Details</title>

		<script
			type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
		<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic'
			rel='stylesheet' type='text/css'>
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
			<?php include_once('includes/sidebar.php'); ?>
			<!--left-fixed -navigation-->
			<!-- header-starts -->
			<?php include_once('includes/header.php'); ?>
			<!-- //header-ends -->
			<!-- main content start-->
			<div id="page-wrapper">
				<div class="main-page">
					<div class="forms">
						<h3 class="title1">Update Customer Details</h3>
						<div class="form-grids row widget-shadow" data-example-id="basic-forms">
							<div class="form-title">
								<h4>Update Customer Details:</h4>
							</div>
							<div class="form-body">
								<form method="post">

									<?php
									$cid = $_GET['editid'];
									$ret = mysqli_query($con, "select * from  tblcustomers where ID='$cid'");
									$cnt = 1;
									while ($row = mysqli_fetch_array($ret)) {

										?>


										<div class="form-group"> <label for="exampleInputEmail1">Name</label> <input type="text"
												class="form-control" id="name" name="name" value="<?php echo $row['Name']; ?>"
												required="true"> </div>
										<div class="form-group"> <label for="exampleInputPassword1">Email</label> <input
												type="text" id="email" name="email" class="form-control"
												value="<?php echo $row['Email']; ?>" required="true"> </div>
										<div class="form-group"> <label for="exampleInputPassword1">Mobile Number</label> <input
												type="text" id="mobilenum" name="mobilenum" class="form-control"
												value="<?php echo $row['MobileNumber']; ?>" required="true"> </div>
										<div class="form-group"> <label for="exampleInputPassword1">Gender</label>
											<?php if ($row['Gender'] == "Male") { ?><input type="radio" id="gender" name="gender" value="Male" checked="true">Male

												<input type="radio" name="gender" value="Female">Female
												<input type="radio" name="gender" value="Transgender">Transgender
											<?php } ?>
											<?php if ($row['Gender'] == "Female") { ?><input type="radio" id="gender" name="gender" value="Male">Male

												<input type="radio" name="gender" value="Female" checked="true">Female
												<input type="radio" name="gender" value="Transgender">Transgender
											<?php }

											if ($row['Gender'] == "Transgender") { ?>
												<input type="radio" id="gender" name="gender" value="Male">Male
												<input type="radio" name="gender" value="Female">Female
												<input type="radio" name="gender" value="Transgender" checked="true">Transgender
											<?php } ?>
											<div class="form-group"> <label for="exampleInputEmail1">Service</label> <textarea
													type="text" class="form-control" id="details" name="details"
													placeholder="Details" required="true" rows="2"
													cols="4"><?php echo $row['Details']; ?></textarea> </div>


													
								<div class="form-group service-input">
									<label for="details">Date</label>
									<input type="date" class="form-control" name="date" value="<?php echo $row['app_date']; ?>">
								</div>

								
								<div class="form-group service-input">
									<label for="details">Time</label>
									<input type="time" class="form-control" name="time" value="<?php echo $row['app_time']; ?>">
								</div>



											<div class="form-group"> <label for="exampleInputPassword1">Creation Date</label>
												<input type="text" id="" name="" class="form-control"
													value="<?php echo $row['CreationDate']; ?>" readonly='true'> </div>

										<?php } ?>
										<button type="submit" name="submit" class="btn btn-default">Update</button>
								</form>
							</div>

						</div>


					</div>
				</div>
				<?php include_once('includes/footer.php'); ?>
			</div>
			<!-- Classie -->
			<script src="js/classie.js"></script>
			<script>
				var menuLeft = document.getElementById('cbp-spmenu-s1'),
					showLeftPush = document.getElementById('showLeftPush'),
					body = document.body;

				showLeftPush.onclick = function () {
					classie.toggle(this, 'active');
					classie.toggle(body, 'cbp-spmenu-push-toright');
					classie.toggle(menuLeft, 'cbp-spmenu-open');
					disableOther('showLeftPush');
				};

				function disableOther(button) {
					if (button !== 'showLeftPush') {
						classie.toggle(showLeftPush, 'disabled');
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
<?php } ?>