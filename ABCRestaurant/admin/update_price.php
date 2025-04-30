<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);


 include 'config/config.php'; 
$item_id =$_POST['item_id'];

$price =$_POST['price'];





$update="UPDATE `food_items` SET price = '".$price."'  WHERE id = '".$item_id."'";

$run=mysqli_query($con, $update);






echo '<script type="text/javascript">

		<!--

		alert("Successfully Updated");

		window.parent.location = "items.php"

		//-->

		</script>' ;
	
?>
