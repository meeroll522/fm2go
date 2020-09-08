<?php
//addNewMenu function==================
function addNewMenu()
{
$con = mysqli_connect("localhost","fm2go","fm2go","fm2go");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
 //collect data from post array
 $orderID = $_POST['visitorReference'];
 $orderName = $_POST['visitorName'];
 $orderEmail = $_POST['visitorEmail'];
 $orderContact = $_POST['visitorContact'];
 $orderDate = $_POST['visitorDate'];
 $orderQuantity = $_POST['visitorQuantity'];
 $orderPrice = $_POST['visitorTotal'];
 
  
  $sql="INSERT INTO `book`(`visitorReference`, `visitorName`, `visitorEmail`, `visitorContact`, `visitorDate`, `visitorQuantity`, `visitorTotal`) VALUES 
  ('$orderID','$orderName','$orderEmail','$orderContact',' $orderDate','$orderQuantity','$orderPrice')";
 
	echo $sql;
	$qry = mysqli_query($con,$sql);

}

//getListOfTicket function ==================
function getListOfMenu()
{
//create connection
$con = mysqli_connect("localhost","fm2go","fm2go","fm2go");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = 'SELECT * FROM `book`';
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

//delete function
function deleteMenu()
{
$con = mysqli_connect("localhost","fm2go","fm2go","fm2go");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}

 $menuName = $_POST['menuNameToDelete'];//get selected regNumber to delete
  
  $sql="DELETE FROM `book`
		WHERE visitorName ='".$orderName."'";
		
		echo $sql;
	$qry = mysqli_query($con,$sql);

}

/*//searchByRegNumber function ==================
function findCarByRegNumber()
{
//create connection
$con=mysqli_connect("localhost","web2","web2","cardb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = 'select * from car where regNumber ="'.$_POST['searchValue'].'"';
echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
//findCarByBrand function ==================
function findCarByBrand()
{
//create connection
$con=mysqli_connect("localhost","web2","web2","cardb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from car where brand like '%".$_POST['searchValue']."%'";
echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
function findCarByModel()
{
//create connection
$con=mysqli_connect("localhost","web2","web2","cardb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from car where model like '%".$_POST['searchValue']."%'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}*/
//============getMenuInformation
function getMenuInformation($orderName)
{
//create connection
$con=mysqli_connect("localhost","fm2go","fm2go","fm2go");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "SELECT * FROM `book` where visitorName = '".$orderName."'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
//================updateCarInformation
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
 $orderID = $_POST['visitorReference'];
 $orderName = $_POST['visitorName'];
 $orderEmail = $_POST['visitorEmail'];
 $orderContact = $_POST['visitorContact'];
 $orderDate = $_POST['visitorDate'];
 $orderQuantity = $_POST['visitorQuantity'];
 $orderPrice = $_POST['visitorTotal'];
 
$sql = 'update book SET visitorName ="'.$orderName.'", visitorEmail = "'.$orderEmail.'", visitorContact = "'.$orderContact.'", 
visitorDate = "'.$orderDate.'", visitorQuantity = "'.$orderQuantity.'", visitorTotal = "'.$orderPrice.'", WHERE visitorReference = "'.$orderID.'"';
	
	echo $sql;
	$qry = mysqli_query($con,$sql);//run query
	return $qry;  //return query
}
/*//getAvailableCarOnTheseDate function ==================
function getAvailableCarOnTheseDate($startDate ,$endDate)
{
$con = mysqli_connect('localhost','web2','web2','cardb');
 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 $sqlStr = "select regNumber,brand, model,price from car
where regNumber not in(
(SELECT distinct regNumber from bookings";
 $sqlStr .= " where Date_rent_start BETWEEN '".$startDate."' AND '".$endDate."'";
 $sqlStr .= " or Date_rent_end BETWEEN '".$startDate."' AND '".$endDate."'))";
 echo $sqlStr;
 $result = mysqli_query($con,$sqlStr);
 return $result;//if no car available, result will be empty

}*/
?>