<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Blood Stock</title>

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
						
					  </tr>
					  <tr bgColor="#000000" style="font-family: sans-serif; color: white " >
						<td width="100%">&nbsp;<b>Blood Details || Blood Bank View</b></td>
					  </tr>
						
					  <form method="post" action="blood_stock.php">
					 
					  <tr>
						<td width="100%">&nbsp;</td>
					  </tr>
							<table>
									<td align="right" width="25%">Blood Type:</td>
									<td align="left" width="12%">
										<input type="hidden" name="blood_type" id="blood_type">
										<select name="blood_type" id="blood_type" >
										<option selected value = ''></option>
											<option>O</option>
											<option>O-</option>
											<option>A</option>
											<option>A-</option>
											<option>B</option>
											<option>B-</option>
											<option>AB</option>
											<option>AB-</option>
										</select>
										<button type="search" name="searchBtn">Search</button>
				
									</td>
							  <table><br><br>

									<table width="100%" bgcolor="#E6E6E6" border="1" bordercolor="#000000" cellpadding="5" cellspacing="0" style="font-family:Arial, Helvetica, sans-serif; font-size:14px">
											<thead>
												<tr height="25" bgcolor="#333333" style="font-family: sans-serif; color: white; text-align: center">
													<th><strong>No</strong></th>
													<th><strong>Blood ID</strong></th>
													<th><strong>Blood Type</strong></th>
													<th><strong>Blood Bag</strong></th>
													<th><strong>Quantity(ml)</strong></th>
													<th><strong>Amount</strong></th>
													<th><strong>Date</strong></th>
													<th><strong>Edit</strong></th>
													<th><strong>Delete</strong></th>
												</tr>
											
												<?php
												
												if(isset($_POST['searchBtn'])) {
												
												// blood to search
												$bloodType = $_POST['blood_type'];
												
												// connect to database
												$db = mysqli_connect('localhost', 'root', '', 'eblood');
											
												$sel_query ="SELECT * FROM blood_bank WHERE blood_type = '$bloodType'";
												$result = mysqli_query($db,$sel_query);
												$count=1;
												
												 if(mysqli_num_rows($result) > 0)
												 {while($row = mysqli_fetch_assoc($result)) { ?>
													<tr>
													<td style="text-transform: uppercase;" align="center"><?php echo $count; ?></td>
													<td style="text-transform: uppercase;" align="center"><?php echo $row["blood_ID"]; ?></td>
													<td style="text-transform: uppercase;" align="center"><?php echo $row["blood_type"]; ?></td>
													<td style="text-transform: uppercase;" align="center"><?php echo $row["blood_bag"]; ?></td>
													<td style="text-transform: uppercase;" align="center"><?php echo $row["blood_quantity"]; ?></td>
													<td style="text-transform: uppercase;" align="center"><?php echo $row["amount"]; ?></td>
													<td style="text-transform: uppercase;" align="center"><?php echo $row["date"]; ?></td>
													
												
													<td align="center"><a href="edit_blood.php?blood_ID=<?php echo $row["blood_ID"]; ?>">Edit</a></td>
													<td align="center"><a href="delete_blood.php?blood_ID=<?php echo $row["blood_ID"]; ?>">Delete</a></td>
												</tr>
												
					
												<?php  $count++; ?>
											
												<?php 
												}}}?>
												<!------ calculation ----->
											
													 <?php
														
														if(isset($_POST['searchBtn'])) {
														
														// blood to search
														$bloodType = $_POST['blood_type'];
														
														// connect to database
														$db = mysqli_connect('localhost', 'root', '', 'eblood');
														
														$result = mysqli_query($db, "SELECT sum(amount) FROM blood_bank WHERE blood_type = '$bloodType'") or die(mysqli_error($db));
														
														
														while ($rows = mysqli_fetch_array($result)) {
															?>

															<tr>
																<td colspan="7">&nbsp;</td>
																<td>Total (ml)</td>
																<td><input type="text" disabled name="grand_amount" value="<?php echo $rows['sum(amount)']; ?>"></td>
															</tr>
															
															<!--<td style="float:right;" align="right" width="100%" >
																<i class="icon-credit-card icon-large"></i>&nbsp;Total:&nbsp;<?php //echo $rows['sum(blood_quantity*blood_bag)']; ?></div></div>
															</div> -->
														<?php }}
														?> 
											
													<!------ stop calculation ----->
													
												
												
												</tbody>
												</table>
												<td width=1%></td>
										  <tr>
										  
											<td width="100%">&nbsp;</td>
										  </tr>
									<br /><br />
										<tr>
											<td style="float:right;" align="right" width="100%" >
												<input type="button" name="insertBtn" value="Insert New Record of Blood" onClick="window.location.href='insert_blood.php'" />
												<input type="button" name="viewBtn" value="View Blood in Graph" onClick="window.location.href='blood_graph.php'" />
												<input type="button" name="backBtn" value="Back to Main Page" onClick="window.location.href='index_staff.php'" />
												<!--<input name="" type="button" value="Print" onclick="javascript:window.print()" />-->
												<input type="reset" name="resetBtn" value="Reset" onClick="window.location.href=self.location">
											</td>

										</tr>
										</form>
</div>
</body></html>