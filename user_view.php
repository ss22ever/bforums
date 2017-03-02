<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Banasthali Forums</title>
<style type="text/css">
.style2 {
	margin-left: 320px;
}
.style1 {
	font-family: "Script MT Bold";
	font-size: 40pt;
}
.style5 {
	margin-left: 80px;
	font-family: Arial, Helvetica, sans-serif;
}
.style8 {
	font-size: xx-small;
}
.style9 {
	font-size: 15pt;
}
.style11 {
	font-size: x-small;
}
.style10 {
	font-weight: bold;
	margin-left: 278px;
}
.style16 {
	font-size: 20pt;
}
.style13 {
	color: #C0C0C0;
}
.style14 {
	font-size: 16pt;
}
</style>
</head>

<body background="image.jpg"><a href='se/index1.php'><button >Search ip</button></a><a href='user_home.php'><button >Forum Home</button></a>
<p class="style2" style="width: 985px"><span class="style1">Welcome to 
Banasthali Forums</span></p>
<hr style="width: 1668px" />

<?php 
$user=$_GET['user'];
$ca=array("","Academics","Departments","Other","Accounts and fees","Hospital ","Library","Research and Development","Admissions","Hostels","Market","Sports","Examinations and Results","Certificates and Diploma Courses","Newbies","Training and placement","Fests and Clubs") ;
$no=(int)$user;


   include ('dbh.php');
                session_start();
			if(isset($_SESSION['id'])) {   //if session has been set inside the website
			echo "<h3 align='right'><form action='includes/logout_inc.php' >
				WELCOME USER
				<button>Logout</button>				
<a href='change_pwd.php'><input name='Button1' type='button' value='Change Password' style='width: 119px' /></a>		</form></h3>";	}





include ('dbh.php');

//$var1= $_POST['na'];

echo"
	<span class='style9'>&nbsp;&nbsp;Home &gt$ca[$no] &nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;<br />
	<br />
	
	
	<br><center><form action='post_que.php' method='get'>
	<button name='user' value='$no' type='submit' style='width: 614px; height: 55px'> <h4>Post a Query</h4>
	</button></form>
	</center> <br><br>";
	
	
	$sql = "SELECT * FROM ques where cat_id='$user'";
$result = mysqli_query($conn, $sql);

 $foundnum = mysqli_num_rows($result);

        if ($foundnum==0)
        {
         
         echo "Sorry, No one has posted questions and answers yet,be the one:click on post a query";
         
         }

         else
         {
             
 
             while($runrows = mysqli_fetch_assoc($result))
             {
                
               
                $desc = $runrows ['ques'];
               $var11= $runrows['q_id'];
 
               echo "
                    
 <h2>                    $desc<br> </h2>
                    
                     
                    ";				
	$sql1 = "SELECT * FROM answer where q_id='$var11' AND cat_id='$user'";
$result1 = mysqli_query($conn, $sql1);

 $foundnum1 = mysqli_num_rows($result1);

        if ($foundnum1==0)
        {
         
         echo "Sorry, No one has posted any answers yet,be the one: go back and click on answer ";
         
         }

         else
         {
             
 
             while($runrows1 = mysqli_fetch_assoc($result1))
             {
                
               
                $desc1 = $runrows1['ans'];
                
 
               echo "
                    
 <h4>                   &nbsp&nbsp&nbsp $desc1<br> </h4>
                      
                     
                    ";
					
		
 
              }
           
          }
	
					
					echo"<form method='get' action='post_ans.php'>
					<button type='submit' value='Answer' onclick='warn();' style='width: 120px; height: 30px' >Answer</button>
					<input name='qid' type='hidden' value='$var11'>
					<input name='user' type='hidden' value='$no'>
					</form>";
					
					
					
					
					

              }
           
          }

echo"
	<p class='MsoNormal'><o:p>&nbsp;</o:p></p>";
	

?>

	

</body>

</html>
