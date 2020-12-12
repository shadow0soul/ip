<?php
include("../includes/config.php");


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
      <li><a href="post.php">Posts</a></li>
      <li ><a href="compjobs.php">Jobs</a></li>
      
      <li  class="active"><a href="jobseekerapplication.php">Job Seekers Application</a></li>
      <li><a href = "register.php">Register</a></li>
      <li><a href="../logout.php">Logout</a></li>
    </ul>
  </nav>
  <script src="../assets/js/app.js"></script>
<body>
  <div class="applications">
    <h2 class="title">Job Applications</h2>
    <div class="searchcontainer">
      <table class="table table-bordered mg-b-0">

        <tr>
          <th>Id</th>
          <th>Name</th>
          
          <th>Contact_no</th>
          <th>Mail_id</th>
          

        </tr> <?php
              $User_name = $_SESSION['userLoggedIn'];
              //echo print_r($User_name);
              $sql = "SELECT l.Applicant_id,l.Name,l.Contact_no,l.Mail_id FROM recruiter r inner join appoints a on r.Recruiter_id = a.Recruiter_id inner join company c on c.Company_id = a.Company_id inner join jobs j on c.Name = j.Company_name inner join application p on j.Job_id = p.Job_id join applicants l on l.Applicant_id = p.Applicant_id where r.User_name = '$User_name';";

              $result = mysqli_query($con, $sql);
              
              $resultCheck = mysqli_num_rows($result);



              ?>
        <?php
        if ($resultCheck > 0) {
          $i = 0;
          while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>";
            echo "<th>" . $row['Applicant_id'] . "</th>";
            echo "<th>" . $row['Name'] . "</th>";
            
            echo "<th>" . $row['Contact_no'] . "</th>";
            echo "<th>" . $row['Mail_id'] . "</th>";
            
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