<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Blood Stock Graph</title>
<body>
	<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">    
		<tr bgColor="#000000" style="font-family: sans-serif; color: white " >
			<td width="100%">&nbsp;<b>Blood Details || Graph</b></td>
				<h3><center>Blood Stock Data Graph</center></h3>
				<table><br>
					<?php
						session_start(); 
						
						// connect to database
						$db = mysqli_connect('localhost', 'root', '', 'eblood');
						
						if($stmt = $db->query("SELECT blood_type, sum(amount) FROM blood_bank GROUP BY blood_type"))
						{
							echo "<center>No of records : ".$stmt->num_rows."<br><center>";
							
							 $php_data_array = Array(); // create PHP array

							while ($row = $stmt->fetch_row()) {
								
								$php_data_array[] = $row; // Adding to array
							}
							echo "</table>";
						}else{
							echo $db->error;
					}
						//print_r( $php_data_array);
						// You can display the json_encode output here. 
						//echo json_encode($php_data_array); 

						// Transfor PHP array to JavaScript two dimensional array 
						echo "<script>var my_2d = ".json_encode($php_data_array)."
						</script>";
					?>
					<br><br>
						<div id="chart_div" width="415" height="157" style="display: block; width: 1320px; height: 357px;"></div>
							<br><br>
								<script type="text/javascript" src="jsLib/loader.js"></script>
								<script type="text/javascript">

								  // Load the Visualization API and the corechart package.
								  google.charts.load('current', {packages: ['corechart', 'bar']});
								  google.charts.setOnLoadCallback(drawChart);
								  
								  function drawChart() {
									$l = "ml";
									// Create the data table.
									var data = new google.visualization.DataTable();
									data.addColumn('string', 'Blood Types');
									data.addColumn('number', 'Liter(L)');
									//data.addColumn('number', 'Profit');
									
									for(i = 0; i < my_2d.length; i++)
										data.addRow([my_2d[i][0], (parseFloat(my_2d[i][1]))/1000]);
											var options = {
												  title: 'Blood Type Graphss',
												  hAxis: {title: 'Blood Types',  titleTextStyle: {color: '#000'}},
												  vAxis: {title: 'Liter(L))' ,format: '#,####'}
												};
											
										var chart = new google.charts.Bar(document.getElementById('chart_div'));
										chart.draw(data, options);
									}
								</script> 
									<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">    
										<td width=1%></td>
											 <tr bgColor="#000000">
											<td width="100%">&nbsp;</td>
										  </tr>
										<tr>
											<td style="float:right;" align="right" width="100%" >
												<br><input type="button" name="backBtn" value="Back" onClick="window.location.href='blood_stock.php'" />
											</td>
										</tr>
									</body>
								</html>