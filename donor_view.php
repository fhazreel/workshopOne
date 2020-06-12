<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
	
	<title>Donor View Data </title>

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
						<td width="100%">&nbsp;<b>Donor Details || Data View</b></td>
					  </tr>
					  
					 
					  <tr>
						<td width="100%">&nbsp;</td>
					  </tr>
					  
					  <form method="post" action="donor_view.php">
					  <input type="hidden" name="requestStatus" id="requestStatus" value="<?php echo $row['requestStatus'];?>">
					<table>
						<h3><center>Welcome to the History of Donor Details</center></h3>
					  <table>
						<td>
								<br><br>
							<table width="100%" bgcolor="#E6E6E6" border="1" bordercolor="#000000" cellpadding="5" cellspacing="0" style="font-family:Arial, Helvetica, sans-serif; font-size:14px">
								 <tr height="25" bgcolor="#333333"  style="font-family: sans-serif; color: white; text-align: center">
									<th>Donor Name</th>
									<th>DOB</th>
									<th>Age</th>
									<th>Address</th>
									<th>City</th>
									<th>Poscode </th>
									<th>State</th>
									<th>Nation</th>
									<th>Gender </th>
									<th>Status</th>
									<th>Contact No</th>
									<th>Blood </th>
									<th>Request Status </th>
									<th>Update Data </th>
								</tr>							
					  
								<?php
								 
								session_start();
								
								// if(isset($_POST['searchBtn']))
								// {
									// id to search
									//$email = $_POST['email'];
									
									
								
									$username = $_SESSION['username'];
									//die($username);
									$query = "SELECT d.*, dr.requestStatus, l.username FROM donor d INNER JOIN donor_report dr ON d.email = dr.email INNER JOIN login l ON l.email = dr.email where l.username = '$username'";
									
									 // connect to mysql
									$connect = mysqli_connect("localhost", "root", "","eblood");

									//$query = "SELECT d.*,dr.requestStatus FROM donor d INNER JOIN donor_report dr ON d.email = dr.email where d.email = '$email'";
									//$query = "SELECT * FROM donor WHERE email= '$email'";
									$result = mysqli_query($connect, $query);
									
									?>
									<center><?php echo 'Congratulations if you are APPROVED on being the donor list! For those who are NOT ACCEPTED, you can try again next time.'; ?>
									<br><br> 
									
									<?php
									if(mysqli_num_rows($result) > 0)
									{while ($row = mysqli_fetch_array($result))
									{ 
									?>
								 
								 <tr>
									<td style="text-transform: uppercase;"> <?php echo $row['donorName']; ?> </td>
									<td style="text-transform: uppercase;"> <?php echo $row['donorDOB'];  ?> </td>
									<td style="text-transform: uppercase;"> <?php echo $row['donorAge'];  ?> </td>
									<td style="text-transform: uppercase;"> <?php echo $row['donorAddress'];  ?> </td>
									<td style="text-transform: uppercase;"> <?php echo $row['donorCity'];  ?> </td>
									<td style="text-transform: uppercase;"> <?php echo $row['donorPoscode'];  ?> </td>
									<td style="text-transform: uppercase;"> <?php echo $row['donorState'];  ?> </td>
									<td style="text-transform: uppercase;"> <?php echo $row['donorNation'];  ?> </td>
									<td style="text-transform: uppercase;"> <?php echo $row['donorGender'];  ?> </td>
									<td style="text-transform: uppercase;"> <?php echo $row['donorStatus'] ; ?> </td>
									<td style="text-transform: uppercase;"> <?php echo $row['donorContact'];  ?> </td>
									<td style="text-transform: uppercase;"> <?php echo $row['typeBlood'];  ?> </td>
									<td style="text-transform: uppercase;"> <?php echo $row['requestStatus'];?> </td>
								
									
									<td align="center"><a href="update_donor.php?email=<?php echo $row["email"]; ?>">Edit</a></td>
								</td>	
								</tr>	
								<?php }} ?>									
							<tbody id='result'>

							</tbody>	
							</table>
							<br><br>							
							  <tr>
							<td align="right" width="100%" >
							<input type="reset" name="resetBtn" value="Reset" onClick="window.location.href=self.location">
							<input type="button" name="backBtn" value="Back to Main Page" onClick="window.location.href='index_user.php'">
									</td>	

									
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