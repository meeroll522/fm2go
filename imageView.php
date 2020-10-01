<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    $conn = mysqli_connect("localhost", "fm2go", "fm2go", "fm2go");
    if (!$conn) {
        echo  mysqli_connect_error();
        exit;
    }

	$sql = "SELECT imageType,imageData FROM signupcustomer WHERE `name` = '". $_GET['username'] . "'";
	$result = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br>" . mysqli_error($conn));
	$row = mysqli_fetch_array($result);
	header("Content-type: " . $row["imageType"]);

	echo $row["imageData"];
	mysqli_close($conn);
?>		

