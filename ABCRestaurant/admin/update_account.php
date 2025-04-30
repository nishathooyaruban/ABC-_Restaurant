<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);


 include 'config/config.php'; 

$password =$_POST['password'];

$u_id =$_POST['u_id'];

date_default_timezone_set('Asia/colombo');



 $created_on=date('Y-m-d h:i:s');


$update="UPDATE `login` SET password = '".$password."' WHERE id = '".$u_id."'";

$run=mysqli_query($con, $update);






echo '<script type="text/javascript">

		<!--

		alert("Successfully Updated");

		window.parent.location = "dashboard.php"

		//-->

		</script>' ;
	
?>
