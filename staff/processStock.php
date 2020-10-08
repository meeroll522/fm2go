<?php
include "stock.php";
if(isSet($_POST['addMenuButton']))
	{
	header('Location: stockInfo.php');
	}
if(isSet($_POST['saveNewMenuButton']))
	{
	addNewMenu();
	header( "refresh:1; url=StaffStock.php" );
	}
if(isSet($_POST['deleteMenuButton']))
	{
	deleteMenu();
	echo "<script>";
	echo " alert('Menu Record has been deleted.');
		</script>";
	header( "refresh:1; url=StaffStock.php" );
	}
if(isSet($_POST['updateMenuButton']))
	{
	updateMenuInformation();
	header( "refresh:1; url=StaffStock.php" );
	}
?>