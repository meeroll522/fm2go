<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Homepage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  background: #ffffff;
  color: grey;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
  color: black;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #228B22;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #ffffff;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}

</style>
</head>
<body>

<div class="header">

	<img src="familymart.png" class="center"/>
	<div class="w3-container w3-myfont">
  <p class="w3-xxlarge" align ="center">Welcome Admin! Choose what you want to do today</p>

</div>
</div>

<div class="navbar">
  <a href="http://localhost/masterfolder_fm2go/stockmenu.html">MENU</a>
  <a href="http://localhost/masterfolder_fm2go/contact.html">FM2GO HOMEPAGE</a>
  <a href="#">Admin Description</a>
  <a href="http://localhost/masterfolder_fm2go/login%20admin/login.php" class="right">log out</a>
</div>

<div class="row">
  <div class="side">
    <h2>THIS IS US, THE GREAT TEAM</h2>
<marquee scrollamount="20"
direction="left"
behavior="scroll">
<img src="anisah.jpg" alt="Anisah" width="400" height="550""><img src="adriana.jpg" alt="Anisah" width="400" height="550""><img src="muqhlis.jpg" alt="Anisah" width="400" height="550""><img src="fad.jpg" alt="Anisah" width="500" height="550""><img src="hani.jpg" alt="Anisah" width="400" height="550"">
</marquee>


</body>
</html>
