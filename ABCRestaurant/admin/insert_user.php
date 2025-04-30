<?php
ini_set('display_errors', 1);ini_set('display_startup_errors', 1);error_reporting(E_ALL);
 include 'config/config.php'; 

$username =$_POST['username'];

$password =$_POST['password'];
$u_type =$_POST['u_type'];
date_default_timezone_set('Asia/colombo');

	if($username=="")
	{
		echo"Please insert Username <a href='users.php'>Back</a>";
		return;
	}


 $query = mysqli_query($con,"SELECT * FROM login WHERE username = '".$username."'"); 
if (mysqli_num_rows($query) > 0) 
{ 
     echo'<script type="text/javascript">
<!--
alert("User already exists");
window.location = "users.php"
//-->
</script>';
}
else{



$SQL="INSERT INTO login (username,password,u_type,status) VALUES('$username','$password','$u_type','ENABLE')";

$run=mysqli_query($con,$SQL);

echo'<script type="text/javascript">
<!--
alert("Successfully inserted");
window.location = "users.php"
//-->
</script>';

}
?>