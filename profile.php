<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>My Profile</title>
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
<link href="css/updatestyle.css" rel="stylesheet" />
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
<script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>
<script type='text/javascript'></script>
</head>
<?php
session_start();
$custusername=$_SESSION['name'];
$sql = 'SELECT * FROM `signupcustomer` WHERE name = "' . $_SESSION['name'] . '"';
$result = mysqli_query($con, $sql) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($con), E_USER_ERROR);
$row=mysqli_fetch_array($result);
?>
<body>
	<!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">K Boutique Hotel</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="booking/booking.html">Rooms</a>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#facilities">Facilities</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="booking/contact.html">Contact Us</a></li>
						<li class="dropdown nav-item">
                		<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  		<div class="photo">
                    	<img src="../assets/img/anime3.png" alt="Profile Photo">
                  		</div>
                  		<b class="caret d-none d-lg-block d-xl-block"></b>
                  		<p class="d-lg-none">Log out</p>
                		</a>
                		<ul class="dropdown-menu dropdown-navbar">
                  		<li class="nav-link"><a href="../Homepage_signIn/profile.html" class="nav-item dropdown-item">My Profile</a></li>
                  		<li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">My Booking</a></li>
                  		<li class="dropdown-divider"></li>
                  		<li class="nav-link"><a href="../Homepage/index.html" class="nav-item dropdown-item">Log out</a></li>
                		</ul>
              			</li>
                    </ul>
                </div>
            </div>
        </nav>
	<br>
	<br>
	<br>
    <div class="container rounded bg-white mt-5">
    <div class="row">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="https://i.imgur.com/0eg0aG0.jpg" width="90"><span class="font-weight-bold">John Doe</span><span class="text-black-50">john_doe12@bbb.com</span><span>United States</span></div>
        </div>
        <div class="col-md-8">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                        <h6>Back to home</h6>
                    </div>
                    <h6 class="text-right">Edit Profile</h6>
                </div>
                <form action= "update.php" method= "POST">
				<div class="row mt-3">
                    <div class="col-md-6"><input type="text" class="form-control" name="username" placeholder="Username"></div>
                    <div class="col-md-6"><input type="text" class="form-control" name="fullname" placeholder="Full Name"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><input type="text" class="form-control" name="email" placeholder="Email"></div>
                    <div class="col-md-6"><input type="text" class="form-control" name="phone" placeholder="Phone Number"></div>
                </div>
                <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
				</form>
            </div>
        </div>
    </div>
</div>
</body>
</html>