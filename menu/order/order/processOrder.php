<?php
include "order.php";
if(isSet($_POST['addOrderButton']))
	{
	header('Location: orderInfo.php');
	}
if(isSet($_POST['saveNewOrderButton']))
	{
	addNewOrder();
	header( "refresh:1; url=order.php" );
	}
if(isSet($_POST['deleteOrderButton']))
	{
	deleteOrder();
	echo "<script>";
	echo " alert('Order Record has been deleted.');
		</script>";
	header( "refresh:1; url=../order.php" );
	}
if(isSet($_POST['updateOrderButton']))
	{
	updateOrderInformation();
	header( "refresh:1; url=../order.php" );
	}

?>