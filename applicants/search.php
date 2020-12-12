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
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color:#7644eb;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #7644eb;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: #7644eb;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
  
  <title>Search</title>
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
      <li class="active"><a href="search.php">View jobs</a></li>
      <li><a href="applications.php">My Applications</a></li>
      <li><a href="upload.php">My Resume</a></li>
      <li><a href="applicant-register.php">Register</a></li>
      <li><a href="../logout.php">Logout</a></li>
    </ul>
  </nav>
  </nav>
  <script src="../assets/js/app.js"></script>
  <div class="searchcontainer">
    
      <table class="table table-bordered mg-b-0">

        <tr>
          <th>Job_id</th>
          <th>Job Name</th>
          <th>Company Name</th>
          <th>Description</th>
          <th>Salary</th>
          <th>Location</th>
          <th>Contact_us</th>

          <th>No of candidates</th>

        </tr> <?php

              $sql = "SELECT * FROM jobs;";

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
            echo "<th>" . $row['Company_name'] . "</th>";
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
    <button class="open-button" class="btn solid" onclick="openForm()">Apply</button>

<div class="form-popup" id="myForm">
  <form action="applyjob.php" class="form-container" method = "post">
    <h1>Apply Now </h1>

    <label for="email"><b>Enter Job Id </b></label>
    <input type="text" placeholder="Enter JOB ID " name=job_id>

    

    <input type="submit" value="APPLY " class="btn solid" name=appbutton />
    <button type="button" class="btn solid" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<?php

?>
</body>
</html>