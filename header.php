<?php
session_start();
?>

<! DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>Forums</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<header>
	<nav>
		<ul>
			<li> <a href ="log.php"> <b>HOME </b></a></li>
			<?php
			if(isset($_SESSION['id'])) {   //if session has been set inside the website
			echo "<form action='includes/logout_inc.php'>
				<button>Log Out</button>
				</form>";
			}
			else{
			echo "<form action='includes/login_inc.php' method='POST'>
				<input type='text' name='uid' placeholder='Username' >
				<input type='password' name='pwd' placeholder='Password'>
				<button type='submit'>Login</button>
				</form>
				 <li><a href ='signup.php'> <b>SIGNUP</b> </a></li>";
				}
			
			?>
			
		</ul>
	</nav>
	
</header>

