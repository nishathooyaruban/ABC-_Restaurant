<!DOCTYPE html>
<html lang="en">
   <head><?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);   
session_start();
$cus_id=$_SESSION['cus_id'];
?>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>ABC Restaurant</title>
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
                      <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
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
      <!--header section end -->
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div class="container">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital">
                              <h1 class="outstanding_text">Outstanding</h1>
                              <h1 class="coffee_text">Restaurant</h1>
                              <p class="there_text">Indulge in a culinary journey with our exceptional dining experience. From our hand-picked ingredients to our chef's artistic creations, every dish is a masterpiece. Our attentive service and elegant ambiance create the perfect setting for unforgettable moments. </p>

                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital">
                              <h1 class="outstanding_text">More than a meal </h1>
                              <h1 class="coffee_text">It's an experienc</h1>
                              <p class="there_text">Indulge in a culinary journey with our exceptional dining experience. From our hand-picked ingredients to our chef's artistic creations, every dish is a masterpiece. Our attentive service and elegant ambiance create the perfect setting for unforgettable moments. </p>
                              
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital">
                              <h1 class="outstanding_text">Unwind in our stylish </h1>
                              <h1 class="coffee_text">Modern space</h1>
                              <p class="there_text">Indulge in a culinary journey with our exceptional dining experience. From our hand-picked ingredients to our chef's artistic creations, every dish is a masterpiece. Our attentive service and elegant ambiance create the perfect setting for unforgettable moments. </p>
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- banner section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_taital_main">
                     <div class="about_taital">About Us</div>
                     <p class="about_text">Our story began in 2006 with a passion for Italian cuisine. We've been serving Colombo-3 with delicious food and warm hospitality ever since.</p>
                     <p class="about_text">Our goal is to create an unforgettable dining experience for every guest.Join us for a memorable dining experience...</p>
                     <a href="Book.php" class="btn btn-primary py-2 px-4">Book A Table</a>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about_img"><img src="images/about-1.jpg"></div>
               </div>
            
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- gallery section start -->
      <div class="gallery_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="gallery_taital">Our Gallery</h1>
                  <p class="gallery_text">Our curated collection showcases diverse styles and mediums. Immerse yourself in creativity and inspiration.</p>
               </div>
            </div>
            <div class="">
               
               <div class="gallery_section_2">
                  <div class="row">
				  	   <?php										 
								include 'admin/config/config.php'; 	
								
								
										$sqlid= "SELECT * FROM gallery ORDER BY id DESC LIMIT 6";	
								
								
								$runid=mysqli_query($con,$sqlid) or die("SQL error");	
								$norid=mysqli_num_rows($runid);	while($rowid=mysqli_fetch_array($runid))	{ 	
								?>   
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="images/<?php echo $rowid['img']; ?>" alt="Avatar" class="image">
						   <br>
                           <div class="overlay">
                              <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                           <?php } ?>
                  </div>
               </div>
            
            </div>
            
         </div>
      </div>
      <!-- gallery section end -->
      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="services_taital">Services</h1>
                  <p class="services_text">Indulge in a culinary journey with our exceptional dining experience. From our hand-picked ingredients to our chef's artistic creations, every dish is a masterpiece. Our attentive service and elegant ambiance create the perfect setting for unforgettable moments. </p>
               </div>
            </div>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main active">
                        <div class="house_icon">
                           <img src="images/icon2.png.png" class="image_1">
                           <img src="images/icon2.png.png" class="image_2">
                        </div>
                        <h3 class="decorate_text">Master chef</h3>
                        <p class="tation_text">Their culinary journey, marked by local and international awards, has honed their skills to perfection.  </p>
                        
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main">
                        <div class="house_icon">
                           <img src="images/icon3.png.png" class="image_1">
                           <img src="images/icon3.png.png" class="image_2">
                        </div>
                        <h3 class="decorate_text">Quality food</h3>
                        <p class="tation_text">We believe that quality is the cornerstone of every exceptional dining experience. </p>
                        
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main">
                        <div class="house_icon">
                           <img src="images/icon1.png.png" class="image_1">
                           <img src="images/icon1.png.png" class="image_2">
                        </div>
                        <h3 class="decorate_text">Pleasant ambience</h3>
                        <p class="tation_text">A pleasant ambiance is more than just a pretty space; it's an experience that lingers in the memory long after the last bite. </p>
                       
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- services section end -->
   
      <!-- query form start -->
   
      <div class="contact_section layout_padding">
         <div class="container">
            <h1 class="contact_text">Contact Us</h1>
         </div>
      </div>
      <div class="contact_section_2 layout_padding">
         <div class="container-fluid">
            <div class="row">
             <div class="col-md-6 padding_0">
			   <form action="thankyou_contact.php" method="post">
                  <div class="mail_section">
                     <div class="email_text">
                        <div class="form-group">
                           <input type="text" id="name"class="email-bt" placeholder="Name" name="name" required >
                        </div>
                        <div class="form-group">
                           <input type="text" id="email" class="email-bt" placeholder="Email" name="email" required>
                        </div>
                        <div class="form-group">
                           <input type="text" id="message"class="email-bt" placeholder="Phone Number" name="phone" required>
                        </div> 
                        <div class="form-group">
                           <textarea class="massage-bt" id="message" placeholder="Message" rows="5"  name="message"></textarea>
                        </div>
                        <div class="send_btn">
                           <div type="text"id="form-submit" class="main_bt">
						   <button class="btn btn-primary" type="submit" >SEND</button>	
						   
						   </div>
                        </div>
                     </div>
                  </div>
               </form>
               </div>
           
               <div class="col-md-6 padding_0">
                  <div class="map-responsive">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.693769976341!2d79.84212147480966!3d6.92716009307263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bcfdee7764d%3A0xdf97fbb66912b0c5!2sOne%20Galle%20Face%20Mall!5e0!3m2!1sen!2slk!4v1722654239578!5m2!1sen!2slk" width="600" height="508" frameborder="0" style="border:0 ;width: 100%;" allowfullscreen></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
   
      <!-- query form end -->
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