<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to e-Blood Donation System</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="login">
	<div class="login-screen">
	<div class="app-title">
		<h1>Login to e-Blood Donation System</h1>
	</div>
	
	<form method="post" action="login.php">
	
	<?php include('errors.php'); ?>
	
	<div class="login-form">
	<div class="control-group">
	<div class="select">
		<select type="userLevel" id="userLevel" name="userLevel">
				<option selected value =''>--- Select User Type ---</option>
					<option id="admin">Admin</option>
					<option id="staff">Staff</option>
					<option id="donor">Donor</option>
			</select>
		</div><br>	
		<div class="control-group">
			<input type="text" placeholder="Username" name="username" >
		</div>
		<div class="control-group">
			<input type="password" placeholder="Password" name="password">
		</div>
		<div class="control-group">
			<button type="submit" class="btn btn-primary btn-large btn-block" name="login_user">Login</button>
		</div>
		<p>
			<!-- <a class="register-link" href="register.php">Not yet a member? Sign up now!</a> -->
			<a class="register-link" href="register.php">Click here for the first time register as a donor!</a>
		</p>
	</form>


</body>
</html>