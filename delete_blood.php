<?php 
// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'eblood');


$blood_ID = $_REQUEST['blood_ID'];
$query = "DELETE FROM blood_bank WHERE blood_ID = '$blood_ID'"; 
$result = mysqli_query($db,$query) or die ( mysqli_error($db));
header("Location: blood_stock.php"); 
?>