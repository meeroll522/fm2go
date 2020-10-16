<?php
include "confirmOrder.php";

if(isSet($_POST['addConfirm']))
	{
	addNewConfirm();
	echo "<script>";
	echo " alert('Your message has been recorded. Thank you for so much for booking :)');
		</script>";
	header( "refresh:1; url=../homepage.html" );
	}
?>