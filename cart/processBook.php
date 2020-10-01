<?php
include "book.php";
if(isSet($_POST['updateBook']))
	{
		updateBookInformation();

		header("refresh:1; url=../menu/orderList.php" );

	}

if(isSet($_POST['deleteBook']))
	{
	deleteBook();
	echo "<script>";
	echo " alert('Menu record has been deleted.');
		</script>";
	header( "refresh:1; url=orderList.php" );


	}
	
if(isSet($_POST['checkout']))
	{
	addNewBook();
	echo "<script>";
	echo " alert('added.');
		</script>";
	//header( "refresh:1; url=next.php" );
	}
?>