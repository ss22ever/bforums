<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change Password</title>
<style type="text/css">
.style4 {
	font-family: "Lucida Bright";
	font-size: 20pt;
}
.style9 {
	font-weight: bold;
}
.style10 {
	font-family: Century;
	font-size: 40pt;
}
</style>
</head>

<body>
<br>
<p><strong><center class="style10">Change Password</center></strong></p>
<p>&nbsp;</p>
	<form action="includes/change_pwd_inc.php" method="POST">
	<p class="style4"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Username: </strong>
	<input name="uid" type="text" style="width: 320px; height: 28px" /></p>
	
	<p class="style4"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; New Password: </strong>
	<input name="new_pwd" type="password" style="width: 320px; height: 28px" /></p>
	
	<p class="style4"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Re-enter Password: </strong>
	<input name="Text5" type="password" style="width: 320px; height: 28px" /></p>
	<br><br>
	<strong>
	<center><input name="Button1" type="submit" value="Submit" style="width: 86px; height: 37px" class="style9" /></strong>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
	<strong>
	<input name="Button2" type="reset" value="Reset" style="width: 86px; height: 37px" class="style9" /></strong>&nbsp;</p></center>
	<p>&nbsp;</p>
	</form>

</body>

</html>
