<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);


 include 'config/config.php'; 
$book_id =$_POST['book_id'];

$email =$_POST['email'];
$name =$_POST['name'];

date_default_timezone_set('Asia/colombo');



 $created_on=date('Y-m-d h:i:s');


$update="UPDATE `booking` SET status = 'ACCEPTED' WHERE id = '".$book_id."'";

$run=mysqli_query($con, $update);


    $to      = $email;
    $subject = 'Table Booking Accepted From ABC Restuarant';
    $message = 'Dear '.$name.'<br> Your table is reserved' ;
    $headers = 'From: info@abcrestuarant.com'       . "\r\n" .
                 'Reply-To: info@abcrestuarant.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);


echo '<script type="text/javascript">

		<!--

		alert("Booking Accepted");

		window.parent.location = "bookings.php"

		//-->

		</script>' ;
	
?>
