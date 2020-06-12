<?php
// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'eblood');
	
//include("auth.php");

	$id=$_REQUEST['id'];
	$query = "SELECT * from login where id='".$id."'"; 
	$result = mysqli_query($db, $query) or die ( mysqli_error());
	$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
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
						<td width="100%">&nbsp;<b>Update Record || Staff</b></td>
					  </tr>
					  <tr>
						<td width="100%">&nbsp;</td>
					  </tr>
					  <tr>
						<td width="100%">
							<table width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:14px">
								<?php
								if(isset($_POST['new']) && $_POST['new']==1)
								{
								$id			= $_REQUEST['id'];
								$username 	= $_REQUEST['username'];
								$email 		= $_REQUEST['email'];
								$password 	= md5($_REQUEST['password']);
							
								
								$update="update login set  
								username='".$username."', 
								email='".$email."', 
								password='".$password."'
								where id='".$id."'";
								
								mysqli_query($db, $update) or die(mysqli_error($db));
								
								echo ("<script LANGUAGE='Javascript'> 
								window.alert('Data have been successfully added');
								window.location.href='view_by_staff.php';
								</script>");
								}else {
							?>
								<div>
								<form name="form" method="post" action=""> 
								<input type="hidden" name="new" value="1" />
								<tr>
									<td align="right" width="15%">Username: </td>
									<td align="left" width="25%">
										<input type="text" name="username" id="username" required size="25" value="<?php echo $row['username'];?>">	
									</td>
									<td align="right" width="15%">User Level : </td>
									<td align="left" width="25%">
										<input type="text" name="userLevel" id="userLevel" required size="15" disabled value="<?php echo $row['userLevel'];?>">
									</td>
								</tr>
								<tr>
									<td align="right" width="15%">Email : </td>
									<td align="left" width="25%">
										<input type="text" name="email" id="email"  size="25" required value="<?php echo $row['email'];?>">
									</td>
								</tr>
								<tr>
									<td align="right" width="15%">Password : </td>
									<td align="left" width="25%">
										<input type="password" name="password" id="password" required size="25" value="<?php echo $row['password'];?>">
									</td>
								</tr>
								
								</table>							
							<tr>
								<td align="right" width="100%" >
									<input name="submit" type="submit" value="Update" />
									<input type="button" name="backBtn" value="Back to Main Page" onClick="window.location.href='index_admin.php'">
									<input type="button" name="resetBtn" value="Reset" onClick="window.location.href=self.location"> 
								</td>
							</td>
							<?php } ?>
							</form>
							<p style="color:#FF0000;">
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
