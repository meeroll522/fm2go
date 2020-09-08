<!DOCTYPE html>
<html lang="en">
<head>
	<title>Menu | FM2GO</title>
	<link rel="icon" href="fmICON.png" type="image/png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<html lang="en">

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
.button {
  border: none;
  color: white;
  padding: 15px 32px;

  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
 
}
.button1 {background-color: #4CAF50;} 
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;
}
</style>
</head>
<body>

	<div class="container">
	<img src="fmICON.png" class="center"/>
	<div class="w3-container w3-myfont">
  <p class="w3-xxlarge" align ="center">Welcome to Menu Homepage! Choose one button to pick what you want to do today</p><br>

</div><div class="center">
<button class="button button1"  onclick="window.location.href='http://localhost/masterfolder_fm2go/menu/menu.php';">Create Menu</button>
<button class="button button1"  onclick="window.location.href='http://localhost/masterfolder_fm2go/stockmenu.html';">Update Menu</button>
<button class="button button1"  onclick="window.location.href='http://localhost/masterfolder_fm2go/stockmenu.html';">Delete Menu</button>
</div>
	<br><br><a href="http://localhost/masterfolder_fm2go/admin%20homepage.php" class="txt2">
				 Go back to Admin Homepage
			</a><br><br>
<p id="demo"></p>

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