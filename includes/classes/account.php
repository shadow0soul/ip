<?php
//include this file also in register.php and call also and access it in handler register
//first test this then complete it
	class Account {
		private $errorArray;
		private $con;
		public function __construct($con){
			$this->errorArray = array();
			$this->con = $con;
		}

		public function login($un,$pw){
			
			$pw = md5($pw);
			$query = mysqli_query($this->con,"SELECT * FROM user where User_name='$un' AND Password ='$pw'");
			if(mysqli_num_rows($query)==1){
				return true;
			}
			else {
				array_push($this->errorArray,Constants::$loginFailed);
				return false;
			}

		}
		public function register($un,$email,$type,$pw){
			//this refers to this instance of class
			//when we call this function it actually calls all the function
			
			$this->validate_username($un);
            $this->validate_email($email);
           
			$this->validate_passwords($pw);
			if(empty($this->errorArray == true)){
				//insert into database
				return $this->insertUserDetails($un,$email,$type,$pw);
			}
			else{
				return false;
			}
		}
		private function insertUserDetails($un,$email,$type,$pw) {
			$encryptedpw = md5($pw);//md5 is method of encryption
			
			
			$result = mysqli_query($this->con, "INSERT INTO user VALUES ('$un','$email','$type','$encryptedpw')");
			return $result;
		}
		public function getError($error){
			if(!in_array($error,$this->errorArray)){
				$error = "";
			}return "<span class = 'errorMEssage'>$error</span>";
		}
		private function validate_username($un) {
			//check length
			//array_push(this->errorArray,arraymsg)
			if(strlen($un) > 25 || strlen($un) < 5){
				array_push($this->errorArray,Constants::$usernameLength);
				return;
			}

			$checkUsername = mysqli_query($this->con,"SELECT User_name from user where User_name='$un'");
			if(mysqli_num_rows($checkUsername)!=0){
				array_push($this->errorArray,Constants::$usernameExists);

			}
		}
		
		private function validate_email($email) {
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				array_push($this->errorArray,Constants::$emailCheck);
				return;
			}
			$checkEmail = mysqli_query($this->con,"SELECT Mail_id from user where Mail_id='$email'");
			if(mysqli_num_rows($checkEmail)!=0){
				array_push($this->errorArray,Constants::$emailExists);

			}

		}
		private function validate_passwords($pw) {
			if(preg_match('/[^A-Za-z0-9]/', $pw )){
				array_push($this->errorArray,Constants::$passwordsSpecial);
				return;

			}
			if(strlen($pw) > 25 || strlen($pw) < 5){
				array_push($this->errorArray,Constants::$passwordsLength);
				return;
			}
		}

	}
?>
