<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
<style type="text/css">
.style1 {
	font-family: "Old English Text MT";
	font-size: 40pt;
}
.style4 {
	font-family: "Lucida Bright";
	font-size: 20pt;
}
.style7 {
	font-size: xx-small;
}
.style8 {
	font-size: large;
}
.style9 {
	font-weight: bold;
}
.style10 {
	font-family: "Lucida Bright";
	font-size: 20pt;
	margin-left: 200px;
}
</style>
<script>


</script>
<?php
 session_start();
if(isset($_SESSION['id'])) {   //if session has been set inside the website
	echo "<h3 align='center'>You are already logged in!</h3>";
	}
	else{ 
	echo "<form method='POST' action='includes/signup_inc.php' style='width: 1061px; height: 586px'>
	<p class='style1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Registration</p>
	<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class='style4'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Name:</span></strong>
	<input name='name' type='text' style='width: 320px; height: 28px' /><p class='style4' style='height: 21px'><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; User Type:<span class='style7'>
	<span class='style8'>
	&nbsp;<input name='utype' type='radio' checked='checked' value='2' id='rad' /></span></span><span class='style8'>Staff&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>	<input name='utype' type='radio' value='1' id='rad' /><span class='style8'> Student</span></strong></p>
	<p class='style4'><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; User Id: </strong>
	<input name='uid' id='pp1' type='text' style='width: 320px; height: 28px' /></p>
	<p class='style4'><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Password: </strong>
	<input name='pwd' id='pass1' type='password' style='width: 320px; height: 28px' /></p>
	<p class='style4'><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Re-enter Password: </strong>
	<input name='reenter' id='pass2' type='password' style='width: 320px; height: 28px' /></p>
	<p class='style4'><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; Security Question:
	<select name='ques' style='width: 228px; height: 33px'>
	
	<option selected='selected' value='1' >What is the name of your pet?</option>
	<option value='2'>What is your childhood name?</option>
	</select></strong></p>
	<p class='style4'><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; Security Answer: </strong>
	<input name='sans' type='text' style='width: 320px; height: 28px' /></p>
	<p class='style10'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<strong>
	<input name='submit' type='submit' value='Submit' style='width: 86px; height: 37px' class='style9'/></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<strong>
	<input name='Button2' type='reset' value='Reset' style='width: 86px; height: 37px' class='style9' /></strong>&nbsp;</p>
</form>";
	}
?>
</head>

<body background= image.jpg>



</body>

</html>
