<?php
include "cart.php";
//if(isSet($_POST['updateBook']))
//	{
//		updateBookInformation();
//		header("refresh:1; url=../ticket/ticketList.php" );
//	}

//else if(isSet($_POST['deleteBook']))
//	{
//	deleteBook();
//	echo "<script>";
//	echo " alert('Ticket record has been deleted.');
//		</script>";
//	header( "refresh:1; url=ticketList.php" );
//	}
	
if(isSet($_POST['checkout']))
	{
	addNewMenu();
	echo "<script>";
	echo " alert('Your order has been added.');
		</script>";
	header( "refresh:1; url=orderreceived.php" );
	}
?>