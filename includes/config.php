<?php
	ob_start();
	session_start();
	$timezone = date_default_timezone_set("asia/kolkata");
	global $con;
	$con = mysqli_connect("localhost","root","","employ");

	if(mysqli_connect_errno()){
	echo "Failed to connect : ".mysqli_connect_errno();
	}
	


?>