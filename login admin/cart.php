<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////addNewTicket function==================
function addNewMenu()
{
$con = mysqli_connect("localhost","root","root","ikea");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
	
 //collect data from post array
 //$orderID = $_POST['orderID'];
 $custName = $_POST['custName'];
 $custEmail = $_POST['custEmail'];
 $custContact = $_POST['custContact'];
 $orderQuantity = $_POST['orderQuantity'];
 $orderTotal = $_POST['orderTotal'];
 
 $orderID=$custName.$orderTotal;
 
 //$_SESSION["cart_item"] as $item){
 //$item_price = $item["quantity"]*$item["price"];

  $sql="INSERT INTO orders (orderID, custName, custEmail, custContact, orderQuantity, orderTotal)
	VALUES ('$orderID','$custName','$custEmail','$custContact','$orderQuantity','$orderTotal')";
 
 // echo $sql;
	$qry = mysqli_query($con,$sql);
 mysqli_query($con,$sql);
}
?>