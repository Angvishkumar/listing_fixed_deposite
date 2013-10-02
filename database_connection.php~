<?php
	$con = mysql_connect("127.0.0.1","root","rtcamp.com@1");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	$f = $_POST['fixed'];
	$r = $_POST['rate'];
	$t = $_POST['tenure'];
	$total = $_POST['demo'];
	echo $total;
	$m = $f + $total;
	
	mysql_select_db("vevento_cumulative_interest", $con);
	
	mysql_query("INSERT INTO listing_information(Principal_Amount,
	Rate_Of_Interest,Tenure_Of_Deposite,Total_Interest, Maturity_Amount)
	VALUES('$f','$r','$t','$total','$m')");
	header('Location: index.php');
?>