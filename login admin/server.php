<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect("localhost", "fm2go", "fm2go", "fm2go");

	

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($name)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			//admin login
			$query = "SELECT * FROM `signupcustomer` WHERE name = '" .$_POST['name']. "' and password = '" .$_POST['password']. "'";
			$results = mysqli_query($db, $query);
			$count =  mysqli_num_rows($results);
			$row = mysqli_fetch_assoc($results);
			if ($count == 1) {
				$_SESSION['username'] = $name;
				$_SESSION['success'] = "You are now logged in";
				header('location: ../login%20admin/adminHOME.php');
			}
			//customer login
			$query = "SELECT * FROM `signupcustomer` WHERE name = '" .$_POST['name']. "' and password = '" .$_POST['password']. "'";
			$results = mysqli_query($db, $query);
			$count =  mysqli_num_rows($results);
			$row = mysqli_fetch_assoc($results);
			if ($count == 1) {
				$_SESSION['username'] = $name;
				$_SESSION['success'] = "You are now logged in";
				header('location: ../login%20admin/adminHOME.php');
			}
			else {
				array_push($errors, "Wrong username/password combination");
			}
		}
		
	}

?>