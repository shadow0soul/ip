<?php
include("../includes/config.php");
include("../includes/handlers/recruitersign_in_handler.php");
include("../includes/handlers/recruitersign_up_handler.php");

$name = $_POST['name'];

$field= $_POST['field'];
$contact_no= $_POST['contact_no'];


$experience = $_POST['experience'];

$location = $_POST['location'];

$mail = $_POST['mail'];

$User_name = $_SESSION['userLoggedIn'];
$sql = "update recruiter set Name = '$name' , Contact_no = '$contact_no',Location = '$location' , Field = '$field' , Experience = '$experience', Mail_id = '$mail' where User_name = '$User_name';";
$res = mysqli_query($con,$sql);
if ($res == true) {
    header("location:home.php"); //ider next home page daalna baaki hai jo bhi user ka hoga
}
