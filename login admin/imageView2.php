<?php
    $con = mysqli_connect("localhost", "fm2go", "fm2go", "fm2go");
    if (!$con) {
        echo  mysqli_connect_error();
        exit;
    }

	$sql = "SELECT imageType,imageData FROM menus WHERE `id` = '". $_GET['id'] . "'";
	$result = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br>" . mysqli_error($con));
	$row = mysqli_fetch_array($result);
	header("Content-type: " . $row["imageType"]);

	echo $row["imageData"];
	mysqli_close($con);
?>		

