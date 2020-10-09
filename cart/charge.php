<?php
  require_once('../vendor/autoload.php');
  session_start();

  \Stripe\Stripe::setApiKey('sk_test_51HXMA8Fdae3cPvdK6XaUuXa0ICKNgWfFGFY5jwCayh7CKgkjbdmEq1G5SnsRsvm8MBqRiYXq4mrRGQctdkL1e1zQ00BPJUdhAQ');

 // Sanitize POST Array
 $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
 $token = $POST['stripeToken'];
 $email = $POST['email'];
 $amountToPay = $POST['amountToPay'];
 
// Create Customer In Stripe
$customer = \Stripe\Customer::create(array(
  "email" => $email,
  "source" => $token
));

// Charge Customer
$charge = \Stripe\Charge::create(array(
  "amount" => $amountToPay,
  "currency" => "myr",
  "description" => "Family Mart Booking Food Payment",
  "customer" => $customer->id
));

$con = mysqli_connect("localhost","fm2go","fm2go","fm2go");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
	
 //collect data from post array
 $visitorName = $_POST['visitorName'];
 $visitorContact = $_POST['visitorContact'];
 $visitorDate = $_POST['visitorDate'];
 $visitorQuantity = $_POST['visitorQuantity'];
 $visitorTotal = $_POST['visitorTotal'];
 
 $visitorReference=$visitorName.$visitorDate;
 
 //$_SESSION["cart_item"] as $item){
 //$item_price = $item["quantity"]*$item["price"];
 
 print_r($_SESSION["cart_item"]);
 $foodname =  json_encode($_SESSION["cart_item"]);//------------------- to masukkan dalam db
 foreach($_SESSION["cart_item"] as $itemfood)
		$estring .= $itemfood["name"].' | ';
 
  $sql="INSERT INTO book(visitorReference, visitorName, visitorEmail, visitorContact, visitorDate, visitorQuantity, visitorTotal)
	VALUES ('$visitorReference','$visitorName','$email','$visitorContact','$visitorDate','$visitorQuantity','$visitorTotal')";
 
  echo $sql;
	$qry = mysqli_query($con,$sql);
 mysqli_query($con,$sql);

$to = $email;
$subject = 'FM2GO | Food Payment Received';
$message = 

'Thank you for booking your food. 
Below is the reference for your payment:
	Reference ID: '.$visitorReference.'
	Name: '.$visitorName.'
	Amount: RM '.number_format($visitorTotal, 2).'
	Food Name(s): '.$estring.'
	
    Description: Family Mart 2 Go Payment
	
We will send you an email once your payment is confirmed.
            
     
    ';
$headers = 'From: fm2gogroup7@gmail.com';

mail($to, $subject, $message, $headers);


// Redirect to success
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);