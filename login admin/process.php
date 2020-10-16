<?php
include "function.php";
//if(isSet($_POST['addCarButton']))
//	{
//	header('Location: carInfo.php');
//	}
//else if(isSet($_POST['saveNewCarButton']))
//	{
//	addNewCar();
//	header('Location: menusupdated.php');
//	}
//else 
	if(isSet($_POST['deletemenu']))
	{
	deleteMenu();
	echo "<script>";
	echo " alert('One food menu has been deleted.');
		</script>";
	header( "refresh:1; url=menusupdated.php" );
	}
else if(isSet($_POST['updatemenu']))
	{
	updateMenuInformation();
	header( "refresh:1; url=menusupdated.php" );
	}

?>