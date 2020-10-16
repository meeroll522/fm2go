<?php
//addNewCar function==================
function addNewConfirm()
{
$con = mysqli_connect("localhost","fm2go","fm2go","fm2go");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
 //collect data from post array
 $visitorReference = $_POST['visitorReference'];
 $visitorConfirm = $_POST['visitorConfirm'];

  
  $sql="INSERT INTO confirm(visitorReference, visitorConfirm)
	VALUES ('$visitorReference','$visitorConfirm')";
 
//echo $sql;
	$qry = mysqli_query($con,$sql);
 mysqli_query($con,$sql);
}

//getListOfCar function ==================
function getListOfConfirm()
{
//create connection
$con=mysqli_connect("localhost","fm2go","fm2go","fm2go");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = 'select * from confirm';
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

function getConfirmInformation($visitorReference)
{
//create connection
$con=mysqli_connect("localhost","fm2go","fm2go","fm2go");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from confirm where visitorReference = '".$visitorReference."'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
?>