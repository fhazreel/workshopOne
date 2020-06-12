<?php 
// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'eblood');


$id = $_REQUEST['id'];
$query = "DELETE FROM login WHERE id = '$id'"; 
$result = mysqli_query($db,$query) or die ( mysqli_error($db));
header("Location: view_by_user.php"); 
?>