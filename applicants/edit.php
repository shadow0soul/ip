<?php
include("../includes/config.php");
include("../includes/handlers/applicantsign_in_handler.php");
include("../includes/handlers/applicantsign_up_handler.php");

$name = $_POST['name'];

$contact= $_POST['contact'];

$success = $_POST['success'];



$mail = $_POST['mail'];

$User_name = $_SESSION['userLoggedIn'];

$sql = "update applicants set Name = '$name',Contact_no = '$contact',Mail_id = '$mail',Success_rate = '$success' where User_name = '$User_name';";
$res = mysqli_query($con,$sql);
if ($res == true) {
    header("location:home.php"); //ider next home page daalna baaki hai jo bhi user ka hoga
}
?>