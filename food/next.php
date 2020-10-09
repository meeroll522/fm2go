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
			$productByMenuID = $db_handle->runQuery("SELECT * FROM menus WHERE id='" . $_GET["id"] . "'");
			$itemArray = array($productByMenuID[0]["id"]=>array('name'=>$productByMenuID[0]["name"], 'id'=>$productByMenuID[0]["id"], 'quantity'=>$_POST["quantity"], 'price'=>$productByMenuID[0]["price"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByMenuID[0]["id"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByMenuID[0]["id"] == $k) {
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
<TITLE>Menu Cart</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="icon" href="../IKEA E-Restaurant/images/ikea-logo3.png" type="image/png">
<link href="http://netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
	
<!-- W3School CSS
================================================= -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!-- Animate CSS
================================================== -->
<link rel="stylesheet" href="../IKEA E-Restaurant/css/animate.min.css">

<!-- Font Icons CSS
================================================== -->
<link rel="stylesheet" href="../IKEA E-Restaurant/css/font-awesome.min.css">
<link rel="stylesheet" href="../IKEA E-Restaurant/css/ionicons.min.css">

<style>
.form-control:focus {
    border-color: #A5A5A5;
    box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(165, 165, 165, 0.52);
}
/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
	
/* NavBar */
#nav-bloc {
  	
  z-index: 9999;
}

.navbar{
	margin-bottom: -10px;
}
.navbar-brand{
	font-size: 25px;
	font-weight: bold;
	font-family: 'Source Sans Pro', sans-serif;
	font-weight: 600;
}
.navbar-brand img{
	width: auto;
	max-height: 70px;
}
.navbar-brand{
	padding: 20px 20px;
	margin: 5px 5px 0 0;
}
.navbar .nav{
	padding-top: 10px;
	margin-right: -16px;
	float:right;
}
.nav > li{
	float: left;
	margin-top: 4px;
	font-size: 20px;
	font-weight: 400;
}
.nav > li a:hover{
	background:transparent;
}
.navbar-toggle{
	margin: 12px;
	border: 0px;
}
.navbar-toggle:hover{
	background:transparent!important;
}
.navbar-toggle .icon-bar{
	background-color: rgba(0,0,0,.5);
	width: 26px;
}
.navbar-collapse.in {
overflow-y: visible;
float: left;
width: 100%;
}
.navbar-1 {
  float: right;
}
.site-navigation:first-child {
  float: left;
}
.site-navigation:nth-child(2) {
  float: right;
}
.site-navigation:nth-child(2) a {
  color: #ccc;
  font-size: 85%;
  padding-right: 0px;
}

.site-navigation .nav > .active{
  color: #333;
}

.navbtn {
  background-color: #000000;
  border: none;
  color: white;
  padding: 9px 17px;
  text-align: center;
  font-size: 15px;
  font-weight: 500;
  margin: -20px 1px 0 0;
  opacity: 1;
  transition: 0.3s;
  letter-spacing: 0.15rem;
}
	
.navbtn:hover {opacity: 0.6}
	
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
	
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.footer{
  background: #152F4F;
	color:white; }
  
.links{
    ul {list-style-type: none;}
    li a{
      color: white;
      transition: color .2s;
    }
 }  

a:hover{
        text-decoration:none;
        color: #949494;
        }
	
.about-company{
    i{font-size: 25px;}
    a{
      color:white;
      transition: color .2s;
      &:hover{color:#949494;}
    }
} 
	
.location{
    i{font-size: 18px;}
}
	
.copyright p{border-top:1px solid rgba(255,255,255,.1);} 
</style>
	
</HEAD>
<BODY>
<!-- Navigation section
================================================== -->
<div class="bloc l-bloc" id="nav-bloc" style="background: #ffffff">
	<div class="container">
		<nav class="navbar row">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><img src="../IKEA E-Restaurant/images/ikea-logo.png" alt="Ikea Logo" style="width: 130px; height: 50px"></a>
				<button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
					<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button>
			</div>
			<div class="">
				<ul class="site-navigation nav">
					<li>
						<a href="../IKEA E-Restaurant/homepage-dynamic.html" style="font-size: 17px; letter-spacing: 0.7px">HUNGRY?</a>&emsp;&nbsp;&nbsp;
					</li>
					<li>
						<a href="../book-table/book-table.html" style="font-size: 17px; letter-spacing: 0.2px">BOOK A TABLE</a>&emsp;&emsp;&emsp;
					</li>
					<li>
						<div class="dropdown">
    					<a href="#" class="fas fa-user-alt dropdown-toggle" style="font-size: 18px; padding-top: 7px" type="button" data-toggle="dropdown"></a>
    						<ul class="dropdown-menu">
      							<li><a href="#" style="letter-spacing: 0.4px; font-size: 14px; color: #5c5c5c">&emsp;My Account</a></li>
      							<li><a href="#" style="letter-spacing: 0.4px; font-size: 14px; color: #5c5c5c">&emsp;Order History</a></li>
      							<li><a href="#" style="letter-spacing: 0.4px; font-size: 14px; color: #5c5c5c">&emsp;Booking History</a></li>
	 			 				<hr>
	  							<li><a href="../IKEA E-Restaurant/homepage-static.html" style="letter-spacing: 0.4px; font-size: 14px; color: #5c5c5c">&emsp;Logout</a></li>
    						</ul>
  						</div>
					</li>				
          		</ul>
			</div>
		</nav>
	</div>
</div><hr>
<!-- Navigation Block END -->
<div id="shopping-cart">
<div class="txt-heading">Order Cart</div>

<a id="btnEmpty" href="index.php?action=empty">Empty Cart</a> &emsp;

<!--<a id="btnEmpty" style="float: left" href="index.php?action=empty">Next</a>-->

<?php
if(isset($_SESSION["cart_item"])){
    $orderQuantity = 0;
    $orderTotal = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Menu Name</th>
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
				<td><img src="<?php echo 'imageView2.php?id='.$item["id"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
				<td><?php echo $item["id"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "RM ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "RM ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="index.php?action=remove&id=<?php echo $item["id"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$orderQuantity += $item["quantity"];
				$orderTotal += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $orderQuantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "RM ".number_format($orderTotal, 2); ?></strong></td>
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
	$product_array = $db_handle->runQuery("SELECT * FROM menus");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>

	<?php
		}
	}
	?>
	<div id="shopping-cart">
	<form id="contact" action="processMenu.php" method="post">
<div class="txt-heading">Order Details</div><br>
<form>
  <div class="form-group">
	<div class="col-12 col-sm-4 mb-4">
    <label>Name</label>
    <input type="text" class="form-control" id="custName" name="custName" placeholder="Enter name">
  </div>
  <div class="form-group">
	<div class="col-12 col-sm-4 mb-4">
    <label>Email</label>
    <input type="email" class="form-control" id="custEmail" name="custEmail" placeholder="Enter email">
  </div>
  <div class="form-group">
	<div class="col-12 col-sm-4 mb-4">
    <label>Phone Number</label>
    <input type="tel" class="form-control" id="custContact" name="custContact" placeholder="Enter phone number">
  </div>
	  
	<?php 
		echo '<input type="hidden" value="'.$orderQuantity.'" name="orderQuantity">'; 
		echo '<input type="hidden" value="'.$orderTotal.'" name="orderTotal">';
	?>
  <div class="col-12 col-sm-4 mb-4">
	  <button type="submit" id="form-submit" name="checkout" class="btn btn-dark">Checkout</button></div>
  <br><br>
</form>
	  
<!-- Javascript 
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</BODY>
</HTML>