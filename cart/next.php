<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Cart | FM2GO</title>
  <link rel="icon" href="fmICON.png" type="image/png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  </div>
	  <div id="logo">
      <a class="navbar-brand" href="http://localhost/masterfolder_fm2go/fm2go/homepage.html"><img src ="FM2GO.png" width="180" height="50" ></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://localhost/masterfolder_fm2go/fm2go/menu%20customer.php">Menu</a></li>
        <li><a href="http://localhost/masterfolder_fm2go/fm2go/about.html">About Us</a></li>
        <li><a href="http://localhost/masterfolder_fm2go/fm2go/contact.html">Contact Us </a></li>
		<li><a href="http://localhost/masterfolder_fm2go/fm2go/customerprofile.php">Profile</a></li>
		<li><a href="http://localhost/masterfolder_fm2go/fm2go/login%20customer/login.php">Logout</a></li>
		<li><a href="http://localhost/masterfolder_fm2go/fm2go/test/index.php?action=add&code=3DcAM78"><img src="cart.png" class="img-responsive" width="30" height="40" ></a></li>
      </ul>
    </div>
  </div>
</nav>
<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByid = $db_handle->runQuery("SELECT * FROM `tblproduct` WHERE id='" . $_GET["id"] . "'");
			$itemArray = array($productByid[0]["id"]=>array('name'=>$productByid[0]["name"], 'id'=>$productByid[0]["id"], 'quantity'=>$_POST["quantity"], 'price'=>$productByid[0]["price"], 'image'=>$productByid[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByid[0]["id"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByid[0]["id"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["id"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<HTML>
<HEAD>
<TITLE>Simple PHP Shopping Cart</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
<!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="https;//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Chelsea Market' rel='stylesheet'>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/tooplate-main.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/flex-slider.css">
	
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</HEAD>
<style>

    body1 {font: 20px Montserrat, sans-serif; line-height: 1.5;}
* {box-sizing: border-box;}



input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container1 {
  border-radius: 5px;
  background-color: #ffffff;
  padding: 100px;

}
  
  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  .site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
#logo{ 
	position:absolute; 
	top:0; 
	left:10; 
} 
</style>
<BODY>
<div id="shopping-cart">
<div class="txt-heading">Shopping Cart</div>

<a id="btnEmpty" href="index.php?action=empty">Empty Cart</a> &emsp;

<!--<a id="btnEmpty" style="float: left" href="index.php?action=empty">Next</a>-->

<?php
if(isset($_SESSION["cart_item"])){
    $visitorQuantity = 0;
    $visitorTotal = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">ID</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
				<td><?php echo $item["id"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "RM ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "RM ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="index.php?action=remove&id=<?php echo $item["id"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$visitorQuantity += $item["quantity"];
				$visitorTotal += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $visitorQuantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "RM ".number_format($visitorTotal, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>		
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
</div>


	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM `tblproduct`");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>

	<?php
		}
	}
	?>
	
	
	<form id="contact" action="processBook.php" method="post">
                  <div class="row">
                    <div class="col-md-12">
                      <fieldset>
                        <input type="text" class="form-control" placeholder="Name" name="visitorName" required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input type="text" class="form-control" name="visitorEmail" placeholder="Email" required="">
                      </fieldset>
                    </div>
                    </div>
					<div class = "col-md-7">
					<fieldset>
                        <input type="text" class="form-control" name="visitorContact" placeholder="Contact number" required="">
                      </fieldset>
                    </div>
					<div class="col-md-12">
					<fieldset>
                        <input type="date" class="form-control" name="visitorDate" placeholder="Date" required="">
                      </fieldset>
                    </div>
					
					<?php 
						echo '<input type="hidden" value="'.$visitorQuantity.'" name="visitorQuantity">'; 
						echo '<input type="hidden" value="'.$visitorTotal.'" name="visitorTotal">';
					?>
					
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" id="form-submit" name="checkout" class="button">CHECKOUT</button>
                      </fieldset>
                    </div>				
                </form>
	
	<form style="display:inline-block" action="processBook.php" method="post" >
<input id="btnEmpty" type="submit" name="next" value="Next"> </input>
</form>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<!-- Footer -->
<br><br>
   <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify"> All of FamilyMart Malaysia's food service and ready-to-eat selections are made with halal ingredients only. The service is currently in the midst of the halal application process with JAKIM. The products available in FamilyMart that are Halal certified will carry the Halal logo on its packaging. For products that are imported from Japan, Korea or Taiwan, the product ingredients will be vetted to ensure that no haram ingredients such as pork, lard or alcoholic substance were used.</p>
          </div>

         <div class="col-xs-6 col-md-3">
            <h6>Contact</h6>
            <ul class="footer-links">
              <li><a href="http://ql.com.my/contact-us.html">Contact us @ enquiry-familymart@ql.com.my</a></li><br>
              <li><a href="http://career-familymart@ql.com.my/">Work for us @ career-familymart@ql.com.my</a></li><br>
              <li><a href="http://career-familymart@ql.com.my/">Collaborate with us @ commercial-familymart@ql.com.my</a></li>

            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="http://localhost/masterfolder_fm2go/fm2go/about.html">About Us</a></li>
              <li><a href="http://localhost/masterfolder_fm2go/fm2go/contact.html">Contact Us</a></li>
              <li><a href="https://www.familymart.com.my/our-stores.html">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">FamilyMart</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin" ></i></a>   
            </ul>
          </div>
        </div>
      </div>
</footer>
</BODY>
</HTML>