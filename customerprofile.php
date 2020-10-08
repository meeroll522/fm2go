<!DOCTYPE html>
<html lang="en">
	
<?php
	session_start();
	if ($_SESSION['name'] != '') {
	  session_destroy();
	  header("Location: homepage.html");
	}
	if (isset($_POST['logout'])) {
	  header("Location: masterfolder_fm2go/login%20customer/login.php");
	}

	if(isset($_POST['update'])){
		
		$con = mysqli_connect("localhost","fm2go","fm2go","fm2go");
        if (!$con) {
            echo  mysqli_connect_error();
            exit;
        }

        
        $sql = "UPDATE `signupcustomer` SET 
		`name` = '".$_POST['name']."', 
		`fname` = '".$_POST['fname']."', 
		`lname` = '".$_POST['lname']."', 
		`email` = '".$_POST['email']."',
		`password` = '".$_POST['password']."',		
		`contact` = '".$_POST['contact']."'
        WHERE `signupcustomer`.`name` = '".$_SESSION['username']."'";
        $result = mysqli_query($con, $sql);
		


		
		//update session
		$_SESSION['username'] = $_POST['name'];
		$_SESSION['password'] = $_POST['password'];

	}

?>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	

	<!-- Site title
   ================================================== -->
	<title>Profile | FM2GO</title>
	<link rel="icon" href="fmICON.png" type="image/png">

	<!-- Bootstrap CSS
   ================================================== -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Animate CSS
   ================================================== -->
	<link rel="stylesheet" href="css/animate.min.css">

	<!-- Font Icons CSS
   ================================================== -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">

	<!-- Main CSS
   ================================================== -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Google web font 
   ================================================== -->	
  <link href="https://fonts.googleapis.com/css?family="Source+Sans+Pro:400,700,300"" rel='stylesheet' type='text/css'>
	 <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	body{
    margin-top:20px;
    font: 20px Montserrat, sans-serif;
    line-height: 1.5;
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
	
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">



<!-- Preloader section
================================================== 
<div class="preloader">

	<div class="sk-spinner sk-spinner-pulse"></div>
-->
</div>


<!-- Navigation section
================================================== -->


<div class="nav-container">

   <nav class="nav-inner transparent">

      <div class="navbar">
         <div class="container">
           <div class="row">


				<div class="navicon" style="position: absolute; right: 180px; width: 300px; padding-bottom: 100px;">
  				<div class="menu-container">
					
                  <div class="circle dark inline">
					<img src="menubar.png" class="img-responsive">
                  </div>


                  <div class="list-menu">
                    <i class="icon ion-close-round close-iframe" src="menubar.png"></i>
                    <div class="intro-inner">
                      <ul id="nav-menu">
						<li><a href="http://localhost/masterfolder_fm2go/homepage.html">Homepage</a></li>
                        <li><a href="http://localhost/masterfolder_fm2go/menu%20customer.php">Menu</a></li>
                        <li><a href="http://localhost/masterfolder_fm2go/about.html">About Us</a></li>
                        <li><a href="http://localhost/masterfolder_fm2go/contact.html">Contact Us</a></li>
						<li><a href="http://localhost/masterfolder_fm2go/cart/index.php?action=add&code=3DcAM78">Your Cart</a></li>
						<li><a href="http://localhost/masterfolder_fm2go/login%20customer/login.php">Logout</a></li>
                      </ul>
                   </div>
				  </div>
				  </div>
		   		</div>
			 </div>
		  </div>
	   </div>
	   </div>
   </nav>
</div>

	
<!-- Portfolio section
================================================== -->

<section id="portfolio">
   <div class="container">
      <div class="row">
		
        <div class="container">
			<div class="row flex-lg-nowrap">
			  <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
				<div class="card p-3">
					<div class="card-body">
					<?php
					if(isset($_POST['upload'])){
						
						$conn = mysqli_connect("localhost", "fm2go", "fm2go", "fm2go");
					
						if(count($_FILES) > 0) {
						if(is_uploaded_file($_FILES['image']['tmp_name'])) {
							//require_once "db.php";
							$imgData =addslashes(file_get_contents($_FILES['image']['tmp_name']));
							$imageProperties = getimagesize($_FILES['image']['tmp_name']);
						
							$sql = "UPDATE `signupcustomer` SET `imageData` = '{$imgData}', imageType = '{$imageProperties['mime']}' WHERE `signupcustomer`.`name` = '" . $_SESSION['username'] . "'";
							$current_id = mysqli_query($conn, $sql);
														if(isset($current_id)) {
								
								//mysqli_close($conn);     
							}
							
							//mysqli_close($conn); 
						}
						}
						
					}						
						?>
					
					<form method="POST" action="" enctype="multipart/form-data">
                   <div class="text-center" >
					   <?php echo '<img src="imageView.php?username='.$_SESSION['username'].'" class="avatar img-circle img-thumbnail" >'; ?>
						<br><br>
						
						<input type="hidden" name="username" value="<?php echo $_SESSION['username']?>">
						<input type="file"  name="image" class="text-center center-block file-upload"> <br><br>	
					<div class="form-group">
				     
				       <input type='submit' name='upload' class='btn btn-primary  vertical-center' style="background-color: MediumSeaGreen; border-color: #bfbf9d">
				   
				    </div>
				  </div><br>
					</form>
                </div>        
		
      </div>
    </div>
  <!--</div> -->

  <div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
              	<div class="col-12 col-sm-auto mb-3">
					<div class="mx-auto" style="width: 220px;"></div>
				</div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3" >
                  <div class=" mb-5 mb-sm-0" style="text-align:center">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap" >Your Info</h4>
                  </div>
                <!-- <div class="text-center text-sm-right">
                    <span class="badge badge-secondary">administrator</span>
                    <div class="text-muted"><small>Joined 09 Dec 2017</small></div>
                  </div> -->
                </div>
              </div>
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Profile</a></li>
			
              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  
                    <div class="row">
                      <div class="card-body">
							 <table class="table">
							 <?php
								//create connection								
								$con=mysqli_connect("localhost","fm2go","fm2go","fm2go");
								if (!$con) {
								echo  mysqli_connect_error();
								exit;
								}
								
								 $sql = 'SELECT * FROM signupcustomer where name = "' . $_SESSION['username'] . '"';

								$result = mysqli_query($con, $sql);
								mysqli_close($con);
								$qry = $result;								                     	
								while ($row = mysqli_fetch_assoc($qry)) {		
									echo '<form action="" method="POST">';


									echo          '<div class="col-md-6">';  
									echo          ' Username<br>
													<input type="text" name="name" size="50" value="' . $row['name'] . '"><br><br>
													First Name <br>
													<input type="text" name="fname" size="50" value="' . $row['fname'] . '"><br><br>
													Last Name <br> 
													<input type="text" name="lname" size="50" value="' . $row['lname'] . '"><br><br>
													Email   <br>   
													<input type="text" name="email" size="50" value="' . $row['email'] . '"><br><br>
													Password <br>  
													<input type="text" name="password" size="50" value="' . $row['password'] . '"><br><br>
													Contact  <br>  
													<input type="text" name="contact" size="50" value="' . $row['contact'] . '"><br><br>
									
													<br><input type="submit" name="update" value="Change !"  style="background-color: lightblue; border-color: #bfbf9d" ></input>
														
									</form>
			
									';

									echo          '</div>';
									echo '</div>';
									
								}						
							 echo'			 
						</table>
						</div>			 
                    </div>                 
                  

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      
    </div>

  </div>
</div>
</div>
			</div>
	</div>
</section>
';?>	
<!-- Footer section
================================================== -->
<!-- Footer -->
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

</body>
</html>

	
<!-- Javascript 
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
