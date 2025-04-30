<?php
ini_set('display_errors', 1);ini_set('display_startup_errors', 1);error_reporting(E_ALL);
 include 'config/config.php'; 




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


$SQL="INSERT INTO gallery (img) VALUES('$bill_image')";

$run=mysqli_query($con,$SQL);

echo'<script type="text/javascript">
<!--
alert("Successfully inserted");
window.location = "images.php"
//-->
</script>';


?>