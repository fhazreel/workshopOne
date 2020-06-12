<?php 
	session_start();
	
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'eblood');
	
	$errors 		= array();
	

	// REGISTER DONOR
	if (isset($_POST['submitBtn'])) {
		
		// receive all input values from the form
		$donorID 		= $_REQUEST['donorID'];
		$requestStatus	= $_REQUEST['requestStatus'];
		
		// register donor if there are no errors in the form
		if (count($errors) == 0) {
			$query = "UPDATE donor_report SET
			requestStatus ='".$requestStatus."' 
			WHERE donorID='".$donorID."'";
			mysqli_query($db, $query) or die(mysqli_error($db));
			
			// $status = "Record Updated Successfully. </br></br><a href='index_staff.php'>View Updated Record</a>";
			// echo '<p style="color:#FF0000;">'.$status.'</p>';
			
			//die($query);
		
				
			echo ("<script LANGUAGE='Javascript'> 
			window.alert('Data have been successfully updated');
			window.location.href='nurse_approval.php?donorID=$donorID'
			</script>");

	}
		}
		
		
?>
