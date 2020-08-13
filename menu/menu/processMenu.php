<?php
include "menu.php";
if(isSet($_POST['addMenuButton']))
	{
	header('Location: menuInfo.php');
	}
else if(isSet($_POST['saveNewMenuButton']))
	{
	addNewMenu();
	header( "refresh:1; url=menu.php" );
	}
else if(isSet($_POST['deleteMenuButton']))
	{
	deleteMenu();
	echo "<script>";
	echo " alert('Menu Record has been deleted.');
		</script>";
	header( "refresh:1; url=Menu.php" );
	}
else if(isSet($_POST['updateMenuButton']))
	{
	updateMenuInformation();
	header( "refresh:1; url=Menu.php" );
	}


?>