<?php
include("../includes/config.php");
include("../includes/handlers/companysign_in_handler.php");
include("../includes/handlers/companysign_up_handler.php");

$name = $_POST['name'];

$field = $_POST['field'];

$scale = $_POST['scale'];



$location = $_POST['location'];



$mail = $_POST['email'];
//echo print_r($email);
$User_name = $_SESSION['userLoggedIn'];
$sql = "insert into company(User_name,Name ,Location,Field,Mail_id,Scale) values ('$User_name','$name','$location','$field','$mail','$scale');";
$res = mysqli_query($con, $sql);
if ($res == true) {

    header("location:home.php"); //ider next home page daalna baaki hai jo bhi user ka hoga
}
