<?php 
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
include 'config/mysqlicon.php';
				$name=$_POST["name"];
 $phone=$_POST["phone"];
 $email=$_POST["email"];
 $daddress=$_POST["daddress"];
 $delivery_date = $_POST['delivery_date'];
 $pay_method=$_POST["pay_method"];
 $message=$_POST["message"];
 $cus_id=$_POST["cus_id"];

				
                     $insert_order = '  
                     INSERT INTO order_main(cus_id,name, email, phone,daddress,delivery_date,pay_method,message,status)  
                     VALUES("'.$cus_id.'","'.$name.'", "'.$email.'","'.$phone.'","'.$phone.'","'.$delivery_date.'","'.$pay_method.'","'.$message.'", "PENDING")'; 
					 if(mysqli_query($con, $insert_order))  
                     {  
                          $order_id = mysqli_insert_id($con);  
                     }

				
		 $pro_id=$_POST["pro_id"];
		 $quantity=$_POST["quantity"];
		 $price=$_POST["price"];
				echo $pcount=COUNT($pro_id);
					for ($x = 0; $x <= $pcount; $x++) {
		 $pro_id=$_POST["pro_id"][$x];
		 $quantity=$_POST["quantity"][$x];
		 $price=$_POST["price"][$x];
						$order_details = '  
                     INSERT INTO order_details(order_id, item_name, qty,price)  
                     VALUES("'.$order_id.'", "'. $pro_id.'","'.$quantity.'","'.$price.'")'; 
					mysqli_query($con, $order_details);  
                    
					}
					
					$run=mysqli_query($con,$SQL);
	  $to      = 'info@abcrestuarant.com,'.$email;
    $subject = 'Thank you fro the Order From ABC Restuarant';
    $message = 'Customer '.$name.'<br>
	
Phone '.$phone.'<br>	
Address '.$daddress.'<br>	
Message '.$message;
    $headers = 'From: info@abcrestuarant.com'       . "\r\n" .
                 'Reply-To: info@abcrestuarant.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
	  echo '<script type="text/javascript">

		<!--

		alert("Successfully Updated");

		window.parent.location = "thankyou_order.php"

		//-->

		</script>' ;
	
	  ?>
	  
