<?php include('config/header.php');?>   
<?php include('config/side_menu.php');?>   

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
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
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Menu Items</h3>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add New
</button>				
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	    <form action="create_item.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
   <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="name" class="form-control" required>
                                                   
                                                </div>
                                            </div>
											  
                                          
                                          <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">price</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                               
												   <input type="text" id="email-input" name="price" value="" class="form-control" required >
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Offer</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                               <select name="sp" class="form-control" required>
												<option value="">Select</option>
												<option value="1">Yes</option>
												<option value="0">No</option>
											   
											   </select>
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Image</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="item_img" class="form-control-file">
                                                </div>
                                            </div>
                                          
      <div class="modal-footer">
	
								
								<button class="btn btn-primary" type="submit" >Create</button>	
								</form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
							
								</div>				                                                   
                              <div class="table-responsive">
								<table class="table">
								<thead>
								<th>Name</th>
								<th>Image</th>
								<th>Price</th>
								
								
								<th></th>
								</tr>
								</thead>
								<tbody>
								<?php										 
								include 'config/config.php'; 	
								
								
										$sqlid= "SELECT * FROM food_items";	
								
								
								$runid=mysqli_query($con,$sqlid) or die("SQL error");	
								$norid=mysqli_num_rows($runid);	while($rowid=mysqli_fetch_array($runid))	{ 	
								?>                                            
								<tr class="tr-shadow" style="background:#fff;">                                                                                              
								<td><?php echo $rowid['name']; ?></td>                                                
								<td><img src="../images/<?php echo $rowid['img']; ?>" style="width:150px;height:150px;object-fit:cover;"></td>
								<td class="desc">
								<form action="update_price.php" method="POST">
								<input type="hidden" value="<?php echo $rowid['id']; ?>" name="item_id">
								
							
								<input type="text" style="width: 115px;text-align: right; float: left;"id="email-input" name="price" value="<?php echo $rowid['price']; ?>" class="form-control" required >
									<button class="btn btn-primary" type="submit" >Save</button>	
								</form>
								</td>
								<td><div class="table-data-feature"><form action="delete_item.php" method="POST">
								<input type="hidden" value="<?php echo $rowid['id']; ?>" name="item_id">
							
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
