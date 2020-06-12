<?php include('donor_report_query.php') 
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
	
	<title>Approval of Donor Registration </title>

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
						<td width="100%">&nbsp;<b>Donor Details || Approval from Nurse</b></td>
					  </tr>
					  <tr>
						<td width="100%">&nbsp;</td>
					  </tr>
					  <form method="post" action="donor_report.php">
					  <tr>
					  
						<td width="100%">
						<h3><center>This form is nurse's required approval to proceed</center></h3>
							<table width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:14px">
								
								<!-- call data out -->
								<?php
								$donorID 		= $_GET['donorID'];
								$sql 			= "SELECT * FROM donor WHERE donorID = '$donorID';";
								$result 		= $db->query($sql);
								if($result -> num_rows > 0){
									while($row = $result -> fetch_assoc()){
										?>	
								<input type="hidden" name="donorID" id="donorID" value="<?php echo $_GET['donorID'] ?>">
								
								<tr>
									<td align="right" width="15%">Name : </td>
									<td align="left" width="25%">
										<input style="text-transform: uppercase;" disabled type="text" name="donorName" id="donorName" size="33" value="<?php echo $row['donorName'] ?>">
										<input type="hidden" name="donorName" id="donorName" value="<?php echo $row['donorName'] ?>">
									</td>
									<td align="right" width="15%">Age : </td>
									<td align="left" width="25%">
										<input name="donorAge"  disabled type="number" size="8" id="donorAge" value="<?php echo $row ['donorAge'] ?>">
										<input type="hidden" name="donorAge" id="donorAge" value="<?php echo $row ['donorAge'] ?>">
									</td>	
								</tr>
								<tr>
									<td align="right" width="15%">Email : </td>
									<td align="left" width="25%">
										<input name="email" disabled size="33" id="email" value="<?php echo $row ['email'] ?>">
										<input type="hidden" name="email" id="email" value="<?php echo $row ['email'] ?>">
									</td>
								</tr>
								<tr>
									<td align="right" width="15%">Date of Birth : </td>
									<td align="left" width="25%">
										<input name="donorDOB" disabled size="10" id="donorDOB" value="<?php echo $row ['donorDOB'] ?>">
										<input type="hidden" name="donorDOB" id="donorDOB" value="<?php echo $row ['donorDOB'] ?>">
									</td>
								</tr>
								<tr>	
								</tr>
								<tr>
									<td align="right" width="15%">Nation : </td>
									<td align="left" width="25%">
										<input name="donorNation" disabled size="10" id="donorNation" value="<?php echo $row ['donorNation']?>">
										<input type="hidden" name="donorNation" id="donorNation" value="<?php echo $row ['donorNation']?>">
								</tr>
								<tr>
									<td align="right" width="15%">Gender : </td>
									<td align="left" width="25%">
										<input name="donorGender" disabled size="11" id="donorGender" value="<?php  echo $row['donorGender'] ?>">
										<input type="hidden" name="donorGender" id="donorGender" value="<?php  echo $row['donorGender'] ?>">
									</td>	
								</tr>
								<tr>
									<td align="right" width="15%">Status : </td>
									<td align="left" width="25%">
										<input name="donorStatus" disabled id="donorStatus" value="<?php echo $row ['donorStatus'] ?>">			
										<input type="hidden" name="donorStatus" id="donorStatus" value="<?php echo $row ['donorStatus'] ?>">
									</td>
								</tr>
								<tr>
									<td align="right" width="15%">Contact No : </td>
									<td align="left" width="25%">
										<input name="donorContact" disabled id="donorContact" value="<?php echo $row ['donorContact'] ?>">
										<input type="hidden" name="donorContact" id="donorContact" value="<?php echo $row ['donorContact'] ?>">
									</td>
								</tr>
								<tr>
									<td align="right" width="15%">Type of Blood : </td>
									<td align="left" width="25%">
										<input name="typeBlood" disabled id="typeBlood" value="<?php echo $row['typeBlood'] ?>">
										<input type="hidden" name="typeBlood" id="typeBlood" value="<?php echo $row['typeBlood'] ?>">
										<input type="hidden" name="requestStatus" id="requestStatus" value="PENDING">
									</td>
								</tr> <?php
									}
								}
								?>
								<table width="100%" bgcolor="#E6E6E6" border="1" bordercolor="#000000" cellpadding="5" cellspacing="0" style="font-family:Arial, Helvetica, sans-serif; font-size:14px"> 
										<thead><br>
											<tr height="25" bgcolor="#333333"  style="font-family: sans-serif; color: white; text-align: center">
												<th><strong>No</strong></th>
												<th><strong>Questions</strong></th>
												<th><strong>Answers</strong></th>
											</tr>
										</thead>
									<tbody>

											<?php
											$count=1;
											$donorID = $_GET['donorID'];
											$sel_query="Select * from donor_question WHERE donorID = '$donorID';";
											$result = mysqli_query($db,$sel_query);
											while($row = mysqli_fetch_assoc($result)) { ?>
													<tr>
													<td align="center"><?php echo $count; ?></td>
													<input type="hidden" name="questions" id="questions" value="<?php echo $row["questions"]; ?>">
													<input type="hidden" name="answer" id="answer" value="<?php echo $row["answer"];  ?>">
													<td align="center"><?php echo $row["questions"]; ?></td>
													<td align="center"><?php echo $row["answer"]; ?></td>
												
											</tr>
											<?php $count++; } ?>
											</tbody>
											</table>
											<td width=1%></td>
									  <tr>
										<td width="100%">&nbsp;</td>
									  </tr>
								<br /><br />					
							</table>
						</td>
					  </tr>
							
						</td>
					  </tr>
					  <tr>
						<td align="right" width="100%" >
							<button type="submit" name="submitBtn">I am confirm to submit</button>
						</td>
					  </tr>
					  </table>
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