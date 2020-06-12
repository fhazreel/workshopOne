<?php
// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'eblood');
	
//include("auth.php");

	$blood_ID=$_REQUEST['blood_ID'];
	$query = "SELECT * from blood_bank where blood_ID='".$blood_ID."'"; 
	$result = mysqli_query($db, $query) or die ( mysqli_error());
	$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
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
						<td width="100%">&nbsp;<b>Update Record || Blood Bank</b></td>
					  </tr>
					  <tr>
						<td width="100%">&nbsp;</td>
					  </tr>
					  <tr>
						<td width="100%">
							<table width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:14px">
							<?php
							//$status = "";
							$amount = "";
							if(isset($_POST['new']) && $_POST['new']==1)
							{
							$blood_ID=$_REQUEST['blood_ID'];
							$date = date("Y-m-d H:i:s");
							
							//$blood_ID 	= $_REQUEST['blood_ID'];
							//$blood_type 	= $_REQUEST['blood_type'];
							$blood_bag 		= $_REQUEST['blood_bag'];
							$blood_quantity = $_REQUEST['blood_quantity'];
							$amount 		= $_REQUEST['amount'];
							//$donor_ID 	= $_REQUEST['donor_ID'];
							$date 			= $_REQUEST['date'];
							
							//$submittedby = $_SESSION["username"];
							
							$update="update blood_bank set  
							blood_bag='".$blood_bag."', 
							blood_quantity='".$blood_quantity."', 
							amount='".$amount."',  
							date='".$date."' where blood_ID='".$blood_ID."'";
							
							mysqli_query($db, $update) or die(mysqli_error($db));
							
							echo ("<script LANGUAGE='Javascript'> 
							window.alert('Data have been successfully updated');
							window.location.href='blood_stock.php'
							</script>");
							
							// $status = "Record Updated Successfully. </br></br><a href='blood_stock.php'>View Updated Record</a>";
							// echo '<p style="color:#FF0000;">'.$status.'</p>';
							}else {
							?>
								<div>
								<form name="form" method="post" action=""> 
								<input type="hidden" name="new" value="1" />
								<tr>
									<td align="right" width="15%">Blood ID : </td>
									<td align="left" width="25%">
										<input type="text" name="blood_ID" id="blood_ID"  size="15" disabled value="<?php echo $row['blood_ID'];?>">
									</td>
									<td align="right" width="15%">Blood Type : </td>
									<td align="left" width="25%">
										<input type="text" name="blood_type" id="blood_type"  size="15" disabled value="<?php echo $row['blood_type'];?>">	
									</td>
								</tr>
								<tr>
									<tr>
									<td align="right" width="15%">Blood Bag : </td>
									<td align="left" width="25%">
										<select name="blood_bag" id="blood_bag" onclick="calc()">
										<option selected value = ""><?php echo $row['blood_bag']; ?></option>
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
								</tr>
								<tr>
									<td align="right" width="15%">Blood Quantity (ml) : </td>
									<td align="left" width="25%">
									<select name="blood_quantity" id="blood_quantity" onclick="calc()">
									<option selected value = ""><?php echo $row['blood_quantity']; ?></option>
											<option>250</option>
											<option>500</option>
										</select>
										<!-- <input type="number" style="text-transform: uppercase;"  name="blood_quantity" id="blood_quantity"  size="15" value="<?php// echo $row['blood_quantity'];?>"> -->
									</td>
								</tr>
								<tr>
									<td align="right" width="15%">Amount : </td>
									<td align="left" width="25%">
										
										<input type="text" onchange="calc()" name="amount" readonly id="amount" size="15" value="<?php echo $row['amount'];?>">
									</td> 
								</tr>
								<tr>
									<td align="right" width="15%">Date: </td>
									<td align="left" width="25%">
										<input type="text" name="date" required id="date" value="<?php echo $row['date'];?>"> 
									</td>
								</tr>
								</table>							
							<tr>
								<td align="right" width="100%" >
									<input name="submit" type="submit" value="Update" />
									<input type="button" name="backBtn" value="Back to Main Page" onClick="window.location.href='index_staff.php'">
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
<script>
            
            function calc()
            {
                var blood_bag = parseFloat(document.getElementById('blood_bag').value);
                var blood_quantity = parseFloat(document.getElementById('blood_quantity').value);
                
               
                
                    document.getElementById('amount').value = blood_bag*blood_quantity;
                
            }
            
        </script>
<script>
  $( function date() { 
		
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
