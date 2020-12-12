<?php
include("../includes/config.php");
include("../includes/handlers/recruitersign_in_handler.php");
include("../includes/handlers/recruitersign_up_handler.php");
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet"  href="../assets/css/stylerec.css">
  <title>Applications</title>
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
      <li><a href="home.php">Home</a></li>
      <li class="active"><a href="post.php">Posts</a></li>
      <li><a href="compjobs.php">Jobs</a></li>
      
      <li><a href="jobseekerapplication.php">Job Seekers Application</a></li>
      <li><a href = "register.php">Register</a></li>
      <li><a href="../logout.php">Logout</a></li>
    </ul>
  </nav>
  <script src="../assets/js/app.js"></script>
<body>
  <div class="applications">
    <h2 class="title">Jobs posted by the companies</h2>
    <div class="searchcontainer">
      <table class="table table-bordered mg-b-0">

        <tr>
          <th>Job_id</th>
          <th>Job Name</th>
          <th>Company Name</th>
          <th>Description</th>
          <th>Salary</th>
          <th>Location</th>
          <th>No of candidates</th>

        </tr> <?php
              $User_name = $_SESSION['userLoggedIn'];
              $sql = "SELECT j.Job_id,j.Name,j.Description,j.Salary,j.Location,j.Contact_us,j.No_of_candiates from recruiter r inner join appoints a on r.Recruiter_id = a.Recruiter_id inner join company c on a.Company_id = c.Company_id inner join jobs j on j.Company_name = c.Name where r.User_name = '$User_name';";

              $result = mysqli_query($con, $sql);
              $resultCheck = mysqli_num_rows($result);


              ?>
        <?php
        if ($resultCheck > 0) {
          $i = 0;
          while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>";
            echo "<th>" . $row['Job_id'] . "</th>";
            echo "<th>" . $row['Name'] . "</th>";//table sql
            
            echo "<th>" . $row['Description'] . "</th>";
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

  </div>
</body>
</html>