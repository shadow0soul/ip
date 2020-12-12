<?php
include("../includes/config.php");
include("../includes/handlers/applicantsign_in_handler.php");
include("../includes/handlers/applicantsign_up_handler.php");

$job = $_POST['job_id'];
$User_name = $_SESSION['userLoggedIn'];
$r = mysqli_query($con, "select Applicant_id from applicants where User_name = '$User_name';");
$result = mysqli_fetch_assoc($r);
$re = $result['Applicant_id'];


//$row = mysqli_fetch_row($result);
//$userid = $row['Applicant_id'];


$query = "insert into application values($job,$re);";
$res = mysqli_query($con, $query);
if ($res == true) {
    header("location:home.php"); //ider next home page daalna baaki hai jo bhi user ka hoga
} 
?>