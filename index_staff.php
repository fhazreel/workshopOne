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
			<tr id='button3' style="display: none;">
			<a class="btn btn-primary btn-large btn-block" href="nurse_approval.php">Approved Donor Registration</a>
				<td>&nbsp;</td>
			</tr>
			
			<tr id='button4' style="display: none;">
			<a class="btn btn-primary btn-large btn-block" href="blood_stock.php">Manage Blood Stock</a>
			</tr>
			</div>
			<input type="hidden" name="amount" id="amount" value="<?php echo $row["amount"]; ?>">
		
			<?php

			 //pagination.php  
			 $db = mysqli_connect("localhost", "root", "", "eblood");  
			 $res=mysqli_query($db,"SELECT blood_type, SUM(amount) AS total FROM blood_bank GROUP BY blood_type");
				while($row=mysqli_fetch_array($res))
				{
				 $type = $row['blood_type'];
				  $total = $row['total'];
				 

				  if($total <= 250){
				  echo '<p align="center" style="color: red;"> Blood '.$type.' is runoff ! Please recheck the stocks<br>';
					 }
					 else{
						//echo '<p align="center" style="color: pink;">Blood   '.$type.' --> '.$total.' (ml) = Blood stock is in good stock <br>';
					 }
				}
   
 ?> 
			
			
			

</html>

