<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
 include 'config/mysqlicon.php'; 

$name = mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$book_date = $_POST['book_date'];
$people = mysqli_real_escape_string($con,$_POST['people']);
$phone = mysqli_real_escape_string($con,$_POST['phone']);
$branch = mysqli_real_escape_string($con,$_POST['branch']);
$message = mysqli_real_escape_string($con,$_POST['message']);


$status='ENABLE';

	if($name=="")
	{
		echo"Please insert Name <a href='Book.php'>Back</a>";
		return;
	}



$SQL="INSERT INTO booking (name,email,date,people,phone,branch,message,status) VALUES('$name','$email','$book_date','$people','$phone','$branch','$message','PENDING')";

$run=mySQLi_query($con,$SQL);

	  $to      = 'info@abcrestuarant.com,'.$email;
    $subject = 'Thank you fro the Tabel Reservation From ABC Restuarant';
    $message = 'Customer '.$name.'<br>
	
Phone '.$phone.'<br>	
Date '.$book_date.'<br>	
People '.$people.'<br>	
Brach '.$branch.'<br>	
Message '.$message;
    $headers = 'From: info@abcrestuarant.com'       . "\r\n" .
                 'Reply-To: info@abcrestuarant.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);


echo'<script type="text/javascript">
<!--
alert("Successfully Requested");
window.location = "thankyou_booking.php"
//-->
</script>';


?>