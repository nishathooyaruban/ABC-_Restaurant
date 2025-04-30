<?php
include 'config/config.php';  

$book_id=$_POST['book_id'];

mysqli_query($con,"DELETE FROM order_main WHERE id = '$book_id'");
mysqli_query($con,"DELETE FROM order_details WHERE order_id = '$book_id'");


echo'<script type="text/javascript">
<!--
alert("Successfully Deleted");
window.parent.location = "orders.php"
//-->
</script>';




?>