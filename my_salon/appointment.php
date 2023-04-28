<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['loggedin'] == false)) {
	header('location:logout.php');
} else {

	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobilenum = $_POST['mobilenum'];
		$gender = $_POST['gender'];
		$details = $_POST['details'];
		$date = $_POST['date'];
		$time = $_POST['time'];
		$aptnumber = mt_rand(100000000, 999999999);
		$_SESSION['aptnumber'] = $aptnumber;


		$query = mysqli_query($con, "insert into  tblcustomers(AptNumber,Name,Email,MobileNumber,Gender,Details,app_date,app_time) value('$aptnumber','$name','$email','$mobilenum','$gender','$details','$date','$time')");
		if ($query) {
			echo "<script>alert('Appointment Confirmed Successfully');</script>";
			echo "<script>window.location.href = 'thank-you.php'</script>";
		} else {
			echo "<script>alert('Something Went Wrong. Please try again.');</script>";
		}
	}
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
		<?php include_once('includes/header.php'); ?>

		<div class="page-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="page-caption">
							<h2 class="page-title">Book Appointment</h2>
							
							<div class="page-breadcrumb">
								<ol class="breadcrumb">
									<li><a href="index.php">Home</a></li>
									<li class="active">Book Appointment</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h1 class="apt">Appointment Form</h1>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms">
						<div class="form-body">
							<form method="post">
								<div class="form-group name-input">
									<label for="exampleInputEmail1">Name</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Full Name"
										value="" required="true">
								</div>
								<div class="form-group email-input">
									<label for="exampleInputPassword1">Email</label>
									<input type="email" id="email" name="email" class="form-control" placeholder="Email"
										value="" required="true">
								</div>
								<div class="form-group mobile-input">
									<label for="exampleInputEmail1">Mobile Number</label>
									<input type="text" class="form-control" id="mobilenum" name="mobilenum"
										placeholder="Mobile Number" value="" required="true" maxlength="10"
										pattern="[0-9]+">
								</div>
								<div class="form-group gender-input">
									<label for="gender">Gender</label>
									<div class="radio">
										<label>
											<input type="radio" name="gender" id="gender" value="Male">
											Male
										</label>
										<label>
											<input type="radio" name="gender" id="gender" value="Female">
											Female
										</label>
										<label>
											<input type="radio" name="gender" id="gender" value="Transgender">
											Transgender
										</label>
									</div>
								</div>
								
								<div class="form-group service-input">
									<label for="details">Appointment Date</label>
									<input type="date" class="form-control" name="date" placeholder="Date"
                                                name="adate" id="adate" required="true"
                                                min="<?php echo date('Y-m-d'); ?>">
								</div>

								<div class="form-group service-input">
									<label for="details">Appointment Time</label>
									<input type="time" class="form-control" name="time"  placeholder="Time"
                                                name="atime" id='atime' required="true">
								</div>

								
								<div class="form-group service-input">
									<label for="details">Service</label>
									<textarea type="text" class="form-control" id="details" name="details"
										placeholder="Enter the service you want" required="true" rows="2" cols="4"></textarea>
								</div>
								<button type="submit" id="submit" name="submit" class="btn btn-defaultt">Book <i
										class="fa fa-bookmark-o"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
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

<?php include_once('includes/footer.php'); ?>