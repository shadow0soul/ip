<?php
//we use whatever names are given in html as variable for php
function cleanFormPassword($inputText){
	$inputText =strip_tags($inputText);
	return $inputText;	
}
function cleanFormUsername($inputText){
	$inputText =strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	return $inputText;	
}
function cleanFormString($inputText){
	$inputText =strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	$inputText = ucfirst(strtolower($inputText));
	return $inputText;

}


if(isset($_POST['SignupButton'])) {
	//register button was pressed
	$type = cleanFormString($_POST['type']);
	
	$User_name = cleanFormUsername($_POST['Username']);
	 
	$email = cleanFormString($_POST['email']);

	$Password = cleanFormPassword($_POST['Password']);
	

	$wasSuccessfull = $account->register($User_name,$email,$type,$Password);
	
	if($wasSuccessfull == true){
		$_SESSION['userLoggedIn'] = $User_name;
		header("location:../recruiter/home.php");//ider next home page daalna baaki hai jo bhi user ka hoga
	}

}
?>