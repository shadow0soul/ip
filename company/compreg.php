<?php

include("../includes/config.php");
include("../includes/handlers/companysign_in_handler.php");
include("../includes/handlers/companysign_up_handler.php");

if (isset($_POST['loginButton'])) {
  $name = $_POST['name'];

  $field = $_POST['field'];

  $scale = $_POST['scale'];



  $location = $_POST['location'];



  $mail = $_POST['email'];
  //echo print_r($email);
  $User_name = $_SESSION['userLoggedIn'];


  $sql1 = "select User_name from company where User_name = '$User_name';";
  $res1 = mysqli_query($con, $sql1);
  if(mysqli_num_rows($res1)!=0){
    echo '<script type="text/javascript">';
    echo ' alert("You have already Registered!!")';  //not showing an alert box.
    echo '</script>';

    //header("location:home.php");
  } 
  else {


    $sql = "insert into company(User_name,Name ,Location,Field,Mail_id,Scale) values ('$User_name','$name','$location','$field','$mail','$scale');";
    $res = mysqli_query($con, $sql);
    if ($res == true) {

    header("location:home.php"); 
    }//ider next home page daalna baaki hai jo bhi user ka hoga
  }
}
?>




<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <m eta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../assets/css/style.css" />
  <title>Company Registration</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="#" class="sign-in-form" method = "post">
          <h2 class="title">Register</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Name" name="name" />
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Location" name="location" />
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Field" name="field" />
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Scale" name="scale" />
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="email" placeholder="Email" name="email" />
          </div>
          <input type="submit" value="Register" class="btn solid" name="loginButton"/>
        </form>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Register Now!!</h3>
            <p>
              Your Dream Job is waiting!!Take one step closer to get your Dream Job!!
            </p>
            <div>
              <img src="../assets/img/log.svg" class="image" alt="" />
              <div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
</body>

</html>