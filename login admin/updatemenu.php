<body><!DOCTYPE html>
<html lang="en">
	<?php
  session_start();

if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
  session_destroy();
  header("Location: ../adminHOME.php");
}
if (isset($_POST['logout'])) {
  header("Location: ../login-admin/logout.php");
}
  ?>
<head>

  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Update Menu | FM2GO</title>
  <link rel="icon" href="fmICON.png" type="image/png">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <style>
  body {
    font: 20px Montserrat, sans-serif;
	 background-color: #1abc9c; 
	 background-color: coral;
    line-height: 1.8;
    color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #1abc9c;
  }
  .bg-2 { 
    background-color: #1abc9c; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: ##1abc9c; /* White */
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
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.w3-myfont {
  font-family: "Comic Sans MS", cursive, sans-serif;
  
}
.button {
  border: none;
  color: white;
  padding: 15px 32px;

  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
 
}
.button1 {background-color: #4CAF50;} 
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;
}
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Roboto', sans-serif;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
    min-width: 100%;
}
.table-title h2 {
    margin: 8px 0 0;
    font-size: 22px;
}
.search-box {
    position: relative;        
    float: right;
}
.search-box input {
    height: 34px;
    border-radius: 20px;
    padding-left: 35px;
    border-color: #ddd;
    box-shadow: none;
}
.search-box input:focus {
    border-color: #3FBAE4;
}
.search-box i {
    color: #a0a5b1;
    position: absolute;
    font-size: 19px;
    top: 8px;
    left: 10px;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table td:last-child {
    width: 130px;
}
table.table td a {
    color: #a0a5b1;
    display: inline-block;
    margin: 0 5px;
}
table.table td a.view {
    color: #03A9F4;
}
table.table td button.edit {
    color: #FFC107;
	border: none;
    background-color: Transparent;
}
table.table td button.delete {
    color: #E34724;
	border: none;
    background-color: Transparent;
}
table.table td i {
    font-size: 19px;
}    

.hint-text {
    float: left;
    margin-top: 6px;
    font-size: 95%;
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
  <script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>

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
      <a class="navbar-brand" href="http://localhost/masterfolder_fm2go/homepage.html"><img src ="FM2GO.png" width="180" height="60" ></a></div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://localhost/masterfolder_fm2go/menu/menu.php">Menu</a></li>
        <li><a href="http://localhost/masterfolder_fm2go/login%20admin/adminHOME.php">Admin Homepage</a></li>
		<li><a href="http://localhost/masterfolder_fm2go/menu/order/">Order</a></li>
		<li><a href="http://localhost/masterfolder_fm2go/menu/adminStock.php">Stock</a></li>
		<li><a href="http://localhost/masterfolder_fm2go/login%20admin/feedbackList.php">Feedback</a></li>
		<li><a href="http://localhost/masterfolder_fm2go/login%20admin/">
          <span class="glyphicon glyphicon-log-out"></span>
        </a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid bg-1 text-center">
  <img src="fmICON.png" class="img-responsive margin" style="display:inline" alt="Bird" width="350" height="350">
</div>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Food Menu</h1>
          <p class="mb-4">Update existing menu.</p>

          <!-- Content Row -->
			
         <div class="row">
			<!-- Dropdown Card Example -->
			 
			<div class="col-xl-12 col-lg-7 ">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Update Existing Menu</h6>
                  
                </div>
                <!-- Setting Info Body -->
                <div class="card-body">
				<?php
					
					$con = mysqli_connect("localhost", "fm2go", "fm2go", "fm2go"); 
					//if (!$con) {
//                        echo  mysqli_connect_error();
//                        exit;
//                      }
//                      $sql = "SELECT * FROM menus";
//
//                      $result = mysqli_query($con, $sql);
//                      mysqli_close($con);
//                      $qry = $result;
					
					include "function.php";
					$name=$_POST['menuToUpdate'];
					$qry = getMenuInformation($name); ///////buat function.php to store all functions
					$row = mysqli_fetch_assoc($qry);
					
					//assign data to variable
					//$oldname = $_POST['name'];
					//$newname = $_POST['newname'];
					$price = $row['price'];
					$description =$row['description'];
					$category =$row['category'];
					
					
					
					  echo '<form action="process.php" method="POST" enctype="multipart/form-data">';
					
					  echo '<div class="form-group"><label class="bmd-label-floating">Food Name</label>';  
					   echo 	"<input type='text' name='newname' value='".$row['name']."' class='form-control' required> ";
					   //echo 	"<input type='text' name='newname' value='$name' class='form-control' required> </div>";
					   echo     "<input type='hidden' name='name' value='".$row['name']."'> </div>";

					  echo '<div class="form-group"><label class="bmd-label-floating">Price</label>'; 
					  echo 		"<input type='number' name='price' value='".$row['price']."' class='form-control'> </div>";
					  //echo 		"<input type='number' name='price' value='$price' class='form-control'> </div>";

					  echo '<div class="form-group"><label class="bmd-label-floating">Description</label>'; 
					  echo 		"<input type='text' name='description' value='".$row['description']."' class='form-control'> </div>";
					  //echo 		"<input type='text' name='price' value='$description' class='form-control'> </div>";

					  echo '<div class="form-group"><label class="bmd-label-floating">Category</label><br>';
					  echo	'<select name="category" class="form-control">';
							if($category == 'Main')
								echo "<option value='Main' selected>Main</option>";
							else
								echo "<option value='Main'>Main</option>";
					
							if($category == 'Kids')
								echo "<option value='Perodua' selected>Kids</option>";
							else
								echo "<option value='Kids'>Kids</option>";
					
							if($category =='Sides')
								echo "<option value='Sides' selected>Sides</option>";
							else
								echo "<option value='Sides'>Sides</option>";
					
							if($category =='fm2go Family')
								echo "<option value='fm2go Family' selected>fm2go Family</option>";
							else
								echo "<option value='fm2go Family'>fm2go Family</option>";
					
							if($category == 'fm2go Cafe')
								echo "<option value='fm2go Cafe' selected>fm2go Cafe</option>";
							else
								echo "<option value='fm2go Cafe'>fm2go Cafe</option>";
					
							echo '</select></div>';

					  echo '<div class="form-group"><label class="bmd-label-floating">Photo</label><br>

								<input type="file"  name="image" class="text-center center-block file-upload">	
								<div class="form-group">
								<div class="col-xs-12"><br>
								</div></div>
							</div>';

					  echo '<input type="submit" name="updatemenu" value="Update Menu"  class="btn btn-primary pull-right" >';
					  echo '</form>';
						?>
                </div>		
              </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

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

</body>
 
	
        
       
</html>

</body>
</html>