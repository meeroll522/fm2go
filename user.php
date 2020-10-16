<?php
function getUserInfo()
	{
		$con = mysqli_connect ("localhost","fm2go","fm2go","fm2go");
		
			if (!$con)
			{
				die("<br>Connection failed: ".mysqli_connect_error());
			}
		$sqlStr = "select * from signupcustomer where name = '".$_POST['idToUpdate']."'";
		$qry = mysqli_query($con,$sqlStr);
		return $qry;
	}
	

	function updateUser()
	{
		$con = mysqli_connect ("localhost","fm2go","fm2go","fm2go");
		
			if (!$con)
			{
				die("<br>Connection failed: ".mysqli_connect_error());
			}
			//get data to update
		$oldusername = $_POST['name'];
		$newusername = $_POST['newname'];
		$firstName = $_POST['fname'];
		$lastName = $_POST['lname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$phone = $_POST['contact'];
		
		$sqlStr = 'UPDATE `signupcustomer` SET `name`="'.$newusername.'",`fname`="'.$firstName.'",`lname`="'.$lastName.'",
					`email`="'.$email.'",`password`="'.$password.'",`contact`="'.$phone.'", 
					WHERE `name`="'.$oldusername.'"';
				  
		$qry = mysqli_query($con,$sqlStr);
		//mysqli_close($con);
		return $qry;
	}
	
?>

<?php

/* if (isset($_POST['saveButton'])) 
{
        if (!$con) {
            echo  mysqli_connect_error();
            exit;
        }
		
		$oldusername = $_POST['name'];
		$newusername = $_POST['newname'];
		$firstName = $_POST['fname'];
		$lastName = $_POST['lname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$phone = $_POST['contact'];
		
		$sql = 'UPDATE `signupcustomer` SET `name`="'.$newusername.'",`fname`="'.$firstName.'",`lname`="'.$lastName.'",
					`email`="'.$email.'",`password`="'.$password.'",`contact`="'.$phone.'", 
					WHERE `name`="'.$oldusername.'"';
        $result = mysqli_query($con, $sql);

        //check if update successful
        if ($result)
			
        echo '<script>
        alert("Update Successful.")
        </script>';
        else
			
        echo '<script>
        alert("Update Failed.");
        </script>';
		
		sql = "SELECT * FROM facility";
        $result = mysqli_query($con, $sql);
        $qry = $result;
} */
	
?>