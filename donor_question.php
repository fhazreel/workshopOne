<?php include ('donor_question_query.php') ?>

<!DOCTYPE html>
<html>
<head>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<title>Question of Donor Registration </title>

</head>
<body class = "default" topmargin= "15">
		
	    <table bgcolor=white border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="bigframe">
		  <tr>
			<td width="100%" valign=top>
			<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
			  <tr>
					<!--- Isi --->
					<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">    
					  <tr>
						<td>&nbsp;</td>
						
					  </tr>
					  <tr bgColor="#000000" style="font-family: sans-serif; color: white " >
						<td width="100%">&nbsp;<b>Donor Details || Questionnaire</b></td>
					  </tr>
					  <tr>
						<td width="100%">&nbsp;</td>
					  </tr>
					  <form method="post" action="donor_question.php">
						<?php include('errors.php'); ?>
						
					  <tr>
						<td width="100%">
						<h3><center>Please fill in the form below and answer if you have any data to fill in</center></h3>
							<table width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:14px">
								<tr>
									<td align="right" width="15%">Donor Name:</td>
									<td align="left" width="12%">
									
										
									<input type="text" style="text-transform: uppercase;" name="donorName" id="donorName" size="30" disabled value="<?php echo $row2['donorName']; ?>">
									
									<input type="hidden" name="donorID" id="donorID" value="<?php  echo $row2['donorID']; ?>">
									<input type="hidden" name="email" id="email" value="<?php  echo $row2['email']; ?>">
									
									</td> 
								</tr><tr><tr><tr><tr><tr><tr><tr><tr>
								<?php
								$donorName = "";
								$count = 0;
								$sql = "SELECT * FROM question ORDER BY no ASC";
								$result = $db->query($sql);
								if($result -> num_rows > 0){
									while($row = $result -> fetch_assoc()){
										$count++;
										?>
										<tr>
											<td align="right" width="15%" name=""><?php echo $row['questions']; ?></td>
											<td align="left" width="12%">
												<input type="radio" required name="answer<?php echo $count ?>" value='YES'>YES
												<input type="radio" required  name="answer<?php echo $count ?>" value='NO'>NO
												<input type="hidden" name="questions<?php echo $count ?>" value='<?php echo $row["questions"] ?>'>
												<input type="hidden" name="questionID<?php echo $count ?>" value='<?php echo $row["question_ID"] ?>'>
											</td>
										</tr>
										<?php
									}
								}
								?>
								 
								<input type="hidden" name="count" value="<?php echo $count ?>">
							</table>
						</td>
					  </tr>
					  <tr>
						<td align="right" width="100%" >
							<button type="submit" name="submitBtn">Submit</button>
							<input type="reset" name="resetBtn" value="Reset">
						</td>
					  </tr>
					  </form>
					  <tr>
						<td width="100%">&nbsp;</td>
					  </tr>
					  <tr bgColor="#000000">
						<td width="100%">&nbsp;</td>
					  </tr>
					  <tr>
						<td width="100%">&nbsp;</td>
					  </tr>
					  
					</table>
		<!--- Isi Tamat --->
				</td>
				<td width=1%></td>
			   </tr>
			</table>
			</td>
		  </tr>
      <tr>
        <td width="100%">&nbsp;</td>
      </tr>
    </table>
<div id='msg'></div>
<div id='errmsg'></div>
</script>
</body>
</html>