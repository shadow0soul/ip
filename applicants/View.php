<?php
include("../includes/config.php");
?>
<!doctype html>
<html>
  <head>
    <style>
    video{
     float: left;
    }
    </style>
  </head>
  <body>
    <div>
 
     <?php
     $User_name = $_SESSION['userLoggedIn'];
     $fetchVideos = mysqli_query($con, "SELECT location FROM resume where User_name = '$User_name';");
     while($row = mysqli_fetch_assoc($fetchVideos)){
       $location = $row['location'];
 
       echo "<div >";
       echo "<iframe src='".$location."' controls width='1500px' height='1000px'>" ;
       echo "<img src='".$location."' controls width='320px' height='200px' >";
       echo "</div>";
     }
     ?>
 
    </div>

  </body>
</html>