<?php include('server2.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration e-Blood Sytem</title>
	<link rel="stylesheet" type="text/css" href="css/reg_style.css">
</head>
<body>
	<div class="register">
		<div class="register-screen">
			<div class="app-title">
			<div class="control-group">
		<h1>Sign up as the first donor now!</h1>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>
		
		
		<div class="login-form">
		<div class="control-group">
		<br>
			</div>
		</div>
			<input type="hidden" name="userLevel" id="userLevel" value="Donor">
		<div class="control-group">
			<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="control-group">
			<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="control-group">
			<input type="password" placeholder="Password" name="password_1">
		</div>
		<div class="control-group">
			<input type="password" placeholder="Confirm password" name="password_2">
		</div>
		<div class="control-group">
			<button class="btn btn-primary btn-large btn-block" type="submit" name="btn_reg_user">Register</button>
		</div>
		<p>
			<a class="login-link" href="login.php">Already sign up? Login here</a>
		</p>
	</form>
</body>
</html>