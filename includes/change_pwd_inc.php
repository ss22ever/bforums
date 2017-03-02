<?php
session_start();
include ('../dbh.php');

$pwd= $_POST['new_pwd'];
$uid= $_POST['uid'];

$sql = "update signup set password='$pwd' where username='$uid' ";
$result = mysqli_query($conn, $sql);

header("Location: ../login.php");
?>