<?php

if (isset($_POST['updatebutton'])) {

	if (empty($_POST['password'])) {
		$setChangePWD = $_SESSION['password'];
	} else {
		$setChangePWD = $_POST['password'];
	}
	
	if (!empty($_POST['name'])) {
		$setChangeNAME = $_POST['name'];
	}
	
	if (!empty($_POST['email'])) {
		$setChangeEMAIL = $_POST['email'];
	}
	
	if (!empty($_POST['fname'])) {
		$setChangeFNAME = $_POST['fname'];
	}
	
	if (!empty($_POST['lname'])) {
		$setChangeLNAME = $_POST['lname'];
	}

	if (!empty($_POST['contact'])) {
		$setChangePHONENUMBER = $_POST['contact'];
	}

	/*	if (!empty($_POST['username'])) {
						  $setChangeUSERNAME = $_POST['username'];
						} */

	$con = mysqli_connect("localhost", "fm2go", "fm2go", "fm2go");
	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
		exit();
	}
	$sql = "UPDATE `signupcustomer` SET `name` = '" . $_SESSION['name'] . "' ,`name` = '" . $setChangeNAME . "',`email` = '" . $setChangeEMAIL . "', 
	`contact` = '" . $setChangecontact . "',`password` = '" . $setChangePWD . "' WHERE `signupcustomer`.`name` = '" . $_SESSION['name'] . "'";
	$result = mysqli_query($con, $sql) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($con), E_USER_ERROR);

	if ($result) {
		echo "<script type='text/javascript'>alert('Successfull.');</script>";
	} else {
		echo "<script type='text/javascript'>alert('Error. Unsuccessful');</script>";
	}
	$_SESSION['password'] = $setChangePWD;
}


?>