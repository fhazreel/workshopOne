<?php 
// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'eblood');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Questions</title>
<!-- <link rel="stylesheet" href="css/style.css" /> -->
</head>
<body>
<div class="form">
<h2><center>View Question Records</center></h2>

<table width="100%" bgcolor="#E6E6E6" border="1" bordercolor="#000000" cellpadding="5" cellspacing="0" style="font-family:Arial, Helvetica, sans-serif; font-size:14px">
	<!--<table width="100%" border="1" style="border-collapse:collapse;"> -->
		<thead>
			<tr height="25" bgcolor="#333333"  style="font-family: sans-serif; color: white; text-align: center">
			<!-- <tr> -->
				<th><strong>No</strong></th>
				<th><strong>Question ID</strong></th>
				<th><strong>Questions</strong></th>
				<th><strong>Edit</strong></th>
				<th><strong>Delete</strong></th>
			</tr>
		</thead>
	<tbody>

			<?php
			$count=1;
			
			$sel_query="SELECT * FROM question ORDER BY no ASC ";
			$result = mysqli_query($db,$sel_query);
			while($row = mysqli_fetch_assoc($result)) { ?>
				<tr>
				<td align="center"><?php echo $count; ?></td> 
				<td align="center"><?php echo $row["question_ID"]; ?></td>
				<td align="left"><?php echo $row["questions"]; ?></td>
				
				<td align="center"><a href="edit_question.php?question_ID=<?php echo $row["question_ID"]; ?>">Edit</a></td>
				<td align="center"><a href="delete_question.php?question_ID=<?php echo $row["question_ID"]; ?>">Delete</a></td>
			</tr>
			<?php  $count++; } ?>
			</tbody>
			</table>
			<td width=1%></td>
      <tr>
        <td width="100%">&nbsp;</td>
      </tr>
<br /><br /><table>
	<tr>
		<td style="float:right;" align="right" width="100%" >
			<input  type="button" name="insertBtn" value="Insert New Record" onClick="window.location.href='add_question.php'" />
			<input type="button" name="backBtn" value="Back to Main Page" onClick="window.location.href='index_admin.php'" />
			<input  name="" type="button" value="Print" onclick="javascript:window.print()" />
		</td>
	</tr>
	</form>
</div>
</body>
</html>
