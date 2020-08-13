<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<html>
<head>
	<title>Reset Password</title>
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
  <p class="w3-xxlarge" align ="center">Forget your password? please enter your new password</p><br>
	
	<form method="post" action="resetPasword.php">

		<?php include('errors.php'); ?>

		<div class="form-input"><div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your email">
			<input class="input100" type="text" name="email" placeholder="Enter your email">
		<span class="focus-input100"></span>
			</div>
		<div class="form-input"><div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your new password">
			<input class="input100" type="password2" name="password2" placeholder="Enter your new password">
		</div>
				
		
		<div class="input-group"><div class="container-login100-form-btn">
			<br><button type="submit" class="login100-form-btn" name="login_user">Reset password</button><br>
		</div>

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
<?php

    if (isset($_POST['resetPassword'])) {
    $to = $_POST['email'];
    $subject = 'Fm2Go Notification | Forget Password';
    $message = '
 
        A request for password change has been activated.
        You can change your password by visiting the link below.


        Please click this link to reset your password:
        http://localhost/masterfolder_fm2go/verifyPasswordStaff.php?email=' . $_POST['email'] . '&password=' . $_POST['password'] . '

        ';

    $headers = 'From: fm2gogroup7@gmail.com';
    mail($to, $subject, $message, $headers);

    echo "<meta http-equiv='refresh' content='0;url=login.php'>";

    }

?>