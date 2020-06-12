<?php include('update_donor_query.php') ?> 
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
	
	<title>Donor Update Details</title>

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
						<td width="100%">&nbsp;<b>Donor Details || Update Data</b></td>
					  </tr>
					  <tr>
						<td width="100%">&nbsp;</td>
					  </tr>
					  <?php
							$status = "";
							if(isset($_POST['new']) && $_POST['new']==1)
							{
							//$email			= $_REQUEST['email'];
							$donorAddress	= $_REQUEST['donorAddress'];
							$donorCity 		= $_REQUEST['donorCity'];
							$donorPoscode 	= $_REQUEST['donorPoscode'];
							$donorState 	= $_REQUEST['donorState'];
							$donorStatus 	= $_REQUEST['donorStatus'];
							$donorContact 	= $_REQUEST['donorContact'];
						
							
							$update="update donor set  
							donorAddress='".$donorAddress."', 
							donorCity='".$donorCity."', 
							donorPoscode='".$donorPoscode."',
							donorState='".$donorState."', 
							donorStatus='".$donorStatus."', 
							donorContact='".$donorContact."'
							where email='".$email."'";
							
							mysqli_query($db, $update) or die(mysqli_error($db));
							
							$status = "Record Updated Successfully. </br></br><a href='donor_view.php'>View Updated Record</a>";
							echo '<p style="color:#FF0000;">'.$status.'</p>';
							}else {
							?>
					  
					  <form method="post" action="update_donor.php">
					  <input type="hidden" name="new" value="1" 
						
					  <tr>
						<td width="100%">
						 <h3><center>Please update your data if necessary</center></h3><br>
							<table width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:14px">
								<tr>
									<td align="right" width="15%">Name : </td>
									<td align="left" width="25%">
										<input style="text-transform: uppercase;" type="text" disabled name="donorName" id="donorName" size="33" value="<?php echo $row['donorName'];?>">
										<input type="hidden" name="email" id="email" value="<?php echo $row['email'];?>">
									</td>
									<td align="right" width="15%">Donor ID : </td>
									<td align="left" width="25%"> 
										<input type="text" name="donorID" id="donorID" disabled size="10" value="<?php echo $row['donorID'];?>">
									</td>
								</tr>
								<tr>
									<td align="right" width="15%">Date of Birth : </td>
									<td align="left" width="25%">
										<input name="donorDOB"  size="10" id="donorDOB" disabled value="<?php echo $row['donorDOB'];?>">
									</td>
								</tr>
								<tr>
									<td align="right" width="15%">Age : </td>
									<td align="left" width="25%">
										<input name="donorAge"  type="number" size="8" id="donorAge" disabled value="<?php echo $row['donorAge'];?>">
									</td>
								</tr>
								</tr>
								<tr>
									<td align="right" width="15%">Address : </td>
									<td align="left" width="25%">
										<input style="text-transform: uppercase;" required type="text" name="donorAddress" id="donorAddress" size="40" value="<?php echo $row['donorAddress'];?>">
									</td>
								</tr>
								<tr>
									<td align="right" width="15%">City : </td>
									<td align="left" width="25%">
										<input style="text-transform: uppercase;" required type="text" name="donorCity" id="donorCity" size="15" value="<?php echo $row['donorCity'];?>">
									</td>
								</tr>
								<tr>
									<td align="right" width="15%">Poscode :</td>
									<td align="left" width="25%">
										<input style="text-transform: uppercase;" required type="number" name="donorPoscode" id="donorPoscode" size="10" value="<?php echo $row['donorPoscode'];?>">
									</td>
								</tr>
								<tr>
									<td align="right" width="15%">State :</td>
									<td align="left" width="25%">
										<select name="donorState" id="donorState" required value="<?php echo $row['donorState'];?>">
											<option id="perlis">PERLIS</option>
											<option id="kedah">KEDAH</option>
											<option id="pinang">P. PINANG</option>
											<option id="perak">PERAK</option>
											<option id="selangor">SELANGOR</option>
											<option id="pahang">PAHANG</option>
											<option id="kl">W.P KUALA LUMPUR</option>
											<option id="nsembilan">N. SEMBILAN</option>
											<option id="melaka">MELAKA</option>
											<option id="johor">JOHOR</option>
											<option id="kelantan">KELANTAN</option>
											<option id="terengganu">TERENGGANU</option>
											<option id="sabah">SABAH</option>
											<option id="sarawak">SARAWAK</option>
										</select>
									</td>
								</tr>
								<tr>
									<td align="right" width="15%">Nation : </td>
									<td align="left" width="25%">
										<select name="donorNation" id="donorNation" required value="<?php echo $row['donorNation'];?>">
											<option id="malay">MALAY</option>
											<option id="chinese">CHINESE</option>
											<option id="indian">INDIAN</option>
											<option id="iban">IBAN</option>
											<option id="murut">MURUT</option>
											<option id="kadazan">KADAZAN</option>
											<option id="bidayuh">BIDAYUH</option>
											<option id="bajau">BAJAU</option>
											<option id="melanau">MELANAU</option>
										</select>
									</td>	
								</tr>
								<tr>
									<td align="right" width="15%">Gender : </td>
									<td align="left" width="25%">
										<input type="text" name="donorGender" disabled id="donorGender" size="11" value="<?php echo $row['donorGender'];?>">
									</td>	
								</tr>
								<tr>
									<td align="right" width="15%">Status : </td>
									<td align="left" width="25%">
										<select name="donorStatus" id="donorStatus" required value="<?php echo $row['donorStatus'];?>">
											<option id="single">SINGLE</option>
											<option id="married">MARRIED</option>
											<option id="else">WIDOWED/DIVORCED</option>
										</select>
									</td>
								</tr>
								<tr>
									<td align="right" width="15%">Contact No : </td>
									<td align="left" width="25%">
										<input name="donorContact" type="number" required id="donorContact" value="<?php echo $row['donorContact'];?>">
									</td>
								</tr>
								<tr>
									<td align="right" width="15%">Type of Blood : </td>
									<td align="left" width="25%">
										<input type="text" name="typeBlood" disabled id="typeBlood" size="10" value="<?php echo $row['typeBlood'];?>">
									</td>
								</tr>
					
							</table>
						</td>
					  </tr>
					  <tr>
						<td align="right" width="100%" >
							<button type="submit" name="submitBtn">Submit</button>
							<input type="button" name="backBtn" value="Back" onClick="window.location.href='donor_view.php'">
							<input type="button" name="resetBtn" value="Reset" onClick="window.location.href=self.location">
						</td> <?php } ?>
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
					  <tr>
					  
						<td width="100%">
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


<script>
  $( function() { 
		
    $( "#donorDOB" ).datepicker({
//dateFormat: 'yy-mm-dd'
		changeYear: true,
        changeMonth: true,
        dateFormat: "yy-m-dd",
        yearRange: "-100:+20",
        
});
	
  } );
</script>


