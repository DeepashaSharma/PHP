<center><h1>Ajax Form</h1></center>
<script src="jq.min.js"> </script>

<script type="text/javascript" >
$(function() {
$("#submit").click(function() {
var name = $("#name").val();
var email = $("#email").val();
var mobile = $("#mobile").val();
var gender = $("#gender").val();
var city = $("#city").val();
//var subject = $("#subject").val();


var dataString = 'a=' + name + '&b=' + email + '&c=' + mobile + '&d=' + gender;

if(name=='' || email=='' || mobile=='' || gender=='')
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
<input id="name" type="text" />
</td>
</tr>
<tr> <td> Email</td>
<td>
<input id="email" type="text" /> </td></tr>
<tr><td>Mobile</td>
<td>
<input id="mobile" type="Mobile" />
</td></tr>
<tr><td>Gender</td>
<td>
<select id="gender"> 
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


