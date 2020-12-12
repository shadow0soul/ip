<?php
include("../includes/config.php");

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet"  href="../assets/css/styleapp.css">
  <title> Applications</title>
</head>
<body>
  <nav>
    <div class="logo">
      <img src="../assets/img/logo.png" alt="Logo Image">
    </div>
    <div class="hamburger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
    <ul class="nav-links">
      <li ><a href="home.php">Home</a></li>
      <li><a href="search.php">View jobs</a></li>
      <li class="active"><a href="applications.php">My Applications</a></li>
      <li><a href="upload.php">My Resume</a></li>
      <li><a href="applicant-register.php">Register</a></li>
      <li><a href="../logout.php">Logout</a></li>
    </ul>
  </nav>
  <script src="../assets/js/app.js"></script>
<body>

      
<div class="searchcontainer">
<h2 class="title">View your applications</h2>
<br>

      <table class="table table-bordered mg-b-0">

        <tr>
        <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Salary</th>
            <th>Location</th>
            <th>Contact us</th>
            <th>No of Candidates</th>
        </tr> <?php
              $User_name = $_SESSION['userLoggedIn'];
              //echo print_r($User_name);
              $sql = "SELECT j.Job_id,j.Name,j.Description,j.Salary,j.Location,j.Contact_us,j.No_of_candiates FROM jobs j inner join application a on j.Job_id = a.Job_id inner join applicants p on a.Applicant_id = p.Applicant_id where 
              p.User_name = '$User_name'";

              $result = mysqli_query($con, $sql);
              $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
          $i = 0;
          while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>";
              echo "<th>" . $row['Job_id'] . "</th>";

              echo "<th>" . $row['Name'] . "</th>";
              echo "<th>" . $row['Description'] . "</th>"; //table sql
              echo "<th>" . $row['Salary'] . "</th>";
              echo "<th>" . $row['Location'] . "</th>";
              echo "<th>" . $row['Contact_us'] . "</th>";

              echo "<th>" . $row['No_of_candiates'] . "</th>";

              echo "</tr>";
            $i = $i + 1;
          }
        }
        ?>

      </table>
    </div>
     
</body>
</html>


