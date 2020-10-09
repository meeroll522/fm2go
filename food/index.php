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
<HTML><HEAD>
<TITLE>Menu Cart</TITLE>
<link rel="icon" href="../IKEA E-Restaurant/images/ikea-logo3.png" type="image/png">
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
.image img {
	width: 230px;
	height: 230px;
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


<BODY>
<!-- Navigation section
================================================== -->
<div class="bloc l-bloc" id="nav-bloc" style="background: #ffffff">
	<div class="container">
		<nav class="navbar row">
			<div class="navbar-header">
				<a class="navbar-brand" href="../IKEA E-Restaurant/about-dynamic.html"><img src="../IKEA E-Restaurant/images/ikea-logo.png" alt="Ikea Logo" style="width: 130px; height: 50px"></a>
				<button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
					<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button>
			</div>
			<div class="">
				<ul class="site-navigation nav">
					<li>
						<a href="index.php" style="font-size: 17px; letter-spacing: 0.7px">HUNGRY?</a>&emsp;&nbsp;&nbsp;
					</li>
					<li>
						<a href="../book-table/book-table.php" style="font-size: 17px; letter-spacing: 0.2px">BOOK A TABLE</a>&emsp;&emsp;&emsp;
					</li>
					<li>
						<div class="dropdown">
    					<a href="#" class="fas fa-user-alt dropdown-toggle" style="font-size: 18px; padding-top: 7px" type="button" data-toggle="dropdown"></a>
    						<ul class="dropdown-menu">
      							<li><a href="../customer-page/cust-profile.php" style="letter-spacing: 0.4px; font-size: 14px; color: #5c5c5c">&emsp;My Account</a></li>
      							<li><a href="#" style="letter-spacing: 0.4px; font-size: 14px; color: #5c5c5c">&emsp;Order History</a></li>
      							<li><a href="../book-table/book-history.php" style="letter-spacing: 0.4px; font-size: 14px; color: #5c5c5c">&emsp;Booking History</a></li>
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
<!--<form style="display:inline-block" action="processBook.php" method="post" >
<input id="btnEmpty" type="submit" name="next" value="Next"> </input>
</form>-->
<!--<a id="btnEmpty" style="float: left" href="next.php">Next</a>-->

<?php
if(isset($_SESSION["cart_item"])){
    $orderQuantity = 0;
    $orderTotal = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Menu Name</th>
<th style="text-align:left;">Order ID</th>
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
</table><br><br>
<div class='col d-flex justify-content-end'>
<a href="next.php" class="btn btn-dark">Next</a>
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
</div>

<div id="product-grid">
	<div class="txt-heading">Products</div>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM menus");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item image" style=" margin-left: auto; margin-right: auto; text-align: center; width: 18em">
			<form method="post" action="index.php?action=add&id=<?php echo $product_array[$key]["id"]; ?>">
			<div class="product-image"><img style="margin: 10px;" src="<?php echo 'imageView2.php?id='.$product_array[$key]['id']; ?>"></div>
			<div class="product-tile-footer"><br><br><br><br><br><br>
			<div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
			<div class="product-price"><?php echo "RM".$product_array[$key]["price"]."&emsp;"; ?></div>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
			</div>
			</form>
		</div>
	<?php
		}
	}
	?>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
</div>
<!-- Footer section
================================================== -->
	
<style>
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

<div class="mt-5 pt-5 pb-5 footer">
<div class="container">
  <div class="row"><br><br>
    <div class="col-lg-5 col-xs-12 about-company">
      <h2 style="font-size: 27px; font-weight: 600; letter-spacing: 0.1rem">FOOD AT IKEA</h2>
      <p class="pr-5 text-white-50" style="font-size: 16px; font-weight: 300; color: #dedede">We want to offer food that’s delicious, sustainable and nutritionally balanced. That’s why we include a variety of more sustainable options at our IKEA Restaurants, IKEA Swedish Food Markets, and IKEA Café. </p><br>
      <p><a href="https://www.facebook.com/IKEAMalaysia"><i class="fab fa-facebook" style="font-size: 20px">&nbsp;&nbsp;</i></a><a href="https://www.instagram.com/ikeamalaysia/"><i class="fab fa-instagram" style="font-size: 20px">&nbsp;&nbsp;</i></a><a href="https://www.linkedin.com/company/ikea-southeast-asia/"><i class="fab fa-linkedin" style="font-size: 20px">&nbsp;&nbsp;</i></a><a href="https://www.youtube.com/user/ikeamalaysia"><i class="fab fa-youtube" style="font-size: 20px">&nbsp;&nbsp;</i></a></p>
    </div>
    <div class="col-lg-3 col-xs-12 links">
      <h4 class="mt-lg-0 mt-sm-4" style="font-size: 20px; font-weight: 400; letter-spacing: 0.1rem">Our Company</h4>
        <ul class="m-0 p-0">
          <li><a href="../IKEA E-Restaurant/about-dynamic.html" style="font-size: 17px; font-weight: 300; color: #e6e6e6; letter-spacing: 0.5px">About us</a></li>
          <li><a href="../feedback/feedback-dynamic.html" style="font-size: 17px; font-weight: 300; color: #e6e6e6; letter-spacing: 0.5px">Feedback</a></li>
        </ul>
    </div>
    <div class="col-lg-4 col-xs-12 location">
      <h4 class="mt-lg-0 mt-sm-4" style="font-size: 20px; font-weight: 400; letter-spacing: 0.1rem">Location</h4>
      <p style="font-size: 16px; font-weight: 300; ">2A, Jalan Cochrane, Maluri, 55100 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur, Malaysia.</p>
      <p class="mb-0" style="font-size: 16px; font-weight: 300; color: #e6e6e6; line-height: 4"><i class="fas fa-phone-alt">&nbsp;</i><a href="tel:+60379527575">+603-7952 7575</a></p>
      <p style="font-size: 16px; font-weight: 300; color: #e6e6e6; line-height: 1"><i class="fas fa-envelope">&nbsp;</i><a href="mailto:customerservice.ikeamy@ikano.asia">customerservice.ikeamy@ikano.asia</a></p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col copyright"><br>
      <p class="" style="color: #dedede"><small class="text-white-50">© Inter IKEA Systems B.V. 1999-2020</small></p>
    </div>
  </div>
</div>
</div>
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