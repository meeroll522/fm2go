<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img/fox.jpg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Ticket List
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../../assets/demo/demo.css" rel="stylesheet" />
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  
  <style>
	table.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
	
	button {
		padding: 0;
		border: none;
		background: none;
		outline: none;
		color: #51CBCE;
	}
  </style>
  
  <script>
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});
  </script>
</head>

<body class="" style="background-color:#F4F4F4">
  
      <!-- End Navbar -->
    <?php
	include "ticket.php";

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	$qry = getListOfTicket();

	//echo '<br>No of car:'.mysqli_num_rows($qry);
	echo '<div class="content">
			<div class="row">
			<div class="col-md-12">
			<div class="card">
			<div class="card-header row">
				<h4 class="card-title col-md-10"> Ticket </h4>
				<div class="card-title col-md-2"> <a href="addTicket.php"> <button type="button" class="add-new btn btn-primary btn-round"><i class="fa fa-plus"></i> Add Ticket</button> </a> </div>
			</div>
			<div class="card-body">
			<div class="table-responsive">
            <table class="table table-hover">
				<thead class=" text-primary" align="center">
					<th>No</th>
					<th>ID</th>
					<th>Name</th>
					<th>Type</th>
					<th>Package</th>
					<th>Price</th>
					<th>Actions</th>
				</thead>';
	$i=1;
	while($row=mysqli_fetch_assoc($qry))//Display car information
	{
		echo '<tbody align="center">';
		echo '<tr>';
		echo '<td>'.$i.'</td>';
		echo '<td>'.$row['ticketID'].'</td>';
		echo '<td>'.$row['ticketName'].'</td>';
		echo '<td>'.$row['ticketType'].'</td>';
		echo '<td>'.$row['ticketPackage'].'</td>';
		echo '<td>'.$row['ticketPrice'].'</td>';
		$ticketID = $row['ticketID'];
		echo '<td>';
			echo '<form style="display:inline-block" action="updateTicket.php" method="post" >';
			echo "<input type='hidden' value='$ticketID' name='ticketIDToUpdate'>";
			echo '<button type="submit" name="updateTicket" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i> </button>';
			echo '</form>';
			echo '&emsp;';
			echo '<form style="display:inline-block" action="processTicket.php" method="post" >';
			echo "<input type='hidden' value='$ticketID' name='ticketIDToDelete'>";
			echo '<button type="submit" name="deleteTicket" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i> </button>';
			echo '</form>';
		echo '</td>';
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
	
	<?php
	include "../book/book.php";

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	$qry = getListOfBook();

	//echo '<br>No of car:'.mysqli_num_rows($qry);
	echo '<div class="col-md-12">
			<div class="card">
			<div class="card-header">
				<h4 class="card-title"> Tickets Booked </h4>
			</div>
			<div class="card-body">
			<div class="table-responsive">
            <table class="table">
				<thead class=" text-primary" align="center">
					<th>No</th>
					<th>Reference</th>
					<th>Ticket ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Contact</th>
					<th>Country</th>
					<th>Date</th>
					<th>Quantity</th>
					<th>Amount</th>
					<th>Actions</th>
				</thead>';
	$i=1;
	while($row=mysqli_fetch_assoc($qry))//Display car information
	{
		echo '<tbody align="center">';
		echo '<tr>';
		echo '<td>'.$i.'</td>';
		echo '<td>'.$row['visitorReference'].'</td>';
		echo '<td>'.$row['ticketID'].'</td>';
		echo '<td>'.$row['visitorFN'].'</td>';
		echo '<td>'.$row['visitorLN'].'</td>';
		echo '<td>'.$row['visitorEmail'].'</td>';
		echo '<td>'.$row['visitorContact'].'</td>';
		echo '<td>'.$row['visitorCountry'].'</td>';
		echo '<td>'.$row['visitorDate'].'</td>';
		echo '<td>'.$row['visitorQuantity'].'</td>';
		echo '<td>'.$row['visitorAmount'].'</td>';
		echo '<td>';
			echo '<form style="display:inline-block" action="updateTicket.php" method="post" >';
			echo "<input type='hidden' value='$ticketID' name='ticketIDToUpdate'>";
			echo '<button type="submit" name="updateTicket" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i> </button>';
			echo '</form>';
			echo '&emsp;';
			echo '<form style="display:inline-block" action="processTicket.php" method="post" >';
			echo "<input type='hidden' value='$ticketID' name='ticketIDToDelete'>";
			echo '<button type="submit" name="deleteTicket" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i> </button>';
			echo '</form>';
		echo '</td>';
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

  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>
