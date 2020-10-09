<!DOCTYPE html>
<html lang="en">
<head>
	<title>Payment</title>
	<link rel="icon" href="images/ikea-logo3.png" type="image/png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/ikea-logo3.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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
.login100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  width: 100%;
  height: 5	0px;
  border-radius: 10px;
  background-color: #000000 ;

  font-family: Montserrat-Regular;
  font-size: 13.5px;
  font-weight: bold;
  color: #fff;
  line-height: 1.2;
  text-transform: uppercase;
  letter-spacing: 1px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}
	
.login100-form-btn:hover {
  opacity: 0.8;
}
	
.focus-input100 {
  position: absolute;
  display: block;
  width: calc(100% + 2px);
  height: calc(100% + 2px);
  top: -1px;
  left: -1px;
  pointer-events: none;
  border: 1px solid #c2c2c2;
  border-radius: 10px;

  visibility: hidden;
  opacity: 0;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;

  -webkit-transform: scaleX(1.1) scaleY(1.3);
  -moz-transform: scaleX(1.1) scaleY(1.3);
  -ms-transform: scaleX(1.1) scaleY(1.3);
  -o-transform: scaleX(1.1) scaleY(1.3);
  transform: scaleX(1.1) scaleY(1.3);
}

a:hover {
	text-decoration: none;
  color: #999999;
}
.limiter {
  width: 100%;
  margin: 0 auto;
}

.container-login100 {
  width: 100%;
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  background: #f2f2f2;
}

.wrap-login100 {
  width: 100%;
  background: #152F4F;
  overflow: hidden;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  align-items: stretch;
  justify-content: center;
}
	
.login100-more {
  width: 100%;
  background-color: #152F4F;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  position: relative;

}

.login100-more::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: rgba(0,0,0,0.1);
}

.txt3 {
  font-family: Montserrat-Regular;
  font-size: 15px;
  font-weight: 500;
  line-height: 1.2;
  letter-spacing: 0.8px;
  color: #4f4f4f;
}

</style>
	
</head>
<body style="background-color: #152F4F">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="post" action="php/server.php" class="login100-form validate-form" style="padding: 80px 55px 0px 55px;">
					<?php include('php/errors.php') ?>
				  <span class="login100-form-title p-b-43">
				  <a class="navbar-brand"><img src="../IKEA%20E-Restaurant/images/ikea-logo.png" alt="Ikea Logo" style="width: 145px; height: 55px;"></a><br><br>
				  Order Received<br>
				</span>
					<div class="text-center p-b-30">
					<span class="txt3">
							Please make your payment. <br>
              You will be directed to the payment page.. Please Wait
						</span>
						<!--<a href="../../Login_v18/login-cust.php">Click here to login.</a>-->
					</div><br>
					
					
			

					
					

		      </form>

				<div class="login100-more" style="background-color: #152F4F;">
				</div>
			</div>
		</div>
	</div>
	
	

	
	<!--<script src="php/server.php"></script>-->
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
	
<script>
		setTimeout(function(){
		   window.location.href = '../PAYMENT-GATEWAY/test.php';
		}, 5000);
</script>
</html>

<?php
	
	if (isset($_POST['resetPassword'])) {
    $to = $_POST['email'];
    $subject = 'IKEA E-Restaurant Notification | Forget Password';
    $message = '
 
        A request for password change has been activated.
        You can change your password by visiting the link below.
        
         
        Please click this link to reset your password:
        http://localhost/IKEA%20E-System/Login_v18/php/verifypassword.php?email=' . $_POST['email'] . '&password=' . $_POST['password'] . '
         
        ';
    $headers = 'From: ikeasd02@gmail.com';
    mail($to, $subject, $message, $headers);

	echo "<meta http-equiv='refresh' content='0;url=login-cust.php'>";
	$alert = "Please check your email to get reset password link.";
	echo "<script type='text/javascript'>alert('$alert');</script>";
	
	}

?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>