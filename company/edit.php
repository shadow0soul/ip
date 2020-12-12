<?php
include("../includes/config.php");
include("../includes/handlers/companysign_in_handler.php");
include("../includes/handlers/companysign_up_handler.php");

$name = $_POST['name'];

$field= $_POST['field'];

$scale = $_POST['scale'];

$location = $_POST['location'];

$mail = $_POST['mail'];

$User_name = $_SESSION['userLoggedIn'];
$sql = "update Company set Name = '$name' , Location = '$location' , Field = '$field' , Scale = '$scale', Mail_id = '$mail' where User_name = '$User_name';";
$res = mysqli_query($con,$sql);
if ($res == true) {
    header("location:editprof.php"); //ider next home page daalna baaki hai jo bhi user ka hoga
}
