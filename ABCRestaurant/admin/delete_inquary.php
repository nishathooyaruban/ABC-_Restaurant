<?php
include 'config/config.php';  

$book_id=$_POST['book_id'];

mysqli_query($con,"DELETE FROM contact WHERE id = '$book_id'");


echo'<script type="text/javascript">
<!--
alert("Successfully Deleted");
window.parent.location = "inquiries.php"
//-->
</script>';




?>