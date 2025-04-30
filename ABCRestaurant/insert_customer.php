<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 include 'config/mysqlicon.php'; 

echo $name = $_POST['name'];
$email = $_POST['email'];

$phone = $_POST['phone'];
$password = $_POST['password'];




	if($name=="")
	{
		echo"Please insert Name <a href='register.php'>Back</a>";
		return;
	}
 $query = mysqli_query($con,"SELECT * FROM customer WHERE email = '".$email."'"); 
if (mysqli_num_rows($query) > 0) 
{      echo'<script type="text/javascript">
<!--
alert("You are already registered");
window.location = "signup.php"
//-->
</script>';
}
else{


$SQL="INSERT INTO customer (name,email,phone,password) VALUES('$name','$email','$phone','$password')";


if(mysqli_query($con, $SQL))  
                     {  
                          $cus_id = mysqli_insert_id($con);  
                     }


?>
  <form action="signup.php" method="POST" id="all_details">

  <input type="hidden" name="cus_id" id="cus_id" value="<?php echo $cus_id; ?>" />			
  		
 	
						</form>
						
<script type="text/javascript">
   document.getElementById('all_details').submit(); // SUBMIT FORM
</script>
<?php } ?>