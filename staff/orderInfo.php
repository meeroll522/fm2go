 <title>Order | FM2GO</title>
  <link rel="icon" href="fmICON.png" type="image/png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
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
  body {
  background-image: url("background.jpg");
}
  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #272e36;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #1abc9c;
  }
  
.w3-myfont {
  font-family: "Comic Sans MS", cursive, sans-serif;
  
}

	body{
		 background-color:#fffff;
	}
	#set {
	 margin:auto;
	 width:50%;
	 text-align:center;

	 }
</style>
<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button></div>   
	  <div id="logo">
      <a class="navbar-brand" href="StaffHome.php"><img src ="FM2GO.png" width="180" height="60" ></a></div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
	
		<li><a href="StaffStock.php">STOCK</a></li>
        <li><a href="StaffOrder.php">ORDER</a></li>
		<li><a href="logout.php"><img src="https://img.icons8.com/metro/26/000000/export.png"/></a></li>
        </a></li>
      </ul>
    </div>
  </div>
</nav><br><br>
<?php
//menuInfo.php


echo '<div id ="set" style="line-height: 1.8; align:center;" >';

echo '<form action="processOrder.php" method="post">';
echo '<fieldset><legend>Enter Menu Information :</legend>';
echo 'Order ID : ';
echo '<input type="text" name="Id" required>';
echo '<br>Order Name : ';
echo '<input type="text" name="Name" required>';
echo '<br>Order Quantity : ';
echo '<input type="text" name="Quantity">';
echo '<br>Order Price : ';
echo '<input type="text" name="Price">';

echo '<br><br><input type="submit" name="saveNewMenuButton" value="Save">  ';
echo '<input type ="reset" name="resetButton" value="reset">';

echo '</fieldset>';
echo '</form>';
echo '</div>';
?>
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
              <li><a href="http://localhost/masterfolder_fm2go/about.html">About Us</a></li>
              <li><a href="http://localhost/masterfolder_fm2go/contact.html">Contact Us</a></li>
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