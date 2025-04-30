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
                                <h3 class="title-5 m-b-35">Inquiries</h3>
                                
                              <div class="table-responsive">
								<table class="table">
								<thead>
								<th>Ref</th>
								<th>Name</th>
								<th>Email</th>
								<th>Phone</th>
							
								
								<th></th>
								</tr>
								</thead>
								<tbody>
								<?php										 
								include 'config/config.php'; 	
								
								
								
										$sqlid= "SELECT * FROM contact";	
								
								
								$runid=mysqli_query($con,$sqlid) or die("SQL error");	
								$norid=mysqli_num_rows($runid);	while($rowid=mysqli_fetch_array($runid))	{ 	
								?>                                            
								<tr class="tr-shadow" style="background:#fff;">                                                                                              
								<td><?php echo $rowid['id']; ?></td>                                                
								<td><?php echo $rowid['name']; ?></td>                                                
								<td><span class="block-email"><?php echo $rowid['email']; ?></span></td>
								<td class="desc"><?php echo $rowid['phone']; ?></td>
							
								
							
									<td><div class="table-data-feature">				
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $rowid['id']; ?>">
  View
</button>								                                                                                                          </div><!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $rowid['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inquary: <?php echo $order_id=$rowid['id']; ?> For <?php echo $rowid['name']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="table-responsive">
								<table class="table">
								
								<tbody>
								
								<tr>
								<td>Name</td>
								<td><?php echo $rowid['name']; ?></td>
							
								</tr>
								<tr>
								<td>Email</td>
								<td><?php echo $rowid['email']; ?></td>
							
								</tr>
								<tr>
								<td>Phone</td>
								<td><?php echo $rowid['phone']; ?></td>
							
								</tr>
								<tr>
								<td>Message</td>
								<td><?php echo $rowid['message']; ?></td>
							
								</tr>
								  <form action="contact_reply.php" method="POST">
								<tr>
								<td>Reply</td>
								<td><textarea style="border:1px solid;"class="massage-bt" id="message" placeholder="Reply" rows="5"  name="reply"><?php echo $rowid['reply']; ?></textarea></td>
							
								</tr>
								
							
								</tbody>
									</table>
      </div>
      <div class="modal-footer">
	
								<input type="hidden" value="<?php echo $rowid['email']; ?>" name="email">
								<input type="hidden" value="<?php echo $rowid['name']; ?>" name="name">
								<input type="hidden" value="<?php echo $rowid['id']; ?>" name="book_id">
							
							
								<button class="btn btn-primary" type="submit" >Reply</button>	
								</form><form action="delete_inquary.php" method="POST">
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
