<?php

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'eblood');

	//check redundant data
			if(isset($_POST['question_ID'])) {
			$question_ID = $_POST['question_ID'];

			$check = mysqli_query($db,"SELECT * FROM question WHERE question_ID='$question_ID'");
			$checkrows = mysqli_num_rows($check);
			
			//check if there is already an entry for that id
			if($checkrows > 0 ) { 
				echo '<script language="javascript">';
				echo 'alert("The question ID has already exist!");';
				echo 'window.location.href="add_question.php";';
				echo'</script>';
			}  else {
					if(isset($_POST['new']) && $_POST['new']==1)
					{		
						$question_ID = $_REQUEST['question_ID'];
						$questions	 = $_REQUEST['questions'];
					
						$ins_query=$db->prepare("INSERT into question
						(question_ID, questions) 
						VALUES (?,?)");
						
						$ins_query->bind_param("ss", $question_ID, $questions);
						$ins_query->execute();
						
						echo ("<script LANGUAGE='Javascript'> 
						window.alert('Data have been successfully added');
						window.location.href='question_form.php';
						</script>");
						//mysqli_query($db,$ins_query) or die(mysqli_error($db));
						//$status = "New Record Inserted Successfully.</br></br><a href='index_admin.php'>View Inserted Record</a>";
		}}}
	
	?>
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<title>Insert new Question</title>
	<!-- <link rel="stylesheet" href="css/style.css" /> -->
	</head>
	<body>
	<div class="form">
	 <table bgcolor=white border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="bigframe">
		  <tr>
			<td width="100%" valign=top>
			<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
			  <tr>
					<!--- Isi --->
					<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">    
					  <tr>
						<td>&nbsp;</td>
							<tr bgColor="#000000" style="font-family: sans-serif; color: white " >
						<td width="100%">&nbsp;<b>Insert New Record || Question Data</b></td>
					  </tr>
					  <tr>
						<td width="100%">&nbsp;</td>
					  </tr>
					  <tr>
						<td width="100%">
							<table width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:14px">
								<br><br>
								 <div>
								<form name="form" method="post" action=""> 
								<input type="hidden" name="new" value="1" />
								<tr>
									<td align="right" width="15%">Question ID : </td>
									<td align="left" width="25%">
										<input placeholder="question_ID_*insert the latest number*" type="text" required name="question_ID" id="question_ID"  size="33">
									</td>
								</tr>
									<td align="right" width="15%">Question : </td>
									<td align="left" width="25%">
										<textarea name="questions" required id="questions" rows="5" cols="50"></textarea>
									</td>
								</tr>
								</table>
									</td>
					  </tr>
					  <tr>
						<td align="right" width="100%" ><br><br>
							<input name="submit" type="submit" value="Submit" />
							<input type="button" name="backBtn" value="Back to Main Page" onClick="window.location.href='index_admin.php'">
							<input type="button" name="resetBtn" value="Reset" onClick="window.location.href=self.location"> 
						</td>
					</td>
					</form>
					<p style="color:#FF0000;"><?php //echo $status; ?></p>
					
					<tr>
						<td>&nbsp;</td>
							<tr bgColor="#000000" style="font-family: sans-serif; color: white " >
						<td width="100%">&nbsp;
						</td>
					  </tr>
	</div>
	</div>
	</body>
	</html>
