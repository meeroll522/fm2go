<?php
session_start();
print_r($_POST);

$con = mysqli_connect("localhost", "fm2go", "fm2go", "fm2go");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
    exit();
}

$custusername = $_SESSION['username'];
$sql = 'SELECT * FROM `signupcustomer` WHERE name = "' . $_SESSION['username'] . '"';
$result = mysqli_query($con, $sql) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($con), E_USER_ERROR);
$row = mysqli_fetch_array($result);

$sql = 'SELECT * FROM `signupcustomer` WHERE name = "' . $_SESSION['username'] . '"';
$result = mysqli_query($con, $sql) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($con), E_USER_ERROR);
$row = mysqli_fetch_assoc($result);

echo   '<form class="form" action="" method="POST" id="registrationForm">';

echo       '<div class="form-group">';
echo            '<div class="col-xs-6">';

echo                "<input type='text' class='form-control' name='name'  placeholder='Username' title='enter your username.' value='$name' >";
echo  '<br>';
echo                "<input type='text' class='form-control' name='fname'  placeholder='First Name' title='enter your name.' value='$fname' >";
echo  '<br>';
echo                "<input type='text' class='form-control' name='lname'  placeholder='Last Name' title='enter your name.' value='$lname' >";
echo  '<br>';
echo                "<input type='text' class='form-control' name='email'  placeholder='Email' title='enter your email.' value='$email' >";
echo  '<br>';
echo                "<input type='text' class='form-control' name='contact'  placeholder='Contact ' title='enter your phone number.'  value='$phonenumber' >";
echo  '<br>';
echo                "<input type='text' class='form-control' name='password'  placeholder='Password' title='enter your email if any.' value='$password' >";

echo            '</div>';
echo        '</div>';


echo        '<div class="form-group">';
echo             '<div class="col-xs-12">';
echo                  '<br>';
echo                     "<input type='hidden' value='$usernamealter' name='usernamealter'>";
echo                    "<input type='submit' formmethod='post' name='updatebutton' class='btn btn-lg btn-success' style='background-color: #948757; border-color: #bfbf9d'>";

echo             '</div>';
echo       '</div>';

echo    '</form>';


if (isset($_POST['updatebutton'])) {

    if (empty($_POST['password'])) {
        $setChangePWD = $_SESSION['password'];
    } else {
        $setChangePWD = $_POST['password'];
    }

    if (!empty($_POST['name'])) {
        $setChangeNAME = $_POST['name'];
    }

    if (!empty($_POST['email'])) {
        $setChangeEMAIL = $_POST['email'];
    }

    if (!empty($_POST['fname'])) {
        $setChangeFNAME = $_POST['fname'];
    }

    if (!empty($_POST['lname'])) {
        $setChangeLNAME = $_POST['lname'];
    }

    if (!empty($_POST['contact'])) {
        $setChangePHONENUMBER = $_POST['contact'];
    }


    $con = mysqli_connect("localhost", "fm2go", "fm2go", "fm2go");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
        exit();
    }
    $sql = "UPDATE `signupcustomer` SET `name` = '" . $_SESSION['name'] . "' ,`name` = '" . $setChangeNAME . "',`email` = '" . $setChangeEMAIL . "', 
	`contact` = '" . $setChangecontact . "',`password` = '" . $setChangePWD . "' WHERE `signupcustomer`.`name` = '" . $_SESSION['name'] . "'";
    $result = mysqli_query($con, $sql) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($con), E_USER_ERROR);

    if ($result) {
        echo "<script type='text/javascript'>alert('Successfull.');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Error. Unsuccessful');</script>";
    }
    $_SESSION['password'] = $setChangePWD;
}
?>