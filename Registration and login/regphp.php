<?php

include("regconfig.php");

$a=$_REQUEST['fname'];
$b=$_REQUEST['lname'];
$c=$_REQUEST['dob'];
$d=$_REQUEST['email'];
$e=$_REQUEST['pswd'];
$f=$_REQUEST['gen'];
$query=mysql_query("INSERT INTO details(fname,lname,dob,email,pswd,gen) VALUES ('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."')");
if($query)
{
	echo "oky";
}
else
{
	echo mysql_error();
}
?>