<?php session_start();
require_once('dbconnection.php');

//Code for Registration 
if(isset($_POST['signup']))
{
	$name=$_POST['name'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$contact=$_POST['contact'];
	$enc_password=$password;
	$salt = "codeflix";
    $hash2 = sha1($password.$salt);
	
	$hash = md5(rand(0, 1000));

	$msg=mysqli_query($con,"insert into signupcustomer 
	(`name`,`fname`,`lname`,`email`,`password`,`contact`,`usertype`) 
	values ('$name','$fname','$lname','$email','$hash2','$contact','$hash')");
	
		if($msg){
			echo "<script>console.log('test')</script>";
			$to = "$email";
			$subject = ' SIGN UP | Verification E-mail';
			$message = '
	 
			Thanks for signing up!
			Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
			
			http://localhost/masterfolder_fm2go/verification/verify.php?email=' . $_POST['email'] . '&hash=' . $hash . ' 
			Please click this link to activate your account:
			';
			
			$headers = 'From: fm2gogroup7@gmail.com';
			
			mail($to, $subject, $message, $headers);
			header("location: ../login customer/login.php");
			
		}
			
		
}

// Code for login 
if(isset($_POST['login']))
{
	$password=$_POST['password'];
	$dec_password=$password;
	$useremail=$_POST['uemail'];
	$salt = "codeflix";
    $hash2 = sha1($password.$salt);
	
	$ret= mysqli_query($con,"SELECT * FROM `signupcustomer` WHERE email='$useremail' and password='$hash2' and usertype='customer'");
	$num=mysqli_fetch_array($ret);
		if($num>0){
			$extra="../paper-dashboard-master/examples/dashboard.html";
			$_SESSION['login']=$_POST['uemail'];
			$_SESSION['name']=$num['name'];
			$_SESSION['name']=$num['fname'];
			$host=$_SERVER['HTTP_HOST'];
			$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
			header("location:http://$host$uri/$extra");
			exit();
		}else{
			echo "<script>alert('Invalid username or password');</script>";
			$extra="index.php";
			$host  = $_SERVER['HTTP_HOST'];
			$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
			//header("location:http://$host$uri/$extra");
			exit();
		}
}

//Code for Forgot Password

if(isset($_POST['send']))
{
$femail=$_POST['femail'];

$row1=mysqli_query($con,"select email,password from users where email='$femail'");
$row2=mysqli_fetch_array($row1);
if($row2>0)
{
$email = $row2['email'];
$subject = "Information about your password";
$password=$row2['password'];
$message = "Your password is ".$password;
mail($email, $subject, $message, "From: $email");
echo  "<script>alert('Your Password has been sent Successfully');</script>";
}
else
{
echo "<script>alert('Email not register with us');</script>";	
}
}

/*require_once('dbconnection.php');

//Code for Registration 
if(isset($_POST['signup']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$contact=$_POST['contact'];
	$enc_password=$password;
	$msg=mysqli_query($con,"insert into users(fname,lname,email,password,contact) values('$fname','$lname','$email','$enc_password','$contact')");
if($msg)
{
	echo "<script>alert('Register successfully');</script>";
}
}

// Code for login 
if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=$password;
$useremail=$_POST['uemail'];
$ret= mysqli_query($con,"SELECT * FROM users WHERE email='$useremail' and password='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="../paper-dashboard-master/examples/dashboard.html";
$_SESSION['login']=$_POST['uemail'];
$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['fname'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
$extra="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
//header("location:http://$host$uri/$extra");
exit();
}
}

//Code for Forgot Password

if(isset($_POST['send']))
{
$femail=$_POST['femail'];

$row1=mysqli_query($con,"select email,password from users where email='$femail'");
$row2=mysqli_fetch_array($row1);
if($row2>0)
{
$email = $row2['email'];
$subject = "Information about your password";
$password=$row2['password'];
$message = "Your password is ".$password;
mail($email, $subject, $message, "From: $email");
echo  "<script>alert('Your Password has been sent Successfully');</script>";
}
else
{
echo "<script>alert('Email not register with us');</script>";	
}
}
*/
?>
<!DOCTYPE html>
<html lang="en">

<html>
<head>
	<title>Customer Login Page</title>
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
  <p class="w3-xxlarge" align ="center">Welcome to FM2GO ! </p><br>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>
			
			<div class="form-input"><div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
			<input class="input100" type="text" name="name" placeholder="Enter your Username">
		</div>
			
		<div class="form-input"><div class="wrap-input100 validate-input m-b-16" data-validate="Please enter first name">
			<input class="input100" type="text" name="fname" placeholder="Enter your First Name">
		</div>
		
		<div class="form-input"><div class="wrap-input100 validate-input m-b-16" data-validate="Please enter last name">
			<input class="input100" type="text" name="lname" placeholder="Enter your Last Name">
		</div>
		
		<div class="form-input"><div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Email">
			<input class="input100" type="text" name="email" placeholder="Enter your Email">
		</div>
		
		<div class="form-input"><div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Password">
			<input class="input100" type="password" name="password" placeholder="Enter your Password">
		</div>
		
		<div class="form-input"><div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Contact Number">
			<input class="input100" type="text" name="contact" placeholder="Enter your Contact Number">
		</div>

		<br><div class="sign-up"><div class="container-login100-form-btn">
			<br><button type="submit" class="login100-form-btn" name="signup" value='Sign Up' < a href="http://localhost/masterfolder_fm2go/login%20customer/login.php" class="txt1">SIGN UP</button><br><br>
			
		</div>
		<div class="text-center p-t-13 p-b-23">
						<a href="http://localhost/masterfolder_fm2go/login%20customer/login.php" class="txt1">
							Already A Member? Sign In Here
						</span> <br>
		
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