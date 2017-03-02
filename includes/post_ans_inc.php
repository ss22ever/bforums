<?php
session_start();
include("../dbh.php");
if(isset($_POST['submit'])){
$ta= $_POST['TextArea1'];
$no= $_POST['no'];
$qid= $_POST['qid'];
//$sql = "insert into ques values('','') set password='$pwd' where username='$uid' ";
$sql1="INSERT INTO answer (q_id,cat_id,ans) VALUES ('$qid','$no','$ta')";


$result1 = mysqli_query($conn, $sql1);


}
else{
echo"Error";

}

header("Location: ../user_home.php ");
?>