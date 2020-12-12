<?php
if(isset($_POST['Signinbutton'])) {
	//login button was pressed
	$User_name = $_POST['loginUsername'];

	$password = $_POST['loginPassword'];
	$result = $account->login($User_name,$password);
	if($result == true)
	{
		
		$_SESSION['user2LoggedIn'] = $User_name;
		
		
		if($result == true){
			$_SESSION['userLoggedIn'] = $User_name;
			header("location:../applicant/home.php");//ider next home page daalna baaki hai jo bhi user ka hoga
		}
			
			
	}
}

?>