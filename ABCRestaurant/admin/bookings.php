<?php include('config/header.php');?>   
<?php include('config/side_menu.php');?>   

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Bookings table</h3>
                                
                              <div class="table-responsive">
								<table class="table">
								<thead>
								<th>Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Date and Time</th>
								<th>People</th>
								<th>Branch</th>
								<th>Message</th>
								<th>status</th>
								
								<th></th>
								</tr>
								</thead>
								<tbody>
								<?php										 
								include 'config/config.php'; 	
								
								date_default_timezone_set('Asia/colombo'); $created_on=date('Y-m-d');	
								
										$sqlid= "SELECT * FROM booking ORDER BY date DESC";	
								
								
								$runid=mysqli_query($con,$sqlid) or die("SQL error");	
								$norid=mysqli_num_rows($runid);	while($rowid=mysqli_fetch_array($runid))	{ 	
								?>                                            
								<tr class="tr-shadow" style="background:#fff;">                                                                                              
								<td><?php echo $rowid['name']; ?></td>                                                
								<td><span class="block-email"><?php echo $rowid['email']; ?></span></td>
								<td class="desc"><?php echo $rowid['phone']; ?></td>
								<td><span class="status--process"><?php echo substr($rowid['date'], 0, -7);?></span></td>
								<td><?php echo $rowid['people']; ?></td>
								<td><?php echo $rowid['branch']; ?></td>
								<td><?php echo $rowid['message']; ?></td>
								<td><span class="status--process"><?php echo $rowid['status']; ?></span></td>
							
									<td><div class="table-data-feature"><form action="accept_booking.php" method="POST">
								<input type="hidden" value="<?php echo $rowid['id']; ?>" name="book_id">
								<input type="hidden" value="<?php echo $rowid['name']; ?>" name="name">
								<input type="hidden" value="<?php echo $rowid['email']; ?>" name="email">
								<button class="btn btn-primary" type="submit" >Accept</button>	
								</form><form action="decline_booking.php" method="POST">
								<input type="hidden" value="<?php echo $rowid['id']; ?>" name="book_id">
								<input type="hidden" value="<?php echo $rowid['name']; ?>" name="name">
								<input type="hidden" value="<?php echo $rowid['email']; ?>" name="email">
								<button class="btn btn-success" type="submit" >Decline</button>	
								</form><form action="delete_bookings.php" method="POST">
								<input type="hidden" value="<?php echo $rowid['id']; ?>" name="book_id">
							
								<button class="btn btn-danger" type="submit" >Delete</button>	
								</form>													                                                                                                          </div>
								</td>
								</tr>
								<?php } ?>
								</table>
								</div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                       
                  
                    </div>
                </div>
            </div>
        </div>
<?php include('config/footer.php');?>
