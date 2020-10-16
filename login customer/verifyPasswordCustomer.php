<?php
$con = mysqli_connect("localhost","fm2go","fm2go","fm2go");
if(!$con){
	echo mysqli_connect_error();
	exit;
}

if (isset($_GET['email']) && !empty($_GET['email']) and isset($_GET['password']) && !empty($_GET['password'])) {
	// Verify data
	$sql = "SELECT * FROM signupcustomer where email = '" . $_GET['email'] . "'";
	$result = mysqli_query($con, $sql);
	$count = mysqli_num_rows($result); //check how many matching record - should be 1 if correct
	$row = mysqli_fetch_assoc($result);
	if ($count == 1) {
		$sql = "UPDATE signupcustomer SET `password` = '" . $_GET['password'] . "' where email = '" . $_GET['email'] . "'";
		$result = mysqli_query($con, $sql)or die(mysqli_error($con));;
		if ($result) {
			header("location: ../login%20customer/login.php");
		} else{
			header("location: ../login%20customer/login.php");
			
		}
			
	} else {
		header("location: ../login&20customer/login.php");
	}
} else {
	header("location: ../login%20customer/login.php");
}
?>