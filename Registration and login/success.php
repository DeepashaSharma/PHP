<?php
session_start();
include("regconfig.php");
echo "WELCOME".$_SESSION['email']." ";
$q=mysql_query("select * from details where email='{$_SESSION['email']}'");
$r=mysql_fetch_array($q);
$u = $r['fname'];
$p=$r['pswd'];
echo "<table>
<tr><td>fname</td>
    <td>$u</td></tr>
<tr><td>pswd</td>
    <td>$p</td></tr>
     </table>";	
?>