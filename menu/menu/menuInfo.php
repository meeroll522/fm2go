  <title>Create Menu</title>

  <style>
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

<?php
//menuInfo.php

echo '<div id ="set" style="line-height: 1.8;">';

echo '<form action="processMenu.php" method="post">';
echo '<fieldset><legend>Enter Menu Information :</legend>';
echo 'Menu Name : ';
echo '<input type="text" name="menuName" required>';
echo '<br>Menu Type : ';
echo '<input type="text" name="menuType" required>';
echo '<br>Menu price : ';
echo '<input type="text" name="menuPrice">';
echo '<br>Menu Quantity : ';
echo '<input type="text" name="menuQuantity">';

echo '<br><br><input type="submit" name="saveNewMenuButton" value="Save">';
echo '<input type ="reset" name="resetButton" value="reset">';

echo '</fieldset>';
echo '</form>';
echo '</div>';
?>