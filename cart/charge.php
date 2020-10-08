<?php
  require_once('../vendor/autoload.php');
  require_once('config/db.php');


  \Stripe\Stripe::setApiKey('sk_test_51HXMA8Fdae3cPvdK6XaUuXa0ICKNgWfFGFY5jwCayh7CKgkjbdmEq1G5SnsRsvm8MBqRiYXq4mrRGQctdkL1e1zQ00BPJUdhAQ');

 // Sanitize POST Array
 $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
 $token = $POST['stripeToken'];
 $email = $POST['email'];
 $payment = $POST['amountToPay'];

// Create Customer In Stripe
$customer = \Stripe\Customer::create(array(
  "email" => $email,
  "source" => $token
));

// Charge Customer
$charge = \Stripe\Charge::create(array(
  "amount" => $payment,
  "currency" => "myr",
  "description" => "Family Mart 2 Go Fee",
  "customer" => $customer->id
));

$sql = "UPDATE `payment` SET `transactionID` = '.$charge->id.', `paymentMethod` = 'Stripe - Credit Card', `status` = '2' WHERE `payment`.`userID` = '".$_POST['userID']."'";
mysqli_query($con, $sql);

$to = $email;
$subject = 'FM2GO | Food Booking Confirmed';
$message = 'Thank you for paying your food fee. 
            Below is reference for your payment.

            Amount: '.$visitorTotal.'
            Description: Food Booking Fee
            Reference: '.$charge->id.'
            
     
    ';
$headers = 'From: fm2gogroup7@gmail.com';

mail($to, $subject, $message, $headers);

// Redirect to success
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);