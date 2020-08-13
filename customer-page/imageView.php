<?php
    $conn = mysqli_connect("localhost", "root", "root", "ikea");
    if (!$conn) {
        echo  mysqli_connect_error();
        exit;
    }

	$sql = "SELECT imageType,imageData FROM customers WHERE `username` = '". $_GET['username'] . "'";
	$result = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br>" . mysqli_error($conn));
	$row = mysqli_fetch_array($result);
	header("Content-type: " . $row["imageType"]);

	echo $row["imageData"];
	mysqli_close($conn);
?>		

