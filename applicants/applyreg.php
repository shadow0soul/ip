<?php
include("../includes/config.php");
include("../includes/handlers/recruitersign_in_handler.php");
include("../includes/handlers/recruitersign_up_handler.php");

  $name = $_POST['name'];

  $success = $_POST['success'];



  $contact = $_POST['contact'];
  



  $mail = $_POST['mail'];

  $User_name = $_SESSION['userLoggedIn'];
  $sql1 = "select User_name from applicants where User_name = '$User_name';";
  $res1 = mysqli_query($con, $sql1);
  if (IS_NULL($res1) == false) {
    echo '<script type="text/javascript">';
    echo ' alert("You have already Registered!!")'; 
    echo 'window.location.hre= "home.php"'; //not showing an alert box.
    echo '</script>';

    //header("location:home.php");
  } 
  else {


    $sql = "insert into applicants (User_name, Name, Contact_no, Mail_id, Success_rate) values ('$User_name','$name','$contact','$mail','$success');";
    $res = mysqli_query($con, $sql);
    if ($res == true) {
      header("location:home.php"); //ider next home page daalna baaki hai jo bhi user ka hoga
    }
  }
?>