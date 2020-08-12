
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Admin Page</title>
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
	<img src="fmICON.png" class="center"/>
	<div class="w3-container w3-myfont">
  <p class="w3-xxlarge" align ="center">Welcome back Admin! Log in below to access system</p><br>
</div>
		<form method ="POST" action="">
			<div class="form-input"><div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
				<input class="input100" type="text" name="username" placeholder="Enter your username">	
				<span class="focus-input100"></span>
			</div>
			<div class="form-input"><div class="wrap-input100 validate-input m-b-16" data-validate="Please enter password">
				<input class="input100" type="password" name="password" placeholder="Enter your password"/>
				<span class="focus-input100"></span>
			</div>
			<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Forgot
						</span>
				<a href="#" class="txt2">
							 Password?
						</a>
					</div>
			<div class="container-login100-form-btn">
			<input type="submit" name="login" value="LOGIN" class="login100-form-btn"/>
			</div>
		</form>
	</div>
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