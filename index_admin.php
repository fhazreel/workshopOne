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
	
	 <link rel="stylesheet" href="css/main_admin_style.css">
	
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
			<tr id='button1' style="display: none;">
			<a class="btn btn-primary btn-large btn-block" href="question_form.php">Questionnaire Form</a>
				<td>&nbsp;</td>
			</tr>
			
			<div>
			<tr id='button2' style="display: none;">
			<a class="btn btn-primary btn-large btn-block" href="view_by_admin.php">#Admin</a>
				<td>&nbsp;</td>
			</tr>
			
			<tr id='button3' style="display: none;">
			<a class="btn btn-primary btn-large btn-block" href="view_by_staff.php">#Staff</a>
				<td>&nbsp;</td>
			</tr>
			
			<tr id='button4' style="display: none;">
			<a class="btn btn-primary btn-large btn-block" href="view_by_user.php">#Donor</a>
				<td>&nbsp;</td>
			</tr>
			</div>
</html>

