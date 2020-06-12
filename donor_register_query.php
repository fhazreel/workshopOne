<?php 
	session_start();
	
	// variable declaration
	
	//$donorID 		= "";
	$email			= "";
	$donorName    	= "";
	$donorDOB    	= "";
	$donorAge    	= "";
	$donorAddress   = "";
	$donorCity    	= "";
	$donorPoscode   = "";
	$donorState		= "";
	$donorNation    = "";
	$donorGender    = "";
	$donorStatus    = "";
	$donorContact   = "";
	$typeBlood    	= "";
	$errors 		= array(); 
	$_SESSION['success'] = "";
	
	
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'eblood');
	
	// REGISTER DONOR
	if (isset($_POST['submitBtn'])) {
		
		// receive all input values from the form
		$email 			= mysqli_real_escape_string($db, $_POST['email']);
		$donorID 		= mysqli_real_escape_string($db, $_POST['donorID']);
		$donorName 		= mysqli_real_escape_string($db, $_POST['donorName']);
		$donorDOB 		= mysqli_real_escape_string($db, $_POST['donorDOB']);
		$donorAge 		= mysqli_real_escape_string($db, $_POST['donorAge']);
		$donorAddress 	= mysqli_real_escape_string($db, $_POST['donorAddress']);
		$donorCity 		= mysqli_real_escape_string($db, $_POST['donorCity']);
		$donorPoscode 	= mysqli_real_escape_string($db, $_POST['donorPoscode']);
		$donorState 	= mysqli_real_escape_string($db, $_POST['donorState']);
		$donorNation 	= mysqli_real_escape_string($db, $_POST['donorNation']);
		$donorGender 	= mysqli_real_escape_string($db, $_POST['donorGender']);
		$donorStatus 	= mysqli_real_escape_string($db, $_POST['donorStatus']);
		$donorContact 	= mysqli_real_escape_string($db, $_POST['donorContact']);
		$typeBlood 		= mysqli_real_escape_string($db, $_POST['typeBlood']);
		
		//die($donorID);


		// form validation: ensure that the form is correctly filled
		//if (empty($donorID)) { array_push($errors, "ID is required"); }
		if (empty($email)) { array_push($errors, "email is required"); }
		if (empty($donorName)) { array_push($errors, "Name is required"); }
		if (empty($donorDOB)) { array_push($errors, "DOB is required"); }
		if (empty($donorAge)) { array_push($errors, "Age is required"); }
		if (empty($donorAddress)) { array_push($errors, "Address is required"); }
		if (empty($donorCity)) { array_push($errors, "City is required"); }
		if (empty($donorPoscode)) { array_push($errors, "Poscode is required"); }
		if (empty($donorState)) { array_push($errors, "State is required"); }
		if (empty($donorNation)) { array_push($errors, "Nation is required"); }
		if (empty($donorGender)) { array_push($errors, "Gender is required"); }
		if (empty($donorStatus)) { array_push($errors, "Status is required"); }
		if (empty($donorContact)) { array_push($errors, "Contact is required"); }
		if (empty($typeBlood)) { array_push($errors, "Type of blood is required"); }
		

		// register donor if there are no errors in the form
	if (count($errors) == 0) {
		
			$query = $db->prepare("INSERT INTO donor 
			(email,
			donorName, 
			donorDOB, 
			donorAge, 
			donorAddress,
			donorCity, 
			donorPoscode,
			donorState,
			donorNation, 
			donorGender, 
			donorStatus, 
			donorContact, 
			typeBlood) 
			VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
			
			$query->bind_param("sssssssssssss", $email,$donorName,$donorDOB,$donorAge,$donorAddress,$donorCity,$donorPoscode, 
			$donorState,$donorNation,$donorGender,$donorStatus,$donorContact,$typeBlood);
			
			$query->execute();
			//mysqli_query($db, $query);
			
			//die($query);
			
			echo "<script>window.location.assign('donor_question.php?donorName=".$donorName."&email=".$email."')</script>";	
			echo ("<script LANGUAGE='Javascript'> 
			window.alert('Congratulations your data have been successfully added! Next, you will have to answer a 
			few questions for the next stage.');
			</script>");
	}

	
		}
		
			$email = $_GET['email'];						
			$stmt = "SELECT * FROM login WHERE email = '$email'";
			$query=mysqli_query($db,$stmt);
			 
			//die($query);
			$row2=mysqli_fetch_assoc($query);
		
		
		

?>

