<!DOCTYPE html>
<html lang="en">


<?php
session_start();

if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
	session_destroy();
	header("Location: ../IKEA E-Restaurant/homepage-static.html");
}
if (isset($_POST['logout'])) {
	header("Location: ../signup-login-cust-admin/login.php");
}
?>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- Site title
   ================================================== -->
	<title>IKEA E-Restaurant</title>
	<link rel="icon" href="images/ikea-logo3.png" type="image/png">

	<!-- Bootstrap CSS
   ================================================== -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Animate CSS
   ================================================== -->
	<link rel="stylesheet" href="css/animate.min.css">

	<!-- Font Icons CSS
   ================================================== -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">

	<!-- Main CSS
   ================================================== -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Google web font 
   ================================================== -->
   <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;700&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
	<!--  All snippets are MIT license http://bootdey.com/license -->
	<title>bs4 edit profile page - Bootdey.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		body {
			margin-top: 3px;
			background: #f8f8f8
		}
	</style>

</head>

<body>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- Preloader section
================================================== -->
	<div class="preloader">

		<div class="sk-spinner sk-spinner-pulse"></div>

	</div>


	<!-- Navigation section
================================================== -->
	<div class="nav-container">
		<nav class="nav-inner transparent">

			<div class="navbar">
				<div class="container">
					<div class="row">
					<div class="brand col-lg-1">
							<a href="homepage-dynamic.html">
								<img src="images/ikea-logo.png" width="206%" height="88" style="max-width: 100%"></a>
						</div>
						<div class="navicon" style="position: absolute; right: 180px; width: 300px; padding-bottom: 100px;">
							<div class="menu-container">

								<div class="circle dark inline">
									<img src="images/cart-logo.png" class="img-responsive">
								</div>
								<div class="circle dark inline">
									<i class="icon ion-navicon "></i>
								</div>

								<div class="list-menu">
									<i class="icon ion-close-round close-iframe"></i>
									<div class="intro-inner">
										<ul id="nav-menu">
											<li><a href="../customer-page/customerprofile.php">My Account</a></li>
											<li><a href="">Order History</a></li>
											<li><a href="about.html">About Us</a></li>
											<li><a href="contact.html">Contact</a></li>
											<li><a href="">FAQ</a></li>
											<li><a href="">Feedback</a></li>
											<li><a href="../IKEA E-Restaurant/homepage-static.html">Logout</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</div>


	<!-- Portfolio section
================================================== -->
	<section id="portfolio">
		<div class="container">
			<div class="row">

				<div class="container">
					<div class="row flex-lg-nowrap">
						<div class="col-12 col-lg-auto mb-3" style="width: 200px;">
							<div class="card p-3">
								<div class="card-body">
									<?php
									if (isset($_POST['upload'])) {

										$conn = mysqli_connect("localhost", "root", "root", "ikea");

										if (count($_FILES) > 0) {
											if (is_uploaded_file($_FILES['image']['tmp_name'])) {
												//require_once "db.php";
												$imgData = addslashes(file_get_contents($_FILES['image']['tmp_name']));
												$imageProperties = getimagesize($_FILES['image']['tmp_name']);

												$sql = "UPDATE `customers` SET `imageData` = '{$imgData}', imageType = '{$imageProperties['mime']}' WHERE `customers`.`username` = '" . $_SESSION['username'] . "'";
												//$sql = "INSERT INTO admin(imageType ,imageData) VALUES('{$imageProperties['mime']}', '{$imgData}')";
												$current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
												if (isset($current_id)) {

													//mysqli_close($conn);     
												}

												//mysqli_close($conn); 
											}
										}
									}
									?>

									<form method="POST" action="" enctype="multipart/form-data">
										<div class="text-center">
											<?php echo '<img src="imageView.php?username=' . $_SESSION['username'] . '" class="avatar img-circle img-thumbnail">'; ?>
											<br><br>

											<input type="file" name="image" class="text-center center-block file-upload"> <br><br>
											<div class="form-group">

												<input type='submit' name='upload' class='btn btn-primary  vertical-center' style="background-color: #c9c9a3; border-color: #bfbf9d">

											</div>
										</div><br>
									</form>
								</div>

							</div>
						</div>
						<!--</div> -->

						<div class="col">
							<div class="row">
								<div class="col mb-3">
									<div class="card">
										<div class="card-body">
											<div class="e-profile">
												<div class="row">
													<div class="col-12 col-sm-auto mb-3">
														<div class="mx-auto" style="width: 190px;">
														</div>
													</div>
													<div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
														<div class="text-center text-sm-left mb-2 mb-sm-0">
															<h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">Setting Profile</h4>



														</div>
														<!-- <div class="text-center text-sm-right">
                    <span class="badge badge-secondary">administrator</span>
                    <div class="text-muted"><small>Joined 09 Dec 2017</small></div>
                  </div> -->
													</div>
												</div>
												<ul class="nav nav-tabs">
													<li class="nav-item"><a href="" class="active nav-link">Setting</a></li>

												</ul>
												<div class="tab-content pt-3">
													<div class="tab-pane active">
														<form class="form" novalidate="">
															<div class="row">
																<div class="card-body">
																	<?php

																	$con = mysqli_connect("localhost", "root", "root", "ikea");
																	if (!$con) {
																		die("Connection failed: " . mysqli_connect_error());
																		exit();
																	}

																	$sql = 'SELECT * FROM `customers` WHERE username = "' . $_SESSION['username'] . '"';
																	$result = mysqli_query($con, $sql) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($con), E_USER_ERROR);
																	$row = mysqli_fetch_assoc($result);

																	echo   '<form class="form" action="" method="POST" id="registrationForm">';

																	echo       '<div class="form-group">';
																	echo            '<div class="col-xs-6">';


																	echo                "<input type='name' class='form-control' name='name'  placeholder='Name' title='enter your name.' value='$name' >";
																	echo  '<br>';
																	echo                "<input type='email' class='form-control' name='email'  placeholder='Email' title='enter your email.' value='$email' >";
																	echo  '<br>';
																	echo                "<input type='tel' class='form-control' name='phonenumber'  placeholder='Phone Number' title='enter your phone date of birth.'  value='$phonenumber' >";
																	echo  '<br>';
																/*	echo                "<input type='datetime' class='form-control' name='birthdate'   title='enter your phone number.'  value='$birthdate' >";
																	echo  '<br>'; */
																	echo                "<input type='password' class='form-control' name='password'  placeholder='Password' title='enter your 							email if any.' value='$password' >";
																	echo            '</div>';
																	echo        '</div>';


																	echo        '<div class="form-group">';
																	echo             '<div class="col-xs-12">';
																	echo                  '<br>';
																	echo 					"<input type='hidden' value='$usernamealter' name='usernamealter'>";
																	echo                	"<input type='submit' formmethod='post' name='updatebutton' class='btn btn-lg btn-success' style='background-color: #948757; border-color: #bfbf9d'>";

																	echo             '</div>';
																	echo       '</div>';

																	echo	'</form>';

																	?>
																</div>
															</div>
														</form>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-12 col-md-3 mb-3">

									<div class="card mb-3">
										<br>

										<a class="nav-link px-2 active" href="customerprofile.php" style="color: #948757">
											<i class="fa fa-user mr-2" style="color: #948757"></i><span>Profile</span></a>         
										<a class="nav-link px-2" href="settingprofile.php" style="color: #948757">
											<i class="fa fa-fw fa-cog mr-1" style="color: #948757"></i><span>Settings</span></a> 
										<br>
									</div>
									<div class="card">
										<div class="card-body">
											<h6 class="card-title font-weight-bold">Support</h6>
											<p class="card-text" style="color: #696969; letter-spacing: 0.2px; line-height: 20px; font-size: 13px">Get fast, free help from our friendly assistants.</p>
											<button type="button" class="btn btn-primary" style="background-color: #c9c9a3; border-color: #bfbf9d">Contact Us</button>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer section
================================================== -->
	<footer>
		<div class="container">
			<div class="row">

				<div class="col-md-12 col-sm-12">
					<p class="wow fadeInUp" data-wow-delay="0.3s">© Inter IKEA Systems B.V. 1999-2020</p>
					<ul class="social-icon wow fadeInUp" data-wow-delay="0.6s">
						<li><a href="https://www.facebook.com/IKEAMalaysia" class="fa fa-facebook"></a></li>
						<li><a href="https://www.instagram.com/ikeamalaysia/" class="fa fa-instagram"></a></li>
						<li><a href="https://www.youtube.com/user/ikeamalaysia" class="fa fa-youtube"></a></li>
						<li><a href="https://www.linkedin.com/company/ikea-southeast-asia/" class="fa fa-linkedin"></a></li>
					</ul>
				</div>

			</div>
		</div>
	</footer>

	<!-- Javascript 
================================================== -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/isotope.js"></script>
	<script src="js/imagesloaded.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>

</body>

</html>

<?php

if (isset($_POST['updatebutton'])) {

	if (empty($_POST['password'])) {
		$setChangePWD = $_SESSION['password'];
	} else {
		$setChangePWD = $_POST['password'];
	}

	if (!empty($_POST['email'])) {
		$setChangeEMAIL = $_POST['email'];
	}

	if (!empty($_POST['name'])) {
		$setChangeNAME = $_POST['name'];
	}
	if (!empty($_POST['phonenumber'])) {
		$setChangePHONENUMBER = $_POST['phonenumber'];
	}

	/*	if (!empty($_POST['username'])) {
						  $setChangeUSERNAME = $_POST['username'];
						} */

	$con = mysqli_connect("localhost", "root", "root", "ikea");
	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
		exit();
	}
	$sql = "UPDATE `customers` SET `username` = '" . $_SESSION['username'] . "' ,`name` = '" . $setChangeNAME . "',`email` = '" . $setChangeEMAIL . "', `phonenumber` = '" . $setChangePHONENUMBER . "',`password` = '" . $setChangePWD . "'  WHERE `customers`.`username` = '" . $_SESSION['username'] . "'";
	$result = mysqli_query($con, $sql) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($con), E_USER_ERROR);

	if ($result) {
		echo "<script type='text/javascript'>alert('Successfull.');</script>";
	} else {
		echo "<script type='text/javascript'>alert('Error. Unsuccessful');</script>";
	}
	$_SESSION['password'] = $setChangePWD;
}


?>