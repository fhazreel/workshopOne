<?php
		
	session_start();
	
	// variable declaration
	$username 	= "";
	$email    	= "";
	$errors 	= array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'eblood');


			//check redundant data
			if(isset($_POST['email'])) {
			$email = $_POST['email'];

			$check = mysqli_query($db,"SELECT * FROM login WHERE email='$email'");
			$checkrows = mysqli_num_rows($check);
			
			//check if there is already an entry for that username
			if($checkrows > 0 ) { 
				echo '<script language="javascript">';
				echo 'alert("The email has already exist!");';
				echo 'window.location.href="login.php";';
				echo'</script>';
			} else {
				
				// REGISTER USER
			if (isset($_POST['btn_reg_user'])) {
		
				// receive all input values from the form
				$userLevel 	= mysqli_real_escape_string($db, $_POST['userLevel']);
				$username 	= mysqli_real_escape_string($db, $_POST['username']);
				$email 		= mysqli_real_escape_string($db, $_POST['email']);
				$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
				$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

				// form validation: ensure that the form is correctly filled
				if (empty($username)) { array_push($errors, "Username is required"); }
				if (empty($email)) { array_push($errors, "Email is required"); }
				if (empty($password_1)) { array_push($errors, "Password is required"); }

				   if ($password_1 != $password_2) {
					array_push($errors, "The two passwords do not match");  
				 }

					// register user if there are no errors in the form
					if (count($errors) == 0) {
							$password = md5($password_1);//encrypt the password before saving in the database
							$query = $db->prepare("INSERT INTO login (userLevel, username, email, password) 
									  VALUES(?,?,?,?)");
							$query->bind_param("ssss", $userLevel, $username, $email, $password);
							$query->execute();
							//mysqli_query($db, $query);
							
							echo ("<script LANGUAGE='Javascript'> 
							window.alert('Congratulations for signing up! You will directly in the page now');
							window.location.href='donor_register.php?email=$email';
							</script>");
							
							$_SESSION['username'] = $username;
							$_SESSION['success'] = "You are now logged in";
						 }
					}
			}
		} 
		
?>