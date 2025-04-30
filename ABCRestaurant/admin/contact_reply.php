<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);


 include 'config/config.php'; 
$book_id =$_POST['book_id'];

$reply =$_POST['reply'];
$name =$_POST['name'];
$email =$_POST['email'];





$update="UPDATE `contact` SET reply = '".$reply."'  WHERE id = '".$book_id."'";

$run=mysqli_query($con, $update);


  $to      = $email;
    $subject = 'Thank you fro the inquary From ABC Restuarant';
    $message = 'Dear, '.$name.'<br>
	
Message '.$reply;
    $headers = 'From: info@abcrestuarant.com'       . "\r\n" .
                 'Reply-To: info@abcrestuarant.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

	  



echo '<script type="text/javascript">

		<!--

		alert("Successfully Updated");

		window.parent.location = "inquiries.php"

		//-->

		</script>' ;
	
?>
