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
 $visitorReference = $_POST['visitorReference'];
 $visitorName = $_POST['visitorName'];
 $visitorEmail = $_POST['visitorEmail'];
 $visitorContact = $_POST['visitorContact'];
 $visitorDate = $_POST['visitorDate'];
 $visitorQuantity = $_POST['visitorQuantity'];
 $visitorTotal = $_POST['visitorTotal'];
  
  $sql="INSERT INTO `book`(`visitorReference`, `visitorName`, `visitorEmail`, `visitorContact`, `visitorDate`, `visitorQuantity`, `visitorTotal`) VALUES 
  (NULL,'$visitorReference','$visitorName','$visitorEmail','$visitorContact','$visitorDate','$visitorQuantity','$visitorTotal')";
 
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

 $visitorReference = $_POST['menuNameToDelete'];//get selected regNumber to delete
  
  $sql="DELETE FROM `book` WHERE visitorReference ='".$visitorReference."'";
		
		echo $sql;
	$qry = mysqli_query($con,$sql);

}

//============getMenuInformation
function getMenuInformation($visitorReference)
{
//create connection
$con=mysqli_connect("localhost","fm2go","fm2go","fm2go");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "SELECT * FROM `book` where visitorReference = '".$visitorReference."'";

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
 $visitorReference = $_POST['visitorReference'];
 $visitorName = $_POST['visitorName'];
 $visitorEmail = $_POST['visitorEmail'];
 $visitorContact = $_POST['visitorContact'];
 $visitorDate = $_POST['visitorDate'];
 $visitorQuantity = $_POST['visitorQuantity'];
 $visitorTotal = $_POST['visitorTotal'];
 
$sql = 'update book SET visitorName ="'.$visitorName.'", visitorEmail = "'.$visitorEmail.'", visitorContact = "'.$visitorContact.'" 
		, visitorDate = "'.$visitorDate.'", visitorQuantity = "'.$visitorQuantity.'", visitorTotal = "'.$visitorTotal.'"
		WHERE visitorReference = "'.$visitorReference.'"';
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