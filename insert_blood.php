<?php
	session_start(); 
	
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'eblood');
	
	//$status = "";
	
	if(isset($_POST['new']) && $_POST['new']==1)
	{		
		//$blood_ID 	= $_REQUEST['blood_ID'];
		$blood_type 	= $_REQUEST['blood_type'];
		$blood_bag 		= $_REQUEST['blood_bag'];
		$blood_quantity = $_REQUEST['blood_quantity'];
		$amount 		= $_REQUEST['amount'];
		//$donor_ID		= $_REQUEST['donor_ID'];
		//$staff_ID 	= $_REQUEST['staff_ID'];
		$date 			= date("Y-m-d H:i:s");		
	
		$ins_query = $db->prepare("INSERT INTO blood_bank
		(blood_type, blood_bag, blood_quantity, amount, date) 
		values (?,?,?,?,?)");
		
		$ins_query->bind_param("sssss", $blood_type, $blood_bag, $blood_quantity, $amount, $date);
		$ins_query->execute();
		
		echo ("<script LANGUAGE='Javascript'> 
			window.alert('Data have been successfully inserted');
			window.location.href='blood_stock.php'
			</script>");
		
		//mysqli_query($db,$ins_query) or die(mysqli_error($db));
		// $status = "New Record Inserted Successfully.</br></br><a href='blood_stock.php'>View Inserted Record</a>";
	}
	
	?>
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
	
	<title>Insert New Blood Stock</title>
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
						<td width="100%">&nbsp;<b>Insert New Record || Blood Bank</b></td>
					  </tr>
					  <tr>
						<td width="100%">&nbsp;</td>
					  </tr>
					  <tr>
						<td width="100%">
							<table width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:14px">

								 <div>
								<form name="form" method="post" action="insert_blood.php"> 
								<input type="hidden" name="new" value="1" />
									
								<!--<tr>
									<td align="right" width="15%">Blood ID : </td>
									<td align="left" width="25%">
										<input style="text-transform: uppercase;" type="text" name="blood_ID" id="blood_ID"  size="15">
									</td> 
								</tr>-->
								<tr>
									<td align="right" width="15%">Blood Bag : </td>
									<td align="left" width="25%">
										<select name="blood_bag" required id="blood_bag" >
										<option selected value = ''></option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
										</select>
									</td>
									<td>
									<td align="right" width="15%">Blood Type : </td>
									<td align="left" width="25%">
										<select name="blood_type" onclick="calc()" required id="blood_type" >
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
									</td>
								</tr>
								<tr>
									<td align="right" width="15%">Blood Quantity (ml) : </td>
									<td align="left" width="25%">
									<select name="blood_quantity" onclick="calc()" required id="blood_quantity" >
										<option selected value = ''></option>
											<option>250</option>
											<option>500</option>
										</select>
									</td>
								</tr>	
								<tr>
								<?php //if(!empty($amount)) { ?>
									<td align="right" width="15%">Amount : </td>
									<td align="left" width="25%">
										<input onchange="calc()" type="text" name="amount" readonly id="amount" size="15">
								</td> <?php //} ?>
								</tr>
								<tr>
									<td align="right" width="15%">Date: </td>
									<td align="left" width="25%">
										<input style="text-transform: uppercase;" required type="text" name="date" id="date">
									</td>
								</tr>
								</table>
									</td>
					  </tr>
									
					  <tr>
						<td align="right" width="100%" >
							<input name="submit" type="submit" value="Submit" />
							<input type="button" name="backBtn" value="Back to Main Page" onClick="window.location.href='index_staff.php'">
							<input type="button" name="resetBtn" value="Reset" onClick="window.location.href=self.location"> 
						</td>
					</td>
					</form>
					<p style="color:#FF0000;"><?php //echo $status; ?></p>
					
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
<script>
            
            function calc()
            {
                var blood_bag = parseFloat(document.getElementById('blood_bag').value);
                var blood_quantity = parseFloat(document.getElementById('blood_quantity').value);

                    document.getElementById('amount').value = blood_bag*blood_quantity;

            }
            
        </script>
<script>
  $( function() { 
		
    $( "#date" ).datepicker({
		changeYear: true,
        changeMonth: true,
        dateFormat: "yy-m-dd",
        yearRange: "-100:+20"
        //minDate: '0' 
		
		//dateFormat: 'yy-mm-dd'

});
	
  } );
</script>
