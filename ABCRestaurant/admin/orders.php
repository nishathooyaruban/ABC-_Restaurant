<?php include('config/header.php');?>   
<?php include('config/side_menu.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>   
<style>

.modal-dialog {
        max-width: 500px;
        margin: 1.75rem auto;
        z-index: 99999;
        position: relative;
        top: 24%;
    }
	.modal-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 0;
    background-color: #000;
}
</style>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Orders table</h3>
                                
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
								include 'config/config.php'; 	
								
								date_default_timezone_set('Asia/colombo'); $created_on=date('Y-m-d');	
								
										$sqlid= "SELECT * FROM order_main ORDER BY delivery_date DESC";	
								
								
								$runid=mysqli_query($con,$sqlid) or die("SQL error");	
								$norid=mysqli_num_rows($runid);	while($rowid=mysqli_fetch_array($runid))	{ 	
								?>                                            
								<tr class="tr-shadow" style="background:#fff;">                                                                                              
								<td><?php echo $rowid['id']; ?></td>                                                
								<td><?php echo $rowid['name']; ?></td>                                                
								<td><span class="block-email"><?php echo $rowid['email']; ?></span></td>
								<td class="desc"><?php echo $rowid['phone']; ?></td>
								<td><span class="status--process"><?php echo substr($rowid['delivery_date'], 0, -7);?></span></td>
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
	  <form action="accept_order.php" method="POST">
								<input type="hidden" value="<?php echo $rowid['id']; ?>" name="book_id">
								<input type="hidden" value="<?php echo $rowid['name']; ?>" name="name">
								<input type="hidden" value="<?php echo $rowid['email']; ?>" name="email">
								<button class="btn btn-primary" type="submit" >Complete</button>	
								</form><form action="cancel_order.php" method="POST">
								<input type="hidden" value="<?php echo $rowid['id']; ?>" name="book_id">
								<input type="hidden" value="<?php echo $rowid['name']; ?>" name="name">
								<input type="hidden" value="<?php echo $rowid['email']; ?>" name="email">
								<button class="btn btn-success" type="submit" >Cancel</button>	
								</form>	<form action="delete_order.php" method="POST">
								<input type="hidden" value="<?php echo $rowid['id']; ?>" name="book_id">
								
								<button class="btn btn-danger" type="submit" >Delete</button>	
								</form>	
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
        </div>
<?php include('config/footer.php');?>
