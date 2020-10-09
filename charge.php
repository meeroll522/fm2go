<?php
  require_once('../../../../../../vendor/autoload.php');
  require_once('../edit/dbconnect.php');


  \Stripe\Stripe::setApiKey('sk_test_51HR9qWKjqmj5dEvXsXSIRo8sUEuW3l3uVswoEGQKK1lhXvI0PGGDFHy0AoeQgDm45xts2cwZBOCm9L3ozdZPgOo200rb8XYTBL');

 // Sanitize POST Array
 $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
 $token = $POST['stripeToken'];
 $email = $POST['email'];

// Create Customer In Stripe
$customer = \Stripe\Customer::create(array(
  "email" => "dux7904@gmail.com",
  "source" => $token
));

// Charge Customer
$charge = \Stripe\Charge::create(array(
  "amount" => 1200,
  "currency" => "myr",
  "description" => "Kolej Siswa Jaya Fee",
  "customer" => $customer->id
));

$sql = "UPDATE `payment` SET `transactionID` = '.$charge->id.', `paymentMethod` = 'Stripe - Credit Card', `status` = '2' WHERE `payment`.`userID` = '".$_POST['userID']."'";
mysqli_query($con, $sql);

$to = $email;
$subject = 'KSJConnects | College Payment Confirmed';
$message = 'Thank you for paying your semesters college fee. 
            Below is reference for your payment.

            Amount: RM1200
            Description: Kolej Siswa Jaya Fee
            Reference: '.$charge->id.'
            
     
    ';
$headers = 'From: ssah37@gmail.com';

mail($to, $subject, $message, $headers);

// Redirect to success
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);