<!document html>
<html>
	<head align="center">
		<title>LISTING FIXED DEPOSITE</title>
		<link rel="stylesheet" href="styling_fixed_deposite.css" />
		<link rel="stylesheet" href="html_hover.css" />
	</head>
<body bgcolor="#248FB2";>
	<?php
		//require_once 'database_connection.php';
		$con = mysql_connect("localhost","root","vish");
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}
		mysql_select_db("vevento_cumulative_interest", $con);
		
		$result =mysql_query("SELECT Principal_Amount,Rate_Of_Interest,
		Tenure_Of_Deposite,Total_Interest,Maturity_Amount FROM `listing_information` where Principal_Amount>=0;");
		//$result =mysql_query("SELECT * FROM `listing_information`;");
		
		
	?>
<div style="background-color:#248FB2;width:1350px;"  align="center">
	<div id="big_main_list" >
		<?php require_once 'header.php';?>
		<div id="background_lists" >
			<div id="listing_fixed_deposite">
			<div id="box" align="center">
				<a id="link" style="text-decoration: none" href="create_new_deposite.php" title="Note that this animation would only work with google chrome..">
				Create New</br>Deposite</a>
			</div>
			
				<table id="design_table_1" align="center">
				<th>Principle Amount</th>
				<th>Rate of Interest</th>
				<th>Tenure of Deposite</th>
				<th>Total Interest</th>
				<th>Maturity Amount</th>
					<?php
						$bg=1;
						while($row = mysql_fetch_array($result))
						{
							if( $bg == 1){
								echo "<tr class='odd'>";
								$bg=2;
							}else{
								echo "<tr class='even'>";
							$bg=1;
							}
							
							echo "<td>{$row['Principal_Amount']}</td>";
							echo "<td>{$row['Rate_Of_Interest']} %</td>";
							echo "<td>{$row['Tenure_Of_Deposite']}</td>";
							echo "<td>{$row['Total_Interest']}</td>";
							echo "<td>{$row['Maturity_Amount']}</td>";
							
							echo "</tr>";
						}
						echo "</table>";
						mysql_close($con);
						?>
			</div>
		</div>
		<?php require_once 'footer.php';?>
	</div>
</div>
</body>
</html>