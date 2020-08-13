<?php
    $conn = mysqli_connect("localhost", "fm2go", "fm2go", "fm2go");
    if (!$conn) {
        echo  mysqli_connect_error();
        exit;
    }

	$sql = "SELECT imageType,imageData FROM signupcustomer WHERE `name` = '". $_GET['name'] . "'";
	$result = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br>" . mysqli_error($conn));
	$row = mysqli_fetch_array($result);
	header("Content-type: " . $row["imageType"]);

	echo $row["imageData"];
	mysqli_close($conn);
?>		

