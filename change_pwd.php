<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change Password</title>

<style type="text/css">
.style4 {
	font-family: "Lucida Bright";
	font-size: 20pt;
}
.style5 {
	font-size: 40pt;
	font-family: Century;
}
.style9 {
	font-weight: bold;
}
</style>
</head>
<script>
function myfunction()
{
	var pass1=document.getElementById("pass1").value;
	var pass2=document.getElementById("pass2").value;
	if(pass1!=pass2)
	{
		alert("password not match");
	}
	else
	{
		alert("password match");
		validate();
	}
	
	
}

function validate(){
	var pp1= document.getElementById("pp1").value;
	if(pp1 == "" || pp1 == null)
	{
		alert("UserName is mandatory , you cannot leave this field empty");
		return(false);
	}
	else
	{   CheckPassword();
		return(true);
			
	}
}
function CheckPassword()
{
	var pass1= document.getElementById("pass1").value;
    var passw= /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
	if(pass1.value.match(passw))
	{
		alert("Correct..!")
		return true;
	}
	else
	{
		alert(" wrong!! password must contain 7-15 character and one numeric digit and special character is mandatory")
		return false;
	}
}

</script>
<body background="image.jpg">

<form  method="post" action="" onsubmit="return myfunction()" onsubmit="return validate()" onsubmit="return checkpassword()" style="width: 1036px; height: 611px">
	<p class="style5"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	Change Password</strong></p>
	<p></p>
	<p class="style4"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	Username: </strong>
	<input name="Text2"  id="pp1" type="text" id="pp1" style="width: 320px; height: 28px" /></p>
	<p class="style4"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	Old Password: </strong>
	<input name="Text3" type="text" style="width: 320px; height: 28px" /></p>
	<p class="style4"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	New Password: </strong>
	<input name="Text4" id="pass1" type="text" style="width: 320px; height: 28px" /></p>
	<p class="style4"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Re-enter Password: </strong>
	<input name="Text5" id="pass2" type="text" style="width: 320px; height: 28px" /></p>
	<p class="style4"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>&nbsp;&nbsp;
	<strong>
	<input type="submit"value="Submit" style="width: 86px; height: 37px" class="style9" /></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<strong>
	<input name="Button2" type="reset" value="Reset" style="width: 86px; height: 37px" class="style9" /></strong>&nbsp;</p>
	<p></p>
</form>

</body>

</html>
