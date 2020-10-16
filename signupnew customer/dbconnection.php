<?php
define('DB_SERVER','localhost');
define('DB_USER','fm2go');
define('DB_PASS' ,'fm2go');
define('DB_NAME', 'fm2go');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_error())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>

