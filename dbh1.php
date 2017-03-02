<?php 

$conn = mysqli_connect("localhost", "root", "" , "search");

//error handler
if(!$conn){
	die("Connection failed:".mysqli_connect_error() );
	}
?>