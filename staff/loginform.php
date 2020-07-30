<style>
	body{
		 background-color:#676f7f;
		  
	}
	fieldset {
		background-color:#dfdcd4;
	}
	legend {
		background-color:#dfdcd4;
	}
	#set {
	 margin:auto;
	 width:50%;
	 text-align:center;

	 }
</style>
<?php
//loginform.php

echo '<body>';
echo '<div id ="set" style=" width:500px; margin:0 auto;line-height: 1.8;">';

echo '<h1>Welcome To Staff Training Portal G05-38-STS</h1>';

echo '<form action="checklogin.php" method="post">';
echo '<fieldset><legend>Enter User name and Password :</legend>';
echo 'Login :';
echo '<input type="text" name="username" required>';
echo '<br>Password :';
echo '<input type="password" name="password" required>';

echo '<br><br><input type="submit" name="loginButton" value="Login">';
echo '<input type ="reset" name="resetButton" value="Reset">';

echo '</fieldset>';
echo '</form>';
echo '</div>';
echo '</body>';
?>