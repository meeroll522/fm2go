<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<html>
<head>
	<title>Customer Login Page | FM2GO</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.w3-myfont {
  font-family: "Comic Sans MS", cursive, sans-serif;
  
}
</style>
</head>
<body>

	<div class="container">
	<img src="fm2go-ICON.png" width="250" height="250" class="center"/>
	<div class="w3-container w3-myfont">
  <p class="w3-xxlarge" align ="center">Welcome to FM2GO ! </p><br>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="form-input"><div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
			<input class="input100" type="text" name="name" placeholder="Enter your username">
		<span class="focus-input100"></span>
			</div>
		<div class="form-input"><div class="wrap-input100 validate-input m-b-16" data-validate="Please enter password">
			<input class="input100" type="password" name="password" placeholder="Enter your password">
		</div>
				<div class="text-center p-t-13 p-b-23">
						<a href="http://localhost/masterfolder_fm2go/login%20customer/resetPasswordCustomer.php" class="txt1">
							Forgot password
						</span> <br>
				<div class="text-center p-t-13 p-b-23">
						<a href="http://localhost/masterfolder_fm2go/signupnew%20customer/login.php" class="txt1">
							New to FM2GO? Sign Up Here !
						</span> <br>
		
		<br><div class="input-group"><div class="container-login100-form-btn">
			<br><button type="submit" class="login100-form-btn" name="login_user">Login</button><br><br>
			
		</div> <br><br>
		
	</form>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>