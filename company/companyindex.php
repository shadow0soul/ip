<?php
	include("../includes/config.php");
 	include("../includes/classes/account.php");
	include("../includes/classes/constants.php");
	$account = new Account($con);
	include("../includes/handlers/companysign_up_handler.php");
  include("../includes/handlers/companysign_in_handler.php");
  
	function getInputvalue($name){
		if(isset($_POST[$name])){
			echo $_POST[$name];
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../assets/css/style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form" method = "post">
            <h2 class="title">Sign in</h2>
            <p>
              <?php
							  echo $account->getError(Constants::$loginFailed);
						  ?>
              <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name = "loginUsername" value = "<?php getInputValue('Username') ?>"/>
              </div>
            
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name = "loginPassword" value = "<?php getInputValue('password') ?>"/>
              </div>
            </p>
            <input type="submit" value="Login" class="btn solid" name = "Signinbutton"/>
            
          </form>
          <form action="#" class="sign-up-form" method = "post">
            <h2 class="title">Sign up</h2>
            <p>
              <?php
                echo $account->getError(Constants::$usernameLength);
              ?>
              <?php
                echo $account->getError(Constants::$usernameExists);
              ?>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" name = "Username" value = "<?php getInputValue('Username') ?>"/>
              </div>
            <p>
              <?php
                echo $account->getError(Constants::$emailCheck);
              ?>
              <?php
               echo $account->getError(Constants::$emailExists);
              ?>
              <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="Email" name = "email" value = "<?php getInputValue('email') ?>"/>
              </div>
              
              <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="type" name = "type" value = "<?php getInputValue('type') ?>" />
            </div>
            <p>
              <?php
                echo $account->getError(Constants::$passwordsSpecial);
              ?>
              <?php
                echo $account->getError(Constants::$passwordsLength);
              ?>
              
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name  ="Password" value = "<?php getInputValue('Password') ?>"/>
              </div>
            </p>
              <input type="submit" class="btn" value="Sign up" name = "SignupButton" />
            
            
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Come and Register now!!Make your job easy by hiring the best Candidates.
            </p>
            <button class="btn transparent" id="sign-up-btn" >
              Sign up
            </button>
          </div>
          <img src="../assets/img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Post your job vacancies now !! 
            </p>
            <button class="btn transparent" id="sign-in-btn" >
              Sign in
            </button>
          </div>
          <img src="../assets/img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="../assets/js/app.js"></script>
  </body>
</html>
