<!document html>
<html>
	<head align="center">
		<title>LISTING FIXED DEPOSITE</title>
		<link rel="stylesheet" href="styling_fixed_deposite.css" />
		<link rel="stylesheet" href="html_hover.css" />
		<script type="text/javascript">
		function validateForm()
		{
			var w=document.forms["myForm"]["fixed"].value;
			var x=document.forms["myForm"]["rate"].value;
			var y=document.forms["myForm"]["tenure"].value;
			var z=document.forms["myForm"]["number"].value;
			if (w==null || w=="" || x==null || x=="" || y==null || y=="" || z==null || z=="")
			{
				alert("You cannot leave the fields empty . .");
				return false;
			}
		}
			function calculate(){
				var amount=document.getElementById('amount').value;
				var rate=document.getElementById('rate').value;
				var year=document.getElementById('year').value;
				var num=document.getElementById('num').value;
								
				var values=1+(rate/(num*100));
				var power=num*year;
				var pow=Math.pow(values,power);
				var total=(amount*pow);
				document.forms["myForm"]["demo"].value=total;
				
			}
		</script>
	</head>
<body bgcolor="#248FB2";>

<div style="background-color:#248FB2;width:1350px;" align="center">
	<div id="big_main_list" >
		<?php require_once 'header.php';?>
		<div id="form_button" height="100px" width="500px" align="center">
			
			<form style="backgound-color:#E0EBFF" name="myForm" method="post" action="database_connection.php?" onsubmit="calculate()" >
			<table id="design_table_2" align="center">
				<tr align="center">
					<td>Principle Amount</td>
					<td><input id="amount" type="text" size="25" name="fixed" ></td></tr>
				<tr align="center">
					<td>Rate of Interest</td>
					<td><input id="rate" type="text" size="25" name="rate" ></td></tr>
				<tr align="center">
					<td>Tenure of Deposite</td>
					<td><input id="year" type="text" size="25" name="tenure" ></td>
				</tr>
				<tr align="center">
					<td>No. of times the interest is compunded</td>
					<td><input id="num" type="text" size="25" name="number" ></td>
				</tr>
				<tr align="center">
					<td>Total intrest on Amount ..</td>
					<td><input id="demo" type="text" size="25"  name="demo" ></td>
				</tr>
				</table>
				<tr>
					<td align="center">
					<br/><input id="button" class="buttton" type="submit" onClick="return validateForm()" value="SUBMIT & Calculate" name="submit">
					<br/></td>
				</tr>			
		</div>
	</div>
	<?php require_once 'footer.php';?>
	</div>
</div>
</body>
</html>