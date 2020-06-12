<?php 

		session_start();
		
		// connect to database
		$db = mysqli_connect('localhost', 'root', '', 'eblood');
		
		$donorName				= "";
		$donorID 				= "";
		$email 					= "";
		$errors 				= array(); 
		$_SESSION['success']	= "";	
		
			// SAVE YES/NO DATA
			if(isset($_POST["submitBtn"])){
	
			// $donorID = $_POST['donorID'];
			// $email = $_POST['email'];

			//die($donorName);
			$count = $_POST["count"];
			$i = 0;
	
			while($i < $count){
				$i++;
				$donorID = $_POST['donorID'];
				$email = $_POST['email'];
				$answer = $_POST["answer".$i];
				$questionID = $_POST["questionID".$i];
				$questions = $_POST["questions".$i];
				
				// INSERT QUERY
				if (count($errors) == 0) {
				$sqlinsert ="INSERT INTO donor_question
				(donorID,
				email,
				question_ID,
				questions,
				answer) VALUES ('$donorID', '$email', '$questionID', '$questions', '$answer') "; 
				
				//die($donorID);
					
					if($db->query($sqlinsert) === TRUE){			
						echo ("<script LANGUAGE='Javascript'> 
						window.location.href='donor_report.php?donorID=$donorID&email=$email'
						</script>");
						}
						else{
							echo "Error: " . $sqlinsert . "<br>" . $db->error;
						}
					}
				}
			}					
						$donorName = $_GET['donorName'];						
						$stmt = "SELECT * FROM donor WHERE donorName = '$donorName'";
						$query=mysqli_query($db,$stmt);
						//die($query);
						$row2=mysqli_fetch_assoc($query);
	
?>