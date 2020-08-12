<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>FM2GO WEB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
    color: #1abc9c;
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

  </style>
</head>
<body>

<!-- Navbar -->

	<div class="container">
	<img src="menu/fmICON.png" class="center"/>
 <!-- Featred Page Ends Here -->
    			<br><br><a href="http://localhost/masterfolder_fm2go/admin%20homepage.php" class="txt2">
							 Go back to Admin Homepage
						</a><br><br>

<?php
	include "menu/menu.php";

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1); 
	error_reporting(E_ALL);

	$qry = getListOfMenu();
	echo '<form action = "menu/processMenu.php" method ="POST">';
	echo '<br><input type = "submit" name="addMenuButton" value ="Create New Menu" class="center-block" style="color:black">';
	
echo '</form>';
echo '<br><br>';
	echo '<div class="col-md-12">
			<div class="card">
			<div class="card-header">
				<h4 class="card-title" align="center">  </h4>
			</div>
			<div class="card-body">
			<div class="table-responsive">
            <table class="table">
				<thead class=" text-primary">
					<th>No</th>
					<th>Name</th>
					<th>Type</th>
					<th>Price</th>
					<th>Quantity</th>
				</thead>';
	$i=1;
	while($row=mysqli_fetch_assoc($qry))//Display menu information
	{
		echo '<tbody>';
		echo '<tr>';
		echo '<td>'.$i.'</td>';
		echo '<td>'.$row['menuName'].'</td>';
		echo '<td>'.$row['menuType'].'</td>';
		echo '<td>'.$row['menuPrice'].'</td>';
		echo '<td>'.$row['menuQuantity'].'</td>';

		$i++;
	}
		echo'</tr>
        </tbody>
        </table>
        </div>
        </div>
        </div>
        </div>';
	?>

   

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">

</footer>


  </body>

</html>