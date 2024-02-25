<?php
if($_POST)
{
$name=$_POST['a'];
$email=$_POST['b'];
$mobile=$_POST['c'];
$gender=$_POST['d'];
//$city=$_POST['e'];
//$subject=$_POST['f'];

mysql_connect("localhost","root","");
mysql_select_db("ajx");

$qry=mysql_query("insert into ajx (name, email, mobile, gender) values ('$name', '$email', '$mobile' ,'$gender')");
if($qry)
{
	echo "<script type='text/javascript'>
		alert('submitted');
		</script>";
}

else 
{ 

echo mysql_error();

}
}
?>