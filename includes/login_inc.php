<?php
session_start();
include ('../dbh.php');

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];



$sql = "SELECT * FROM signup where username='$uid' AND password='$pwd'";
$result = mysqli_query($conn, $sql);

if(!$row=mysqli_fetch_assoc($result)){   //if data does not match in db
 echo "<h3 align='center'>Your username or password is incorrect!</h3>";
} else{
$_SESSION['id'] = $row['id'];  //results from the db are in $row
header("Location: ../user_home.php");								// The value of this session cannot be accessed until we start the session in the beginning
} // username and password match
   //sends to the frontpage

?>