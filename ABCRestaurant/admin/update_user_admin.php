<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


 include 'config/config.php'; 
$username =$_POST['username'];

$password =$_POST['password'];
$u_type =$_POST['u_type'];
$status =$_POST['status'];
$user_id =$_POST['user_id'];



$update="UPDATE `login` SET username = '".$username."' ,password = '".$password."',u_type = '".$u_type."',status = '".$status."'  WHERE id = '".$user_id."'";

$run=mysqli_query($con, $update);






echo '<script type="text/javascript">

		<!--

		alert("Successfully Updated");

		window.parent.location = "users.php"

		//-->

		</script>' ;
	
?>
