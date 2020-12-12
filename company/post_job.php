<?php?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <m eta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../assets/css/style.css" />
  <title>Post Jobs</title>
</head>

<body>

  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="applyjob.php" class="sign-in-form" method = "post">
          <h2 class="title">Post jobs</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Company Name" name="name" />
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Name of the Job" name="job" />
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Description of job" name="des" />
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Location" name="location" />
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="number" placeholder="No of candidates needed" name="candidate" />
          </div>
          
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="number" placeholder="Salary" name="salary" />
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="email" placeholder="Email" name="email" />
          </div>
          <input type="submit" value="POST JOB " class="btn solid" name=postjob />
        </form>
        <div>
        </div>
      </div>
      
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Post Now!!!!</h3>
            <p>
              Post the job and hire the candidates for it which you want!!
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
  </div>

</body>

</html>