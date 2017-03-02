<?php

include ('../dbh.php');

$var1= $_POST['na'];

$sql = "SELECT * FROM category where cat_name='$var1'";
$result = mysqli_query($conn, $sql);

if(!$row=mysqli_fetch_assoc($result)){   //if data does not match in db
 echo "<h3 align='center'>Database not found</h3>";
} else{ $cid= "SELECT * FROM category where cat_name='$var1'";
 $result1 =mysqli_query($conn,$cid);
$row1=mysqli_fetch_array($result1); 
 //$sql="SELECT ques FROM ques where cat_id='$result1'";
 

  //results from the db are in $row
header("Location: ../user_view.php ? user=$row1[0]");								// The value of this session cannot be accessed until we start the session in the beginning
} // username and password match
  ?> //sends to the