<?php
	include "order.php";

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1); 
	error_reporting(E_ALL);

	$qry = getListOfMenu();
	echo '<form action = "processOrder.php" method ="POST">';
	echo '<br><input type = "submit" name="addMenuButton" value ="Create New Menu" class="center-block" style="color:black">';
	
	echo '</form>';
	echo '<br>';
	echo '<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
			         <div class="col-sm-8"><h3>Order <b>Details</b></h3></div>
				<h4 class="card-title" align="center">  </h4>
			</div>
			<div class="card-body">
			<div class="table-responsive">
            <table class="table">
				<thead class=" text-primary">
					<th>No</th>
					<th>visitorReference</th>
					<th>visitorName</th>
					<th>visitorEmail</th>
					<th>visitorContact</th>
					<th>visitorDate</th>
					<th>visitorQuantity</th>
					<th>visitorTotal</th>
					<th>Action</th>
				</thead>';
	$i=1;
	while($row=mysqli_fetch_assoc($qry))//Display menu information
	{
		echo '<tbody>';
		echo '<tr>';
		echo '<td>'.$i.'</td>';
		echo '<td>'.$row['visitorReference'].'</td>';
		echo '<td>'.$row['visitorName'].'</td>';
		echo '<td>'.$row['visitorEmail'].'</td>';
		echo '<td>'.$row['visitorContact'].'</td>'
		echo '<td>'.$row['visitorDate'].'</td>';
		echo '<td>'.$row['visitorTotal'].'</td>';
		echo '<td>'.$row['menuQuantity'].'</td>';
		$visitorReference = $row['visitorReference'];
				echo '<td>';
			echo '<form style="display:inline-block" action="updateOrderForm.php" method="post" >';
			echo "<input type='hidden' value='$visitorReference' name='menuNameToUpdate'>";
			echo '<button type="submit" name="updateMenuButton" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i> </button>';
			echo '</form>';
			echo '<form style="display:inline-block" action="processOrder.php" method="post" >';
			echo "<input type='hidden' value='$visitorReference' name='menuNameToDelete'>";
			echo '<button type="submit" name="deleteMenuButton" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i> </button>';
			echo '</form>';
		echo '</td>';
		//delete menu
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