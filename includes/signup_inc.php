<?php
session_start();
include ('../dbh.php');

if(isset($_POST['submit'])){
$name = $_POST['name'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$utype=$_POST['utype'];
$sques=$_POST['ques'];
$sans=$_POST['sans'];




$sql = "INSERT INTO signup (name, user_type, username, password, ans,ques) VALUES ('$name', '$utype', '$uid','$pwd','$sans','$sques')";
$result = mysqli_query($conn, $sql);
echo "Successfully Added" ;
}
else echo "error in submission";

header("Location: ../login.php");
?>