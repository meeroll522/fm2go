<!DOCTYPE html>
<html lang="en">
	
<?php
  session_start();

if (!(isset($_SESSION['name']) && $_SESSION['name'] != '')) {
  session_destroy();
  header("Location: masterfolder_fm2go/homepage.html");
}
if (isset($_POST['logout'])) {
  header("Location: masterfolder_fm2go/login%20customer/login.php");
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
    background-image: url('familymartstore.jpg')
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
					<img src="addtocart.png" class="img-responsive">
                  </div>
                   <div class="circle dark inline">
					<i class="icon ion-navicon"></i>
                  </div>

                  <div class="list-menu">
                    <i class="icon ion-close-round close-iframe"></i>
                    <div class="intro-inner">
                      <ul id="nav-menu">
                        <li><a href="../customer-page/customerprofile.php">My Account</a></li>
                        <li><a href="">Order History</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contact</a></li>
						<li><a href="">FAQ</a></li>
						<li><a href="">Feedback</a></li>
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
						
							$sql = "UPDATE `signupcustomer` SET `imageData` = '{$imgData}', imageType = '{$imageProperties['mime']}' WHERE `signupcustomer`.`name` = '" . $_SESSION['name'] . "'";
							//$sql = "INSERT INTO admin(imageType ,imageData) VALUES('{$imageProperties['mime']}', '{$imgData}')";
							$current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
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
					   <?php echo '<img src="imageView.php?username='.$_SESSION['name'].'" class="avatar img-circle img-thumbnail">'; ?>
						<br><br>
				
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
                  <form class="form" novalidate="">
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
								
								 $sql = 'SELECT * FROM signupcustomer where name = "' . $_SESSION['name'] . '"';

								$result = mysqli_query($con, $sql);
								mysqli_close($con);
								$qry = $result;								                     	
								while ($row = mysqli_fetch_assoc($qry)) {		
									echo '<form>';
									echo '<div class="row">';
									echo        '<div class="column">';

							/*		echo          '<div class="col-md-12">';  
									echo              'Username';				       
									echo          '</div><br><br>'; */

									echo         '<div class="col-md-12">';      
									echo              'Username';                  
									echo         '</div><br><br>';

									echo         '<div class="col-md-12">';      
									echo              'First Name';                  
									echo         '</div><br><br>';
									
									echo         '<div class="col-md-12">';      
									echo              'Last Name';                  
									echo         '</div><br><br>';
									
									echo         '<div class="col-md-12">';      
									echo              'Email';                  
									echo         '</div><br><br>';

									echo          '<div class="col-md-12">';       
									echo              'Password';                    
									echo         '</div><br><br>';

									echo          '<div class="col-md-12">';       
									echo              'Contact';                    
									echo         '</div><br><br>';

									echo       '</div>';

									echo          '<div class="col-md-6">';   
									echo              $row['name']. '<br><br>'; 
									echo 			  $row['fname']. '<br><br>'; 
									echo 			  $row['lname']. '<br><br>'; 
									echo 			  $row['email']. '<br><br>';
									echo 			  $row['password']. '<br><br>'; 
									echo 			  $row['contact']. '<br><br>';
									echo          '</div>';
									echo '</div>';
									echo '</form>';
								}						
							 ?>					 
						</table>
						</div>			 
                    </div>                 
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-3 mb-3">
        <div class="card mb-3">
         <br>
          <a class="nav-link px-2 active" href="http://localhost/masterfolder_fm2go/homepage.html" style="color:MediumSeaGreen">
			  <i class="fa fa-home " style="color: MediumSeaGreen"></i><span>Homepage</span></a>         
		  <a class="nav-link px-2" href="settingprofile.php" style="color:MediumSeaGreen">
			  <i class="fa fa-fw fa-cog mr-1" style="color: MediumSeaGreen"></i><span>Update</span></a> 
			<br>       
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

<!-- Footer section
================================================== -->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<p class="wow fadeInUp"  data-wow-delay="0.3s">© FamilyMart NU Central </p>
				<ul class="social-icon wow fadeInUp"  data-wow-delay="0.6s">
					<li><a href="https://www.facebook.com/FamilyMartMY/" class="fa fa-facebook"></a></li>
					<li><a href="https://www.instagram.com/familymartmy/?hl=en" class="fa fa-instagram"></a></li>
					<li><a href="https://www.linkedin.com/company/familymart-co.-ltd." class="fa fa-linkedin"></a></li>
				</ul>
				</div>
			
		</div>
	</div>
</footer>
	
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