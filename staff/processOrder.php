<?php
include "order.php";
if(isSet($_POST['addMenuButton']))
	{
	header('Location: orderInfo.php');
	}
if(isSet($_POST['saveNewMenuButton']))
	{
	addNewMenu();
	header( "refresh:1; url=StaffOrder.php" );
	}
if(isSet($_POST['deleteMenuButton']))
	{
	deleteMenu();
	echo "<script>";
	echo " alert('Order Record has been deleted.');
		</script>";
	header( "refresh:1; url=order.php" );
	}
if(isSet($_POST['updateMenuButton']))
	{
	updateMenuInformation();
	header( "refresh:1; url=order.php" );
	}



?>