<?php
include("../includes/config.php");
include("../includes/handlers/companysign_in_handler.php");
include("../includes/handlers/companysign_up_handler.php");

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../assets/css/stylecom.css">
  <link rel="stylesheet" href="../assets/css/style.css">
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
      <li class="active"><a href="#">Home</a></li> 
      <li><a href="post_job.php">Post Jobs</a></li>
      <li><a href="editprof.php">Edit Profile</a></li>
      <li><a href="viewjob.php">View Jobs Posted</a></li>
      <li><a href="compreg.php">Register</a></li>
      
      <li><a href="../logout.php">Logout</a></li>
    </ul>
  </nav>
  <script src="../assets/js/app.js"></script>

  <body>
    <div class="companies">
      <div class="page-title">
        <br>
        <br>
        <br>
        <h2 class="title">Recruiters currently working</h2>


    </div>
    </div>

    <div class="searchcontainer">
      <table class="table table-bordered mg-b-0">

        <tr>
          
          <td>Name</td>
          <td>Contact</td>
          <td>Email</td>
          <td>Location</td>
          <td>experience</td>
          <th>field</th>

        </tr>

        <?php
         $User_name = $_SESSION['userLoggedIn'] ;
        //echo print_r($_SESSION['userLoggedIn']);
        //echo print($User_name);
        $sql = "SELECT r.Name,r.Contact_no,r.Mail_id,r.Location,r.Experience,r.Field FROM recruiter r inner join appoints a on r.Recruiter_id = a.Recruiter_id inner join company c on c.Company_id = a.Company_id where c.User_name = '$User_name';";

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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
  
      

      </table>
    </div>

    </div>
  </body>

</html>