<?php
session_start();
include ('../dbh.php');
if(isset($_POST['submit'])){
$ta= $_POST['TextArea1'];
$no= (int)$_POST['no'];


//$sql = "insert into ques values('','') set password='$pwd' where username='$uid' ";
$sql="INSERT INTO ques (cat_id,ques) VALUES ('$no','$ta')";
$result = mysqli_query($conn, $sql);
echo"Added";

}
else{
echo"Error";
}

header("Location: ../user_home.php ");
?>