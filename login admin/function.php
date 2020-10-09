<?php
/////////////////////////////////////////////////////////////////////////////////////////////////============CUSTOMER====GET INFO===========
function getAdminInformation($username)
{
//create connection
$con=mysqli_connect("localhost","fm2go","fm2go","fm2go");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from admin where username = '".$username."'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
///////////////////////////////////////////////////////////////////////////////////////////////////================MENU===UPDATE MENU=========
function updateAdminInformation()
{
//create connection
$con=mysqli_connect("localhost","fm2go","fm2go","fm2go");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
//get the data to update
 $oldusername = $_POST['username'];
 $newusername = $_POST['newusername'];
 $name = $_POST['name'];
 $email = $_POST['description'];
 $password = $_POST['password'];

 
$sql = 'update admin SET username ="'.$newusername.'", name = "'.$name.'", email = "'.$email.'", password = "'.$password.'" WHERE username = "'.$oldusername.'"';
	//echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
////////////////////////////////////////////////////////////////////////////////////////////////////============MENU====GET INFO=========
function getMenuInformation($name)
{
//create connection
$con=mysqli_connect("localhost","fm2go","fm2go","fm2go");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from menus where name = '".$name."'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

///////////////////////////////////////////////////////////////////////////////////////////////////================MENU===UPDATE MENU=========
function updateMenuInformation()
{
//create connection
$con=mysqli_connect("localhost","fm2go","fm2go","fm2go");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
//get the data to update
 $oldname = $_POST['name'];
 $newname = $_POST['newname'];
 $price = $_POST['price'];
 $description = $_POST['description'];
 $category = $_POST['category'];

 
$sql = 'update menus SET name ="'.$newname.'", price = "'.$price.'", description = "'.$description.'", category = "'.$category.'" WHERE name = "'.$oldname.'"';
	//echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
///////////////////////////////////////////////////////////////////////////////////////////////=====MENU====DELETE MENU==================
function deleteMenu()
{
$con = mysqli_connect("localhost","fm2go","fm2go","fm2go");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}

 $name = $_POST['menuToDelete'];//get selected menu to delete
  
  $sql="delete from menus
		where name ='".$name."'";
		//echo $sql;
	$qry = mysqli_query($con,$sql);
}
/////////////////////////////////////////////////////////////////////////////////////////////////============CUSTOMER====GET INFO===========
function getCustomerInformation($username)
{
//create connection
$con=mysqli_connect("localhost","fm2go","fm2go","fm2go");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from customers where username = '".$username."'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
///////////////////////////////////////////////////////////////////////////////////////////================Customer===UPDATE INFO===========
function updateCustomerInformation()
{
//create connection
$con=mysqli_connect("localhost","fm2go","fm2go","fm2go");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
//get the data to update
 $oldusername = $_POST['username'];
 $newusername = $_POST['newusername'];
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phonenumber = $_POST['phonenumber'];

 
$sql = 'update customers SET username ="'.$newusername.'", name = "'.$name.'", email = "'.$email.'", phonenumber = "'.$phonenumber.'" WHERE username = "'.$oldusername.'"';
	//echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
/////////////////////////////////////////////////////////////////////////////////////////////=====CUSTOMER====DELETE CUSTOMER==================
function deleteCustomer()
{
$con = mysqli_connect("localhost","fm2go","fm2go","fm2go");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}

 $username = $_POST['customerToDelete'];//get selected menu to delete
  
  $sql="delete from customers
		where username ='".$username."'";
		//echo $sql;
	$qry = mysqli_query($con,$sql);
}
////////////////////////////////////////////////////////////////////////////////////////////////////============TABLE====GET INFO=========
function getTableInformation($tableid)
{
//create connection
$con=mysqli_connect("localhost","fm2go","fm2go","fm2go");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from tables where tableid = '".$tableid."'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
///////////////////////////////////////////////////////////////////////////////////////////================TABLE===UPDATE INFO===========
function updateTableInformation()
{
//create connection
$con=mysqli_connect("localhost","fm2go","fm2go","fm2go");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
//get the data to update
 $oldtablepax = $_POST['tablepax'];
 $newtablepax = $_POST['newtablepax'];

 
$sql = 'update tables SET tablepax ="'.$newtablepax.'" WHERE tablepax = "'.$oldtablepax.'"';
	//echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
/////////////////////////////////////////////////////////////////////////////////////////////=====TABLE====DELETE CUSTOMER==================
function deleteTable()
{
$con = mysqli_connect("localhost","fm2go","fm2go","fm2go");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}

 $tableid = $_POST['tableToDelete'];//get selected menu to delete
  
  $sql="delete from tables
		where tableid ='".$tableid."'";
		//echo $sql;
	$qry = mysqli_query($con,$sql);
}
?>