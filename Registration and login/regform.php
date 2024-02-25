<?php
include("regconfig.php");
?>
<html>
	<head>
		<title>welcome</title>
		 
	</head>
	<form action="regphp.php" method="POST">
	<body bgcolor="pink">	<CENTER>
		<h1 style="font-size:50px;color:blue">CHARTERED INSTITUTE OF TECHNOLOGY</h1>
		<h2 style="font-size:25px;color:black">Registration form</h2>
		First Name:
		<input type="text" name="fname"/>
		<br>
		<br>Last Name:
		<input type="text" name="lname"/>
		<br>
		<br>DOB:<INPUT TYPE="date" name="dob" />
		<br>
			<br>Gender:
			<input type="radio" name="gen" value="male" "checked" >male
			<input type="radio" name="gen" value=" female" "checked" >female
			<br>
			<br>EMAIL :
			<INPUT TYPE="TEXT" NAME="email">
			
			<br>
			<br>PASSWORD :<INPUT TYPE="Password" NAME="pswd"/>
			<br>
			<br><input type="submit" name="submit" value="submit" />
			
		</form>	
		</body>
		</html>