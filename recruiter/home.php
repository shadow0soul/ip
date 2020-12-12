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
  <style>
    .fixed-btn{
  position: fixed;
  bottom: 40%;
  right: 50%;
  background: #7644eb;
  width: 180px;
  height: 45px;
  line-height: 45px;
  text-align: center;
  border-radius: 3px;
  box-shadow: 4px 4px 4px #0a78aa;
  cursor: pointer;
}

.fixed-btn p{
  text-transform: uppercase;
  font-family: arial;
  font-weight: 900;
  color: #fff;
}

.fixed-btn:active{
  box-shadow: 0  0;
}



.fixed-btn:hover {
  background-color: #4d50e2;
}
  </style>
  <title>Home</title>
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
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="post.php">Posts</a></li>
      <li ><a href="compjobs.php">Jobs</a></li>

      <li><a href="jobseekerapplication.php">Job Seekers Application</a></li>
      <li><a href="register.php">Register</a></li>
      <li><a href="../logout.php">Logout</a></li>
    </ul>
  </nav>
  <script src="../assets/js/app.js"></script>
  
  <div class="searchcontainer">
  <h2 class="title">My Profile</h2>
      <table class="table table-bordered mg-b-0">

        <tr>
          
          <th>Name</th>
          <th>Contact_no</th>
          <th>Mail Id</th>

          <th>Location</th>
          
          <th>Experience</th>
          <th>Field</th>
          

        </tr> <?php
        $User_name = $_SESSION['userLoggedIn'];
        //echo print_r($User_name);
        $sql = "SELECT r.Name , r.Contact_no , r.Mail_id ,r.Location , r.Experience, r.Field FROM recruiter r where User_name = '$User_name';";

        $result = mysqli_query($con, $sql);
        $resultCheck = mysqli_num_rows($result);


        ?>
        <?php
        if ($resultCheck > 0) {
          $i = 0;
          while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>";
            
            echo "<th>" . $row['Name'] . "</th>";
            echo "<th>" . $row['Contact_no'] . "</th>";
            echo "<th>" . $row['Mail_id'] . "</th>";
            echo "<th>" . $row['Location'] . "</th>";
            echo "<th>" . $row['Experience'] . "</th>";
            echo "<th>" . $row['Field'] . "</th>";

            echo "</tr>";
            $i = $i + 1;
          }
        }
        ?>

      </table>
    </div>  
    <div type="submit" class="fixed-btn" class="btn">
    <p><a style = "text-decoration : none "href = 'afteredit.php'>Edit</a></p>
  </div>
  
</body>
</html>