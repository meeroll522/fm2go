<?php						$conn = mysqli_connect("localhost", "fm2go", "fm2go", "fm2go");
					
						if(count($_FILES) > 0) {
						if(is_uploaded_file($_FILES['image']['tmp_name'])) {
							//require_once "db.php";
							$imgData =addslashes(file_get_contents($_FILES['image']['tmp_name']));
							$imageProperties = getimagesize($_FILES['image']['tmp_name']);
						
							$sql = "UPDATE `signupcustomer` SET `imageData` = '{$imgData}', imageType = '{$imageProperties['mime']}' WHERE `signupcustomer`.`name` = '" . $_SESSION['name'] . "'";
							echo $sql;
							$current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
							if(isset($current_id)) {
								
								//mysqli_close($conn);     
							}
							
							//mysqli_close($conn); 
						}
						}