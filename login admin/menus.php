<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Foods Menu</title>
</head>

<body><!DOCTYPE html>
<html lang="en">
	

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Foods Menu</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	


  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Food Menu</h1>
          <p class="mb-4">Add new menus to the menu list.</p>

          <!-- Content Row -->
			
         <div class="row">
			<!-- Dropdown Card Example -->
			 
			<div class="col-xl-12 col-lg-7 ">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Add Food Menu</h6>
                  
                </div>
                <!-- Setting Info Body -->
                <div class="card-body">
				<?php
					add();
					$con = mysqli_connect("localhost", "fm2go", "fm2go", "fm2go"); 
					
					$name = $_POST['name'];
				    $price = $_POST['price'];
				    $description = $_POST['description'];
				    $category = $_POST['category'];

					$imgData =addslashes(file_get_contents($_FILES['image']['tmp_name']));
					$imageProperties = getimagesize($_FILES['image']['tmp_name']);
  
					if (isset($_POST['addMenu'])) {
                      if (!$con) {
                        echo  mysqli_connect_error();
                        exit;
                      }
					  
                      $sql = "INSERT INTO `menus` (`name`, `price`, `description`, `category`, `imageType` ,`imageData`) VALUES ('$name', '$price', '$description', '$category', '{$imageProperties['mime']}', '{$imgData}') ";
                      $result = mysqli_query($con, $sql);
						

                      //check if insert successful
                      if ($result)
                        echo '<script>alert("Insertion Successful.")</script>';
                      else
                        echo '<script>alert("Insertion Failed.")</script>';
						
             			$sql = "SELECT * FROM menus";

                      $result = mysqli_query($con, $sql);
                      mysqli_close($con);
                      $qry = $result;
					  
					   //if(is_uploaded_file($_FILES['image']['tmp_name'])) {
						  //require_once "db.php";
						//$imgData =addslashes(file_get_contents($_FILES['image']['tmp_name']));
						//$imageProperties = getimagesize($_FILES['image']['tmp_name']);
						
						//$sql = "UPDATE `menus` SET `imageData` = '{$imgData}', imageType = '{$imageProperties['mime']}' WHERE `menus`.`id` = '" . $_SESSION['id'] . "'";
						//$sql = "INSERT INTO menus (`imageType` ,`imageData`) VALUES('{$imageProperties['mime']}', '{$imgData}')";
							
						//$current_id = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($con));
					   //}
					  
					}
					 else {
                      if (!$con) {
                        echo  mysqli_connect_error();
                        exit;
                      }
                      $sql = "SELECT * FROM menus";

                      $result = mysqli_query($con, $sql);
                      mysqli_close($con);
                      $qry = $result;
                    }
						?>
                </div>		
              </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../signup-login-cust-admin/logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="js/demo/chart-bar-demo.js"></script>

</body>
   <?php
function add()
{
  echo '<form action="" method="POST" enctype="multipart/form-data">';
  echo '<div class="form-group"><label class="bmd-label-floating">Food Name</label>
        <input type="text" name="name" class="form-control"required> </div>';
	
  echo '<div class="form-group"><label class="bmd-label-floating">Price</label>
        <input type="number" name="price" class="form-control"required> </div>';
	
  echo '<div class="form-group"><label class="bmd-label-floating">Description</label>
        <input type="text" name="description" class="form-control"required> </div>';
	
  echo '<div class="form-group"><label class="bmd-label-floating">Category</label><br>
  		<select name="category" class="form-control"required>
  		<option>Main</option>
		<option>Kids</option>
		<option>Sides</option>
		<option>fm2go Family</option>
		<option>fm2go Cafe</option>
		</select>
 		</div>';
	
  echo '<div class="form-group"><label class="bmd-label-floating">Photo</label><br>
  			
			<input type="file"  name="image" class="text-center center-block file-upload">	
			<div class="form-group">
			<div class="col-xs-12"><br>
			</div></div>
		</div>';
	
  echo '<input type="submit" name="addMenu" value="Add Menu"  class="btn btn-primary pull-right" >';
  echo '</form>';
  //header( "refresh:1; url=menusupdated.php" );
}


?>	  
        
       
</html>

</body>
</html>