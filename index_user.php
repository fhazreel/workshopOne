<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">

	<title>Welcome to e-Blood Donation System</title>
	
	 <link rel="stylesheet" href="css/main_style.css">
	
</head>


<body>

  <body>
	<div class="main">
		<div class="main-screen">
			<div class="title">
				<h1>Welcome to e-Blood Donation System</h1>
			</div>
			<div class="sec-screen">
				<a class="logout-link" href="login.php?logout='1'">Logout</a>
			</div>
			</div> 
			
			<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			 <!-- <div class="error success" > -->
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p align="center" style="color: white;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<?php endif ?>
	</div>
			<div>
			<tr id='button2'>
			<a class="btn btn-primary btn-large btn-block" href="donor_view.php">View History as Donor</a>
				<td>&nbsp;</td>
			</tr>
			</div>
			<!--<div>
			<tr id='button2'>
			<a class="btn btn-primary btn-large btn-block" href="view_donor_applicant.php">View Request of Donor Applicant</a>
				<td>&nbsp;</td>
			</tr>
			</div>-->
</html>

