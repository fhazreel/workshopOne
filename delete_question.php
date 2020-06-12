<?php 
		// connect to database
			$db = mysqli_connect('localhost', 'root', '', 'eblood');
			

			$question_ID = $_REQUEST['question_ID'];
			$query = "DELETE FROM question WHERE question_ID = '$question_ID'"; 
			$result = mysqli_query($db,$query) or die ( mysqli_error($db));

			echo ("<script LANGUAGE='Javascript'> 
			window.alert('Your data has been deleted');
			</script>");
			header("Location: question_form.php"); 
?>