<?php
include "user.php";
if (isSet($_POST['saveButton']))
	{
		updateUser();
		header("refresh:1; url = userList.php");
	}
?>