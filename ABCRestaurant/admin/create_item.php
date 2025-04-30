<?php
ini_set('display_errors', 1);ini_set('display_startup_errors', 1);error_reporting(E_ALL);
 include 'config/config.php'; 

$name =$_POST['name'];

$price =$_POST['price'];
$sp =$_POST['sp'];
date_default_timezone_set('Asia/colombo');

	if($name=="")
	{
		echo"Please insert Food name <a href='items.php'>Back</a>";
		return;
	}


 $query = mysqli_query($con,"SELECT * FROM food_items WHERE name = '".$name."'"); 
if (mysqli_num_rows($query) > 0) 
{ 
     echo'<script type="text/javascript">
<!--
alert("Item already exists");
window.location = "items.php"
//-->
</script>';
}
else{
/*	move_uploaded_file($_FILES["banner"]["banner"] , "$folder".$_FILES["banner"]["name"]);
"<p align=center>File ".$_FILES["banner"]["name"]."loaded...";
*/


// Check if image file is a actual image or fake image

 if (!isset($_FILES['item_img']['tmp_name'])) {
  $bill_image=0;
 }else{
  $bill_image=$_FILES['item_img']['tmp_name'];
 $image= addslashes(file_get_contents($_FILES['item_img']['tmp_name']));
 $image_name= addslashes($_FILES['item_img']['name']);
   if($bill_image!=''){
   move_uploaded_file($_FILES["item_img"]["tmp_name"],"../images/". $_FILES["item_img"]["name"]);
   
   $bill_image=$_FILES["item_img"]["name"];
   }
   else{
	    $bill_image='';
   }
   
 }	


$SQL="INSERT INTO food_items (name,price,img,sp) VALUES('$name','$price','$bill_image','$sp')";

$run=mysqli_query($con,$SQL);

echo'<script type="text/javascript">
<!--
alert("Successfully inserted");
window.location = "items.php"
//-->
</script>';

}
?>