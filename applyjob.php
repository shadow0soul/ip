<?php
include("../includes/config.php");
include("../includes/handlers/companysign_in_handler.php");
include("../includes/handlers/companysign_up_handler.php");

$name = $_POST['name'];

$job = $_POST['job'];

$des = $_POST['des'];

$salary = $_POST['salary'];

$location = $_POST['location'];

$candidate = $_POST['candidate'];

$email = $_POST['email'];
//echo print_r($email);
$User_name = $_SESSION['userLoggedIn'];
$sql = "insert into jobs(User_name,Name,Company_name,Description,Salary,Location,Contact_us,No_of_candiates) values('$User_name','$job','$name','$des','$salary','$location','$email','$candidate');";
$res = mysqli_query($con, $sql);
if ($res == true) {

    header("location:home.php"); //ider next home page daalna baaki hai jo bhi user ka hoga
}
