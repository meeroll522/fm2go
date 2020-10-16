<?php
    session_start();
	if (isset($_POST['update'])) {
		print_r($_SESSION);
		print_r($_POST);
      
	
        $sql = "UPDATE `signupcustomer` SET 
		`name` = '".$_POST['name']."', 
		`fname` = '".$_POST['fname']."', 
		`lname` = '".$_POST['lname']."', 
		`email` = '".$_POST['email']."',
		`password` = '".$_POST['password']."',		
		`contact` = '".$_POST['contact']."'
        WHERE `signupcustomer`.`name` = '".$_SESSION['username']."'";
		
		echo $sql;
    }
?>




