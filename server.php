<?php 
	session_start();
	
	// variable declaration
	$username 	= "";
	$email    	= "";
	$errors 	= array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'eblood');
	


	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$userLevel 	= mysqli_real_escape_string($db, $_POST['userLevel']);
		$username 	= mysqli_real_escape_string($db, $_POST['username']);
		$password 	= mysqli_real_escape_string($db, $_POST['password']);
		
		if (empty($userLevel)) {
			array_push($errors, "User type is required");
		}
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
		
			if (count($errors) == 0) {
			$userLevel 	= ($userLevel);
			$username 	= ($username);
			$password	= ($password);
			$query 		= "SELECT * FROM login WHERE userLevel='$userLevel' AND username='$username' AND password='$password'";
			$results 	= mysqli_query($db, $query);
			
			
			
			if (mysqli_num_rows($results) == 1) { 
	
				// check if user is admin or user
				$userc = mysqli_fetch_assoc($results);
				
				if ($userc['userLevel'] == 'Admin') {
				$_SESSION['username'] = $username;
				
				echo ("<script LANGUAGE='Javascript'> 
				window.alert('You are successfully login $username ');
				window.location.href='index_admin.php'
				</script>");
			
			}
				if ($userc['userLevel'] == 'Staff'){
				$_SESSION['username'] = $username;

				echo ("<script LANGUAGE='Javascript'> 
				window.alert('You are successfully login $username ');
				window.location.href='index_staff.php'
				</script>");
				
			}
			 if ($userc['userLevel'] == 'Donor'){
				$_SESSION['username'] = $username;
				
				echo ("<script LANGUAGE='Javascript'> 
				window.alert('You are successfully login $username ');
				window.location.href='index_user.php'
				</script>");
				
			}
			else{
				array_push($errors, "Wrong username/password combination");
			}
			echo'<script type="text/javascript">alert("You enter wrong information. Please try again")</script>';
		}
	}}


?>

