<?php
   include 'header.php';
?>

<body>



<br>
<br>
<br>
<?php
if(isset($_SESSION['id'])) {   //if session has been set inside the website
	echo "<h3 align='center'>You are already logged in!</h3>";
	}
	else{
	echo "<form action='includes/signup_inc.php' method='POST'>
<input type='text' name='name' placeholder='Name' ><br>
<br>
<input type='text' name='uid' placeholder='Username' ><br>
<br>
<input type='password' name='pwd' placeholder='Password'><br>
<br>
<button type='submit'>Sign Up</button>
</form >";
	}
?>


<br>
<br>
<br>

</body>
</html>