<?php
     session_start();
	if (isset($_POST['updateButton'])) {
		$con = mysqli_connect("localhost","fm2go","fm2go","fm2go");
        if (!$con) {
            echo  mysqli_connect_error();
            exit;
        }

        
        $sql = "UPDATE `signupcustomer` SET 
		`name` = '".$_POST['name']."', 
		`fname` = '".$_POST['fname']."', 
		`lname` = '".$_POST['lname']."', 
		`email` = '".$_POST['email']."',
		`password` = '".$_POST['password']."',		
		`contact` = '".$_POST['contact']."'
        WHERE `signupcustomer`.`name` = '".$_SESSION['name']."'";
        $result = mysqli_query($con, $sql);
		
		echo $sql;
		
		$sql2 = "UPDATE `signupcustomer` SET 
		`name` = '".$_POST['name']."'
        WHERE `name` = '".$_SESSION['name']."'";
        $result2 = mysqli_query($con, $sql2);

        echo $sql2;
		
		//update session
		$_SESSION['name'] = $_POST['name'];

      
		print_r($_SESSION);

    }
?>




