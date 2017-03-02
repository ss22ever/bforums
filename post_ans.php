<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Post an Answer</title>
<script type="text/javascript">
function warn()
{alert("Question Posted Successfully");
//document.write("Password Reset Successfully");
}</script>

<style type="text/css">
.style2 {
	margin-left: 320px;
}
.style1 {
	font-family: "Script MT Bold";
	font-size: 40pt;
}
.style5 {
	margin-left: 80px;
	font-family: Arial, Helvetica, sans-serif;
}
.style8 {
	font-size: xx-small;
}
.style9 {
	font-size: 15pt;
}
.style10 {
	font-size: 20pt;
	font-family: Constantia;
}
.style11 {
	font-weight: bold;
}
</style>
</head>

<body background="image.jpg">

<p class="style2" style="width: 985px"><span class="style1">Welcome to Banasthali Forums</span></p>
<hr style="width: 1668px" />

<?php

$qid=$_GET['qid'];
$user=$_GET['user'];
$ca=array("","Academics","Departments","Other","Accounts and fees","Hospital ","Library","Research and Development","Admissions","Hostels","Market","Sports","Examinations and Results","Certificates and Diploma Courses","Newbies","Training and placement","Fests and Clubs") ;
$no=(int)$user;



   include ('dbh.php');
                session_start();
			if(isset($_SESSION['id'])) {   //if session has been set inside the website
			echo "<h3 align='right'><form action='includes/logout_inc.php' >
				WELCOME USER
				<button>Logout</button>				
<a href='change_pwd.php'><input name='Button1' type='button' value='Change Password' style='width: 119px' /></a>		</form></h3>";	
}

echo"
<form method='post' action='includes/post_ans_inc.php' style='width: 1170px; height: 645px'>
	<span class='style9'>&nbsp;&nbsp;Home &gt; $ca[$no] <br /></span>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
	<span class='style10'><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp; Post your Answer<br /></span>
	<br />
	<br />
	<span class='style9'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	Enter your Answer here:</span></strong></span><span class='style9'><br />
	<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<textarea name='TextArea1' type=' ' style='width: 555px; height: 171px'></textarea><br />
	<input type='hidden' name='no' value='$no'>
		<input type='hidden' name='qid' value='$qid'>
	<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;
	<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input name='submit' type='submit' value='Submit Answer' style='width: 150px; height: 36px' class='style11' /></strong></span>
	
	
	</form>";

	
	
?>
	
</body>

</html>
