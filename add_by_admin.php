<?php

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'eblood');

		//check redundant data
			if(isset($_POST['email'])) {
			$email = $_POST['email'];

			$check = mysqli_query($db,"SELECT * FROM login WHERE email='$email'");
			$checkrows = mysqli_num_rows($check);
			
			//check if there is already an entry for that username
			if($checkrows > 0 ) { 
				echo '<script language="javascript">';
				echo 'alert("The email has already exist!");';
				echo 'window.location.href="add_by_admin.php";';
				echo'</script>';
			}  else {
				if(isset($_POST['new']) && $_POST['new']==1) {
				
				$userLevel	= $_REQUEST['userLevel'];
				$username	= $_REQUEST['username'];
				$email 		= $_REQUEST['email'];
				$password 	= md5($_REQUEST['password']);
			
				$ins_query = $db->prepare("INSERT INTO login
				(userLevel, username, email, password) 
				values (?,?,?,?)");
				
				$ins_query->bind_param("ssss", $userLevel,$username,$email,$password);
				$ins_query->execute();
				
				
				echo ("<script LANGUAGE='Javascript'> 
				window.alert('Data have been successfully added');
				window.location.href='view_by_admin.php';
				</script>");
	}}}
	
	?>
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<title>Insert new Admin</title>
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
						<td width="100%">&nbsp;<b>Insert New Record || Admin Data</b></td>
					  </tr>
					  <tr>
						<td width="100%">&nbsp;</td>
					  </tr>
					  <tr>
						<td width="100%">
							<table width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:14px">
								<br><br>
								 <div>
								<form name="form" method="post" action="add_by_admin.php"> 
								<input type="hidden" name="new" value="1" />
								<tr>
									<td align="right" width="15%">Username : </td>
									<td align="left" width="25%">
										<input type="text" name="username" id="username" required size="25">
									</td>
									<td align="right" width="15%">User Level : </td>
									<td align="left" width="25%">
										<input type="hidden" name="userLevel" id="userLevel" value="Admin">
										<input style="text-transform: uppercase;" type="text" name="userLevel" id="userLevel" disabled value="Admin" size="15" >
									</td>
								</tr>
								<tr>
									<td align="right" width="15%">Email : </td>
									<td align="left" width="25%">
										<input type="email" name="email" id="email" required size="25">
									</td>
								</tr>
								<tr>
									<td align="right" width="15%">Password : </td>
									<td align="left" width="25%">
										<input type="password" name="password" id="password" required size="25">
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
