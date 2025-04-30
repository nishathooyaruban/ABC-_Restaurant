<!DOCTYPE html>
<html lang="en">
<?php 
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
session_start();
$cus_id=$_SESSION['cus_id']; 
?> <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>About</title>
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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
	  <link rel="stylesheet" href="css/style1.css">
	  <style>
.btn-primary {
    height: 55px;
    font-size: 20px !important;
    padding: 10px 15px !important;;
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
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item ">
                        <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <li class="nav-item ">
                        <a class="nav-link" href="about.php">About Us</a>
                     </li>
                     <li class="nav-item">
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
                  <li class="nav-item active">
                        <a class="nav-link" href="signup.php">Sign in</a>
                     </li>
				  <?php }else{ ?>
					 <li class="nav-item active">
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
      <!--header section end -->
      
	   <div class="col-md-12 col-sm-12">
	    <form action="order.php" method="POST" id="all_details">

  <input type="hidden" name="cus_id" id="cus_id" value="<?php echo $cus_id; ?>" />			
  		 <button type="submit" class="btn btn-primary">
  Create New Order
</button>
 	
						</form>
	  
	    
		
        <h2>My Oders</h2>
		 <div class="table-responsive">
								<table class="table">
								<thead>
								<th>Order</th>
								<th>Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Date and Time</th>
								<th>Address</th>
								<th>Pay by</th>
								<th>Message</th>
								<th>status</th>
								
								<th></th>
								</tr>
								</thead>
								<tbody>
								<?php										 
								include 'config/mysqlicon.php'; 	
							
							
								
										$sqlid= "SELECT * FROM order_main WHERE cus_id='$cus_id' ORDER BY delivery_date DESC";	
								
								
								$runid=mysqli_query($con,$sqlid) or die("SQL error");	
								$norid=mysqli_num_rows($runid);	while($rowid=mysqli_fetch_array($runid))	{ 	
								?>                                            
								<tr class="tr-shadow" style="background:#fff;">                                                                                              
								<td><?php echo $rowid['id']; ?></td>                                                
								<td><?php echo $rowid['name']; ?></td>                                                
								<td><span class="block-email"><?php echo $rowid['email']; ?></span></td>
								<td class="desc"><?php echo $rowid['phone']; ?></td>
								<td><span class="status--process"><?php echo $rowid['delivery_date']; ?></span></td>
								<td><?php echo $rowid['daddress']; ?></td>
								<td><?php echo $rowid['pay_method']; ?></td>
								<td><?php echo $rowid['message']; ?></td>
								<td><span class="status--process"><?php echo $rowid['status']; ?></span></td>
							
									<td><div class="table-data-feature">				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $rowid['id']; ?>">
  View
</button>								                                                                                                          </div><!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $rowid['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Order: <?php echo $order_id=$rowid['id']; ?> For <?php echo $rowid['name']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="table-responsive">
								<table class="table">
								<thead>
								<tr>
								<th>Item</th>
								<th>Qty</th>
								<th>Price</th>
								<th>Total</th>
								
								</tr>
								</thead>
								<tbody>
								<?php										 
								$total_sub=0;$total=0;
								
							
								
										$sqlio= "SELECT * FROM order_details WHERE order_id='$order_id' AND qty!='0'";	
								
								
								$runio=mysqli_query($con,$sqlio) or die("SQL error");	
								$norio=mysqli_num_rows($runio);	while($rowio=mysqli_fetch_array($runio))	{ 	
								?>   
								<tr>
								<td><?php  $item_name=$rowio['item_name'];
								$sqlit= "SELECT * FROM food_items WHERE id='$item_name' ";	
								
								
								$runit=mysqli_query($con,$sqlit) or die("SQL error");	
								$norit=mysqli_num_rows($runit);	while($rowit=mysqli_fetch_array($runit))	{ 	
								echo $rowit['name'];
								}
								?></td>
								<td><?php echo $qty=$rowio['qty']; ?></td>
								<td><?php echo $price=$rowio['price']; ?></td>
								<td><?php echo $total=$price*$qty; $total_sub= $total_sub+$total; ?></td>
								
								</tr>
								<?php } ?>
								<tr>
								<td></td>
								<td></td>
								<td></td>
								<td><?php echo $total_sub; ?></td>
								
								</tr>
								</tbody>
									</table>
      </div>
      <div class="modal-footer">
	
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
								</td>
								</tr>
								<?php } ?>
								</tbody>
								</table>
								</div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                       
                  
                    
                </div>
       
    </div>
    </div>
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
         
            
         
        
         <!-- Javascript files-->
         <script src="js/jquery.min.js"></script>
         <script src="js/popper.min.js"></script>
         <script src="js/bootstrap.bundle.min.js"></script>
         <script src="js/jquery-3.0.0.min.js"></script>
         <script src="js/plugin.js"></script>
         <!-- sidebar -->
         <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
         <script src="js/custom.js"></script>     
      </body>
   </html>
      <!-- footer section end -->
    
   