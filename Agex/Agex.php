<center><h1>Ajax Form</h1></center>
<script src="jq.min.js"> </script>

<script type="text/javascript" >
$(function() {
$("#submit").click(function() {
var name = $("#name").val();
var username = $("#username").val();
var password = $("#password").val();
var gender = $("#gender").val();
var dataString = 'name='+ name + '&username=' + username + '&password=' + password + '&gender=' + gender;

if(name=='' || username=='' || password=='' || gender=='')
{
$('.success').fadeOut(200).hide();
$('.error').fadeOut(200).show();
}
else
{
$.ajax({
type: "POST",
url: "ajxsub.php",
data: dataString,
success: function(){
$('.success').fadeIn(200).show();
$('.error').fadeOut(200).hide();
}
});
}
return false;
});
});
</script>
<table border="0" align="center">
<form method="post" name="form">
<tr><td>Name</td>
<td>
<input id="name" name="name" type="text" />
</td>
</tr>
<tr> <td> Username</td>
<td>
<input id="username" name="username" type="text" /> </td></tr>
<tr><td>Password</td>
<td>
<input id="password" name="password" type="password" />
</td></tr>
<tr><td>Gender</td>
<td>
<select id="gender" name="gender"> 
<option value="">Gender</option>
<option value="M">Male</option>
<option value="F">Female</option>
</select>
</td></tr>
<tr>
<td>
<input type="submit" value="Submit" id="submit"/>
</td>
</tr>
</table>
<br />
<br />
<center>
<span class="error" style="display:none"> Please Enter Valid Data</span>
<span class="success" style="display:none"> Registration Successfully</span>
</center>

</form>


