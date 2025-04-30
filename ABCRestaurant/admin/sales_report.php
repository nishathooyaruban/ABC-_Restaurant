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
								
								<th>Date and Time</th>
								
								<th>Pay By</th>
								
								<th>Total</th>
								</tr>
								</thead>
								<tbody>
								<?php										 
								include 'config/config.php'; 	
								$sub_total=0;
								
								$from=$_POST['from'];
								$from = date ('Y-m-d',  strtotime($from));
								$to=$_POST['to'];
								$to = date ('Y-m-d',  strtotime($to));
										$sqlid= "SELECT * FROM order_main WHERE status='COMPLETED' AND delivery_date BETWEEN '$from' AND '$to'";	
								
								
								$runid=mysqli_query($con,$sqlid) or die("SQL error");	
								$norid=mysqli_num_rows($runid);	while($rowid=mysqli_fetch_array($runid))	{ 	
								?>                                            
								<tr class="tr-shadow" style="background:#fff;">                                                                                              
								<td><?php echo $order_id=$rowid['id']; ?></td>                                                
								<td><?php echo $rowid['name']; ?></td>                                                
							
								<td><span class="status--process"><?php echo substr($rowid['delivery_date'], 0, -7);?></span></td>
								<td><?php echo $rowid['pay_method']; ?></td>
							
									<td style="text-align:right;"><b>Rs. <?php										 
								$total_sub=0;$total=0;
								
							
								
										$sqlio= "SELECT * FROM order_details WHERE order_id='$order_id' AND qty!='0'";	
								
								
								$runio=mysqli_query($con,$sqlio) or die("SQL error");	
								$norio=mysqli_num_rows($runio);	while($rowio=mysqli_fetch_array($runio))	{ 	
								?>   
								
								
								<?php  $qty=$rowio['qty']; ?>
								<?php  $price=$rowio['price']; ?>
								<?php  $total=$price*$qty; $total_sub= $total_sub+$total; ?>
								
								
								<?php } ?>
								<?php echo $total_sub;$sub_total=$sub_total+$total_sub; ?>
								
								
    </b>
								</td>
								</tr>
								<?php } ?>
								<tr class="tr-shadow" style="background:#fff;">                                                                                              
								<td></td>                                               
								<td></td>                                                
								<td></td>                                                
							
								<td><b>Sub Total</b></td>
								<td style="text-align:right;"><b>Rs. 
								<?php echo $sub_total; ?></b></td>
								</tr>
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
