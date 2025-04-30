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
								
								
								<th></th>
								</tr>
								</thead>
								<tbody>
								<?php										 
								include 'config/config.php'; 	
								
								date_default_timezone_set('Asia/colombo'); $created_on=date('Y-m-d');	
								
										$sqlid= "SELECT * FROM customer";	
								
								
								$runid=mysqli_query($con,$sqlid) or die("SQL error");	
								$norid=mysqli_num_rows($runid);	while($rowid=mysqli_fetch_array($runid))	{ 	
								?>                                            
								<tr class="tr-shadow" style="background:#fff;">                                                                                              
								<td><?php echo $cus_id=$rowid['id']; ?></td>                                                
								<td><?php echo $rowid['name']; ?></td>                                                
								<td><span class="block-email"><?php echo $rowid['email']; ?></span></td>
								<td class="desc"><?php echo $rowid['phone']; ?></td>
								
							
									<td><div class="table-data-feature">			
    <form action="customer_oders.php" method="POST" id="all_details">

  <input type="hidden" name="cus_id" id="cus_id" value="<?php echo $cus_id; ?>" />			
  		 <button type="submit" class="btn btn-primary">
 View Orders
</button>
 	
						</form>
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
