<?php
$con = mysqli_connect("localhost","fm2go","fm2go","fm2go");
if(!$con){
	echo mysqli_connect_error();
	exit;
}

if (isset($_GET['email']) && !empty($_GET['email']) and isset($_GET['hash']) && !empty($_GET['hash'])) {
	// Verify data
	$sql = "SELECT * FROM signupcustomer where email = '" . $_GET['email'] . "' and usertype ='" . $_GET['hash'] . "'";
	$result = mysqli_query($con, $sql);
	$count = mysqli_num_rows($result); //check how many matching record - should be 1 if correct
	$row = mysqli_fetch_assoc($result);
	if ($count == 1) {
		$sql = "UPDATE signupcustomer SET `usertype` = 'customer' where email = '" . $_GET['email'] . "' and usertype = '" . $_GET['hash'] . "' ";
		$result = mysqli_query($con, $sql);
		if ($result) {
			header("location: ../homepage.html");
		} else
			header("location: ../homepage.html");
	} else {
		header("location: ../homepage.html");
	}
} else {
	header("location: ../homepage.html");
}
?>