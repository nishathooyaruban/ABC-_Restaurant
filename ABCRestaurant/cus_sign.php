<?php
session_start();
include 'config/mysqlicon.php'; 
date_default_timezone_set('Asia/colombo');



$username = $_POST['email'];

$password = $_POST['password'];

if($username=="")
		{
			echo"Please enter the User name";
			return;
		}
if($password=="")
		{
			echo"Please enter the Password";
			return;
		}

$sqlid= "SELECT * FROM customer WHERE email = '$username' and password = '$password'";
	$runid=mysqli_query($con,$sqlid) or die("SQL error");
	$norid=mysqli_num_rows($runid);
	if($norid>0){
	while($rowid=mysqli_fetch_array($runid))
	{
	 
	 	$cus_id = $rowid['id'];

		
					
				$_SESSION['cus_id'] = $cus_id;
			
				/*$SQL="INSERT INTO login_details (user_name,time_date) VALUES('$username','$cdate')";
				$run=mySQL_query($SQL,$con);
				//header('location:item.php');*/
				
				echo'<script type="text/javascript">
			<!--

			window.parent.location = "my_account.php"
			//-->
			</script>';
			
	}
	}else{
				
			
//Count the table row. 0 = No user exists

?>
<script type="text/javascript">
<!--
alert("Invalid Details Please retry");
window.parent.location = "signup.php"
//-->
</script>
	<?php } ?>
</body>
</html>