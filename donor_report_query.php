<?php 
	
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'eblood');
	
	$donorID 		= "";
	$email	 		= "";
	$donorName 		= "";
	$donorDOB 		= "";
	$donorAge 		= "";
	$donorNation 	= "";
	$donorGender 	= "";
	$donorStatus 	= "";
	$donorContact 	= "";
	$typeBlood 		= "";
	$question_ID 	= "";
	$questions 		= "";
	$answer 		= "";
	$requestStatus	= "";
	$errors 		= array(); 
	

	// REGISTER DONOR
	if (isset($_POST['submitBtn'])) {
		
		// receive all input values from the form
		$donorID 		= mysqli_real_escape_string($db, $_POST['donorID']);
		$email	 		= mysqli_real_escape_string($db, $_POST['email']);
		$donorName 		= mysqli_real_escape_string($db, $_POST['donorName']);
		$donorAge 		= mysqli_real_escape_string($db, $_POST['donorAge']);
		$donorDOB 		= mysqli_real_escape_string($db, $_POST['donorDOB']);
		$donorNation 	= mysqli_real_escape_string($db, $_POST['donorNation']);
		$donorGender 	= mysqli_real_escape_string($db, $_POST['donorGender']);
		$donorStatus 	= mysqli_real_escape_string($db, $_POST['donorStatus']);
		$donorContact 	= mysqli_real_escape_string($db, $_POST['donorContact']);
		$typeBlood 		= mysqli_real_escape_string($db, $_POST['typeBlood']);
		//$question_ID 	= mysqli_real_escape_string($db, $_POST['question_ID']);
		//$questions 		= mysqli_real_escape_string($db, $_POST['questions']);
		//$answer 		= mysqli_real_escape_string($db, $_POST['answer']);
		$requestStatus	= mysqli_real_escape_string($db, $_POST['requestStatus']);
		
		// register donor if there are no errors in the form
		if (count($errors) == 0) {
			$query = $db->prepare("INSERT INTO donor_report 
			(donorID,
			email,
			donorName,
			donorAge,
			donorDOB, 
			donorNation, 
			donorGender, 
			donorStatus, 
			donorContact, 
			typeBlood,
			requestStatus) 
			VALUES(?,?,?,?,?,?,?,?,?,?,?)");
			$query->bind_param("sssssssssss", $donorID, $email, $donorName, $donorAge, $donorDOB, $donorNation, $donorGender,
			$donorStatus, $donorContact, $typeBlood, $requestStatus);
			
			$query->execute();
			//mysqli_query($db, $query);
			
			echo ("<script LANGUAGE='Javascript'> 
			window.alert('Congratulations!! Please login back to check the request application after 3 days of working days');
			window.location.href='login.php'
			</script>");

	}
		}
		
	$donorID= $_REQUEST['donorID'];
	$query 	= "SELECT * from donor_report where donorID='".$donorID."'"; 
	$result = mysqli_query($db, $query) or die ( mysqli_error());
	$row	= mysqli_fetch_assoc($result);
		
?>
