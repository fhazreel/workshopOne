<?php 
	session_start();
	
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'eblood');

	//$donorID=$_REQUEST['donorID'];
	$email	= $_REQUEST['email'];
	$query 	= "SELECT * from donor where email='".$email."'"; 
	$result = mysqli_query($db, $query) or die ( mysqli_error());
	$row	= mysqli_fetch_assoc($result);
		

		

?>

