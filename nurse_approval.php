<?php 
	session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<!-- <link rel="stylesheet" href="css/style.css" /> -->
</head>
<body>
<div class="form">
<form method="post" action="nurse_approval.php">
<h2><center>View Donor Blood Approval</center></h2>
<table>
			<tr>
				<td align="right" width="79.8%">Request Status : </td>
				<td align="left" width="25%">
					<select name="requestStatus" id="requestStatus" >
						<option selected value = ''></option>
						<option>PENDING</option>
						<option>APPROVED</option>
						<option>DENIED</option>
					</select>
					<button type="search" name="searchBtn">Search</button>
				</td>	
			</tr>

<table width="100%" bgcolor="#E6E6E6" border="1" bordercolor="#000000" cellpadding="5" cellspacing="0" style="font-family:Arial, Helvetica, sans-serif; font-size:14px">
		<thead><br><br>
			<tr height="25" bgcolor="#333333"  style="font-family: sans-serif; color: white; text-align: center">
				<th><strong>No</strong></th>
				<th><strong>Donor ID</strong></th>
				<th><strong>Donor Name</strong></th>
				<th><strong>Request Status</strong></th>
				<th><strong>View</strong></th>
			</tr>
		</thead>
	<tbody>
	<!--- Aku try eh --->
			<?php
			
			if(isset($_POST['searchBtn'])) {
				$rs = $_POST['requestStatus'];			
			
				if ($rs == 'PENDING' OR 'APPROVED' OR 'DENIED'){

				$count=1;
				
				// connect to mysql
				$db = mysqli_connect("localhost", "root", "","eblood");
				
				$sel_query="Select * FROM donor_report WHERE requestStatus= '$rs '";
				$result = mysqli_query($db,$sel_query);
				
				while($row = mysqli_fetch_assoc($result))
				{
					?>
					<tr>
					<td align="center"><?php echo $count; ?></td>
					<td align="center"><?php echo $row["donorID"]; ?></td>
					<td align="center" style="text-transform: uppercase;"><?php echo $row["donorName"]; ?></td>
					<td align="center"><?php echo $row["requestStatus"]; ?></td>
					
					<td align="center"><a href="view_nurse_approval.php?donorID=<?php echo $row["donorID"]; ?>">View</a></td>

				</tr>
				<?php $count++; } ?>
				</tbody>
				</table><table>
				
				<?php }}
				else {
					$db = mysqli_connect("localhost", "root", "","eblood");
					$coun1=1;
					$ra = "Select * FROM donor_report WHERE requestStatus='PENDING'";
					$kuri = mysqli_query($db,$ra);
					
					while($row_r = mysqli_fetch_assoc($kuri)) {

					?>
							<tr>
								<td align="center"><?php echo $coun1; ?></td>
								<td align="center"><?php echo $row_r["donorID"]; ?></td>
								<td align="center" style="text-transform: uppercase;"><?php echo $row_r["donorName"]; ?></td>
								<td align="center"><?php echo $row_r["requestStatus"]; ?></td>
								<td align="center"><a href="view_nurse_approval.php?donorID=<?php echo $row_r["donorID"]; ?>">View</a></td>
							</tr>
					<?php $coun1++; } ?>
					</tbody>
							</table><br><br>
							<?php } ?>
							<td width=1%></td>
					  <tr>
						<td width="100%">&nbsp;</td>
					  </tr>
					<tr>
						<td style="float:right;" align="right" width="100%" >
							<input type="button" name="backBtn" value="Back to Main Page" onClick="window.location.href='index_staff.php'" />
							<input type="button" name="resetBtn" value="Reset" onClick="window.location.href=self.location">
							<input  name="" type="button" value="Print" onclick="javascript:window.print()" />
						</td>
					</tr>
					</form>
				</div>
				</body>
				</html> 
