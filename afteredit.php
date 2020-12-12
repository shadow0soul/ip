<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <m eta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../assets/css/style.css" />
  <title>Company Edit</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="edit.php" class="sign-in-form" method="post">
          <h2 class="title">Edit</h2>
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
            <input type="email" placeholder="Mail" name="mail" />
          </div>

          <button type="submit" class="btn solid" name="Submit">Edit</button>


          <div>
          </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            
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