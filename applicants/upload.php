<!doctype html>
<html>

<head>
<title>Resume</title>
  <link rel="stylesheet" href="../assets/css/styleapp.css" />
  <style>
    .fixed-btn {
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

    .fixed-btn p {
      text-transform: uppercase;
      font-family: arial;
      font-weight: 900;
      color: #fff;
    }

    .fixed-btn:active {
      box-shadow: 0 0;
    }



    .fixed-btn:hover {
      background-color: #4d50e2;
    }
  </style>
  <?php
  include("../includes/config.php");


  //$query1 = "insert into resume(User_name) value ('$User_name');";
  //mysqli_query($con,$query1);
  //echo "Welcome ";
  //echo print_r($User_name);
  if (isset($_POST['but_upload'])) {
    $User_name = $_SESSION['userLoggedIn'];
    $sql1 = "select User_name from resume where User_name = '$User_name';";
    $res1 = mysqli_query($con, $sql1);
    if(mysqli_num_rows($res1) != 0) {
      echo '<script type="text/javascript">';
      echo ' alert("You have uploaded your resume click on the view button to check your resume.")';  //not showing an alert box.
      echo '</script>';

      //header("location:home.php");
    } else {
      $maxsize = 5242880; // 5MB

      $name = $_FILES['file']['name'];
      $target_dir = "videos/";
      $target_file = $target_dir . $_FILES["file"]["name"];

      // Select file type
      $videoFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

      // Valid file extensions
      $extensions_arr = array("mp4", "avi", "3gp", "mov", "mpeg", "jpg", "pdf");

      // Check extension
      if (in_array($videoFileType, $extensions_arr)) {

        // Check file size
        if (($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
          echo "File too large. File must be less than 5MB.";
        } else {
          // Upload 


          if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
            // Insert record
            
            $query = "INSERT INTO resume( User_name,resume,location) VALUES('" . $User_name . "','" . $name . "','" . $target_file . "')  ;";

            mysqli_query($con, $query);
            echo "Upload successfully.";
          }
        }
      } else {
        echo "Invalid file extension.";
      }
    }
  }
  ?>
</head>

<body>
  <script src="../assets/js/app.js"></script>
  <h2 class="title">Upload Your Resume</h2>
  <div>



    <form method="post" action="" enctype='multipart/form-data'>

      <input type='FILE' name='file' />
      <input type='submit' value='Upload' name='but_upload' class="btn solid" />
    </form>
  </div>
  <div type="submit" class="fixed-btn" class="btn">
    <p><a style="text-decoration : none " href='View.php'>View Resume</a></p>
  </div>



</body>

</html>