<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect("localhost", "fm2go", "fm2go", "fm2go");

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		$salt = "codeflix";
        $hash2 = sha1($password_1.$salt);
		
		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			//$password = ($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO customers (`username`, `name`, `email`, `password`, `usertype`) 
					  VALUES('$username', '$name', '$email', '$hash2', 'customer')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: /login.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$salt = "codeflix";
        $hash2 = sha1($password.$salt);
		
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
				$_SESSION['name'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: ../masterfolder_fm2go/fm2go/homepage.html');
			}
			//customer login
			$query = "SELECT * FROM `signupcustomer` WHERE name = '" .$_POST['name']. "' and password = '" .$hash2. "' ";
			$results = mysqli_query($db, $query);
			$count =  mysqli_num_rows($results);
			$row = mysqli_fetch_assoc($results);
			if ($count == 1) {
				$_SESSION['name'] = $name;
				$_SESSION['success'] = "You are now logged in";
				header('location: /masterfolder_fm2go/fm2go/homepage.html');
			}
			else {
				array_push($errors, "Wrong username/password combination");
			}
		}
		
	}

?>