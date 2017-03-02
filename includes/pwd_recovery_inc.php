<?php
session_start();
include ('../dbh.php');

$uid = $_POST['username'];
$s_ques = $_POST['ques'];
$s_ans = $_POST['sans'];


$sql = "SELECT * FROM signup where username='$uid' AND ans='$s_ans' AND ques='$s_ques'";
$result = mysqli_query($conn, $sql);

if(!$row=mysqli_fetch_assoc($result)){   //if data does not match in db
 echo "<h3 align='center'>Your entries do not match!</h3>";
} else{
//$_SESSION['id'] = $row['id'];  //results from the db are in $row
								// The value of this session cannot be accessed until we start the session in the beginning
 // username and password match
header("Location: ../change_pwd1.php");   //sends to the frontpage
}
?>