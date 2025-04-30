<!DOCTYPE html>
<html>
<head>

<?php 
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
session_start();
$cus_id=$_SESSION['cus_id'];
 unset($_SESSION["shopping_cart"]); 
?> 
     <!-- basic -->
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- mobile metas -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title> Menu</title>
    <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="css/style1.css">
	     <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
		 <style>
		 .heading>h1 {
    font-weight: 400;
    font-size: 30px;
    letter-spacing: 10px;
    margin-bottom: 10px;
    color: #000;
}
label {
    display: inline-flex;
    margin-bottom: 5px;
    font-weight: 700;
    width: auto;
    margin-right: 20px;
}
button {
    padding: 15px;
    border-radius: 10px;
    margin-top: 15px;
    margin-bottom: 15px;
    border: none;
    color: white ! IMPORTANT;
    cursor: pointer;
    background-color: #007bff;
    width: 100%;
    font-size: 16px;
}
.btn-primary {
    height: 55px;
    font-size: 20px !important;
    padding: 15px 15px !important;;
    width: 100%;
    border-radius: 10px !important;;
	background-color: #007bff !important;;
}
    .navbar-nav>li {
        float: left;
        margin-left: 10px;
    }

	 
		 </style>
</head>
<body>
    <!--header section start -->
    <div class="header_section">
        <div class="container-fluid">
           <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav ml-auto" style="float:right;">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                     </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="menu.php">Menu</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                     </li>
                     <li class="nav-item">
                     <a href="Book.php" class="btn btn-primary py-2 px-4">Book A Table</a>
                  </li>
                <?php if($cus_id==''){?>
                  <li class="nav-item ">
                        <a class="nav-link" href="signup.php">Sign in</a>
                     </li>
				  <?php }else{ ?>
					 <li class="nav-item ">
                        <a class="nav-link" href="my_account.php">My Acount</a>
                     </li><li class="nav-item ">
                        <a class="nav-link" href="logout.php">Log Out</a>
                     </li>
					  <?php } ?>
                 
                    <li class="nav-item">
                       <a class="nav-link" href="search.php"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </li>
                 </ul>
              </div>
           </nav>
        </div>
     </div>
    
   
	<form action="insert_order.php" method="POST">
    <div class="menu" style="float:left;width:100%">
	 <div class="col-md-7" style="float:left;">
	 <div class="col-md-12 col-sm-12" style="float:left;">	
        <div class="heading">
           
            <h1>Taste all our menu! </h1>
        </div>
        </div>
		<?php										 
								include 'config/mysqlicon.php'; 	
								
			
								
										$sqlid= "SELECT * FROM food_items WHERE sp='0'";	
								
								
								$runid=mysqli_query($con,$sqlid) or die("SQL error");	
								$norid=mysqli_num_rows($runid);	while($rowid=mysqli_fetch_array($runid))	{ 	
								?>    
								 <div class="col-md-6 col-sm-12" style="float:left;">
        <div class="food-items" style="margin-bottom:10px;margin-top:10px;background:#fff;">
            <img src="images/<?php echo $rowid['img']; ?>">
            <div class="details">
                <div class="details-sub">
                    <h5><?php echo $rowid['name']; ?><input type="hidden" name="hidden_name" id="name<?php echo $rowid["id"]; ?>" value="<?php echo $rowid["name"]; ?>" /> </h5>
                    <h5 class="price"> Rs.<?php echo $rowid['price']; ?>
					<input type="hidden" name="hidden_price" id="price<?php echo $rowid["id"]; ?>" value="<?php echo $rowid["price"]; ?>" style="width:70px;"class="form-control"/></h5>
                </div>
                <div class="row" >
               <div class="col-md-6" style="width:50%; float:left;">QTY: <input type="number" name="quantity" id="quantity<?php echo $rowid["id"]; ?>" class="form-control" value="0"  style="width:70px;"/></div>
               <div class="col-md-6" style="width:49%; float:left;"><button type="button" id="<?php echo $rowid["id"]; ?>" class="add_to_cart"style="color;#fff !important;">Add To Cart</button></div>
            </div>
            </div>
        </div>
        </div>

      <?php } ?>
	   <div class="col-md-12 col-sm-12" style="float:left;">	
      <div class="heading">
           
        <h1> Enjoy our seasonal offers ! </h1>
    </div> 
    </div> 
     
       <?php										 
								include 'config/mysqlicon.php'; 	
								
			
								
										$sqlid= "SELECT * FROM food_items WHERE sp='1'";	
								
								
								$runid=mysqli_query($con,$sqlid) or die("SQL error");	
								$norid=mysqli_num_rows($runid);	while($rowid=mysqli_fetch_array($runid))	{ 	
								?>  
 <div class="col-md-6 col-sm-12" style="float:left;">								
           <div class="food-items"style="margin-bottom:10px;margin-top:10px;background:#fff;">
            <img src="images/<?php echo $rowid['img']; ?>">
            <div class="details">
                <div class="details-sub">
                    <h5><?php echo $rowid['name']; ?><input type="hidden" name="hidden_name" id="name<?php echo $rowid["id"]; ?>" value="<?php echo $rowid["name"]; ?>" /> </h5>
                    <h5 class="price"> Rs.<?php echo $rowid['price']; ?>
					<input type="hidden" name="hidden_price" id="price<?php echo $rowid["id"]; ?>" value="<?php echo $rowid["price"]; ?>" style="width:70px;"class="form-control"/></h5>
                
			   <div class="row" >
               <div class="col-md-6" style="width:50%; float:left;">QTY: <input type="number" name="quantity" id="quantity<?php echo $rowid["id"]; ?>" class="form-control" value="0"  style="width:70px;"/></div>
               <div class="col-md-6" style="width:49%; float:left;"><button type="button" id="<?php echo $rowid["id"]; ?>" class="add_to_cart"style="color;#fff !important;">Add To Cart</button></div>
            </div>
            </div>
        </div>
        </div>
        </div>

      <?php } ?>
             

    </div>
 
	 <div  class="col-md-5" style="padding-right:75px;">
                          <div class="table-responsive" id="order_table" style="background:#fff">  
						    <h4 style="margin-left:10px;">Order Details</h4>
                               <table class="table table-bordered">  
                                    <tr>  
                                         <th width="30%">Name</th>  
                                         <th width="20%">QTY</th>  
                                         <th width="20%">Price (Rs)</th>  
                                         <th width="15%">Total (Rs)</th>  
                                         <th width="5%">Action</th>  
                                    </tr>  
                                    <?php  
					
                 
                                    if(!empty($_SESSION["shopping_cart"]))  
                                    {  
                                         $total = 0;  
                                         foreach($_SESSION["shopping_cart"] as $keys => $values)  
                                         {                                               
                                    ?>  
                                    <tr>  
                                         <td><?php echo $values["product_name"]; ?>
										<input type="hidden" name="pro_id[]" id="named<?php echo $values["product_name"]?>" value="<?php echo $values["product_id"];?>" /> </td>  
                                         <td><input type="text" name="quantity[]" id="quantity<?php echo $values["product_id"]; ?>" value="<?php echo $values["product_quantity"]; ?>" data-product_id="<?php echo $values["product_id"]; ?>" class="form-control quantity" /></td>  
                                         <td align="right">
										 <input type="text" name="price[]" id="pric<?php echo $values["product_id"]; ?>" value="<?php echo $values["product_price"]; ?>"  class="form-control pric" />
										 
										 </td>  
                                         <td align="right"><?php echo number_format($values["product_quantity"] * $values["product_price"], 2); ?></td>  
                                         <td><button name="delete" class="btn btn-danger btn-xs delete" id="<?php echo $values["product_id"]; ?>">Remove</button></td>  
                                    </tr>  
                                    <?php  
                                              $total = $total + ($values["product_quantity"] * $values["product_price"]);  
                                         }  
                                    ?>  
                                    <tr>  
                                         <td colspan="3" align="right">Total</td>  
                                         <td align="right">Rs <?php echo number_format($total, 2);?><input type="hidden" class="myclass" value="<?php echo $total; ?>" id="tot_cost"></td>  
                                         <td></td>  
                                    </tr>  
                                    <tr>  
       
                                    </tr>  
                                    <?php  
                                    }  
                                    ?>  
                               </table>  
							    
                          </div> 
						  <div class="table-responsive"  style="background:#fff" id="customer_table"> 
						  <h4 style="margin-left:10px;">Customer Details</h4>
				<table class="table table-bordered" >   
				 
					


	
								
                                      <?php										 
								include 'config/mysqlicon.php'; 	
								
			$cus_id=$_POST['cus_id'];
								
										$sqlcu= "SELECT * FROM customer WHERE id='$cus_id'";	
								
								
								$runcu=mysqli_query($con,$sqlcu) or die("SQL error");	
								$norcu=mysqli_num_rows($runcu);	while($rowcu=mysqli_fetch_array($runcu))	{ 	
								?>  
									
									
									<tr>  
                                         <td width="30%">Customer Name</td>  
                                         <td width="70%"><input type="text" name="name" value="<?php echo $rowcu['name']; ?>"class="form-control" required /><input type="hidden" name="cus_id" value="<?php echo $cus_id; ?>"class="form-control" required /></td>  
                                       
                                    </tr><tr>  
                                         <td width="30%">Phone</td>  
                                         <td width="70%"><input type="text" name="phone" value="<?php echo $rowcu['phone']; ?>"class="form-control" required /></td>  
                                       
                                    </tr><tr>  
                                         <td width="30%">Email</td>  
                                         <td width="70%"><input type="text" name="email" value="<?php echo $rowcu['email']; ?>"class="form-control" required /></td>  
                                       
                                    </tr>
								<?php } ?>
									<tr>  
                                         <td width="30%">Delivery Address</td>  
                                         <td width="70%"><input type="text" name="daddress" value=""class="form-control" required /></td>  
                                       
                                    </tr>
								
					
							
	
								
								<tr>  
                                         <td width="30%">Delivry Date and time</td>  
                                         <td width="70%"><input type="text" class="form-control"id="date-time-picker"name="delivery_date" placeholder="Date and Time" autocomplete="off" value="<?php echo date("Y-m-d H:i:s"); ?>" required /></td>  
																   
										</tr>
										
<tr class="pay_online">  
                                         <td width="30%">Pay Online</td>  
                                         <td width="70%"><label>Visa/Master<input type="radio" value="Visa_Master_online" name="pay_method"></label><label>Amex<input type="radio" value="Amex_online" name="pay_method"></label></td>  
																   
										</tr>
<tr class="pay_delivery">  
                                         <td width="30%">Pay on Delivery</td>  
                                         <td width="70%"><label>Visa/Master<input type="radio" value="Visa_Master_Delvery" name="pay_method"></label><label>Amex<input type="radio" value="Amex_Delvery" name="pay_method"></label><label>Cash<input type="radio" value="Cash_Delvery" name="pay_method"></label>
										 </td>  
																   
										</tr>
<tr>  
                                         <td width="30%">Message</td>  
                                         <td width="70%"><textarea name="message" class="form-control" ></textarea></td>  
                                       
                                    </tr>										
<tr>  
                     <td colspan="5" align="center">  
                               <input type="submit" name="place_order" class="btn btn-warning" value="Place Order" />  
                          
                     </td>  
                </tr> 
                               </table>	
						   
                     </div>  
                     </div>  
					    </div>
					   </form>
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
           <div class="row">
              <div class="col-lg-3 col-sm-6">
                 <h3 class="useful_text">About</h3>
                 <p class="footer_text">Our goal is to create an unforgettable dining experience for every guest.Join us for a memorable dining experience...</p>
              </div>
              <div class="col-lg-3 col-sm-6">
                 <h3 class="useful_text">Menu</h3>
                 <div class="footer_menu">
                    <ul>
                    <li><a href="index.php">Home</a></li>
                           <li><a href="about.php">About Us</a></li>
                           <li><a href="menu.php">Menu</a></li>
                           <li><a href="gallery.php">Gallery</a></li>
                           <li><a href="services.php">Services</a></li>
                           <li><a href="contact.php">Contact Us</a></li>
                           <li><a href="Book.php">Book a table</a></li>
                    </ul>
                 </div>
              </div>
              
              <div class="col-lg-3 col-sm-6">
                 <h1 class="useful_text">Contact Us</h1>
                 <div class="location_text">
                    <ul>
                       <li>
                          <a href="#">
                          <i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_10">Address no:1,Sridhrmarama road,Colombo-3</span>
                          </a>
                       </li>
                       <li>
                          <a href="#">
                          <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">Call : +011-67788888</span>
                          </a>
                       </li>
                       <li>
                          <a href="#">
                          <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">Email : abcrestaurant@gmail.com</span>
                          </a>
                       </li>
                    </ul>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!-- footer section end -->
      <!-- footer section end -->
       
  <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"
            integrity=
"sha512-DUC8yqWf7ez3JD1jszxCWSVB0DMP78eOyBpMa5aJki1bIRARykviOuImIczkxlj1KhVSyS16w2FSQetkD4UU2w=="
crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <!-- Bootstrap CSS CDN -->
    <link href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          rel="stylesheet"/> 
    <!-- Bootstrap JS CDN --> 
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
    </script>
    <!-- Moment.js CDN -->
    <script type="text/javascript"
            src=
"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js">
    </script>
 
    <!-- Bootstrap Datetimepicker CSS CDN -->
    <link href=
"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css"
          rel="stylesheet"/>
    <!-- Bootstrap datetimepicker JS CDN -->   
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js">
   </script>
     <script type="text/javascript">
      $("#date-time-picker").datetimepicker({ format:'YYYY-MM-DD HH:mm:ss', sideBySide: true,});
    </script>
    
      
	
		
     <script>  
 $(document).ready(function(data){  
      $('.add_to_cart').click(function(){  
           var product_id = $(this).attr("id");  
           var product_name = $('#name'+product_id).val();  
           var product_price = $('#price'+product_id).val();  
           var product_quantity = $('#quantity'+product_id).val();  
           var action = "add";  
           if(product_quantity > 0)  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{  
                          product_id:product_id,   
                          product_name:product_name,   
                          product_price:product_price,
                          product_quantity:product_quantity,  
                          action:action  
                     },  
                     success:function(data)  
                     {  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                         // alert("Product has been Added into Cart");  
						 document.getElementById("myInput2").focus();
                     }  
                });  
           }  
           else  
           {  
                alert("Please Enter Number of Quantity")  
           }  
      });  
      $(document).on('click', '.delete', function(){  
           var product_id1 = $(this).attr("id");  
		   var product_name1 = $('#named'+product_id1).val();  
           var action = "remove";  
		  
           if(confirm("Are you sure you want to remove this product?"))  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{
					 product_id:product_id1,
					 product_name1:product_name1,
					 action:action
					 },  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                     }  
                });  
           }  
           else  
           {  
                return false;  
           }  
      });  
 
	
 });  
 </script>

     <!-- Javascript files-->
   
  </body>
</html>
  <!-- footer section end -->


</body>
</html>