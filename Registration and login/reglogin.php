<?php
session_start();

include("regconfig.php");
?>
<html>
	<head>
		<title>welcome to login page</title>
		 
	</head>
	<form method="POST">
	<body bgcolor="pink">	<CENTER>
		<h1 style="font-size:50px;color:blue">CHARTERED INSTITUTE OF TECHNOLOGY</h1>
		<h2 style="font-size:25px;color:black">LOGIN</h2>
		Enter your name:
		<input type="text" name="fn" />
		
		<br>
		<br>PASSWORD :<INPUT type="password" name="pd"/>
		<br>
		<br><input type="submit" name="submit" value="submit" />
			
		</form>
		</body>
		</html>
		<?php
		if(isset($_POST['submit']))
		{
		$user=$_POST['fn'];		
		$pass=$_POST['pd'];
		$sql=mysql_query("select * from details where fname='$user' and pswd='$pass'");
		$row=mysql_fetch_array($sql);
		if(!$sql)
		{
		echo "can not login";
		}
		else
		{
			$un=$row['email'];
			$_SESSION['email']=$un;
echo "<script type='text/javascript'>
		alert('login success');
		window.location.href='success.php';
		</script>";		
		}
		}
		?>
		
		
		
		