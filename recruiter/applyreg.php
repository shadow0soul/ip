<?php

include("../includes/config.php");

$name = $_POST['name'];


$field = $_POST['field'];
$contact = $_POST['contact'];

$experience = $_POST['experience'];

$location = $_POST['location'];

$mail = $_POST['mail'];

$User_name = $_SESSION['userLoggedIn'];

$sql = "insert into recruiter (User_name, Name, Contact_no, Mail_id, Location, Experience, Field) values ('$User_name','$name','$contact','$mail','$location','$experience','$field');";
$res = mysqli_query($con, $sql);
if ($res == true) {
    header("location:home.php"); //ider next home page daalna baaki hai jo bhi user ka hoga
}
