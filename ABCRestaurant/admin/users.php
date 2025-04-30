<?php include('config/header.php');?>   
<?php include('config/side_menu.php');?>   
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
                                <h3 class="title-5 m-b-35">Users table</h3>
                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add New
</button>				
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	    <form action="insert_user.php" method="POST" >
      <div class="modal-body">
   <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Username</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="username" class="form-control" required>
                                                   
                                                </div>
                                            </div>
											  
                                          
                                          <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                               
												   <input type="text" id="email-input" name="password" value="" class="form-control" required >
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">User Type</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                               <select name="u_type" class="form-control" required>
												<option value="">Select</option>
												<option value="admin">admin</option>
												<option value="user">user</option>
											   
											   </select>
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
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                
                                                <th>Username</th>
                                                <th>User Type</th>
                                             
                                                <th>Status</th>
                                             
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										 include 'config/config.php'; 
$sqlid= "SELECT * FROM login";
	$runid=mysqli_query($con,$sqlid) or die("SQL error");
	$norid=mysqli_num_rows($runid);

	while($rowid=mysqli_fetch_array($runid))
	{ 
										?>
                                            <tr class="tr-shadow">
                                              
                                                <td><?php echo $rowid['username']; ?></td>
                                                <td>
                                                    <span class="block-email"><?php echo $rowid['u_type']; ?></span>
                                                </td>
                                              
                                                <td>
                                                    <span class="status--process"><?php echo $rowid['status']; ?></span>
                                                </td>
                                               
                                             <td><div class="table-data-feature">
											 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $rowid['id']; ?>">Edit</button>				
<div class="modal fade" id="exampleModal<?php echo $rowid['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	    <form action="update_user_admin.php" method="POST" >
      <div class="modal-body">
   <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Username</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="username" value="<?php echo $rowid['username']; ?>"class="form-control" required>
                                                   <input type="hidden" value="<?php echo $rowid['id']; ?>" name="user_id">
                                                </div>
                                            </div>
											  
                                          
                                          <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                               
												   <input type="password" id="email-input" name="password" value="<?php echo $rowid['password']; ?>" class="form-control" required >
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">User Type</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                               <select name="u_type" class="form-control" required>
											   
											   <?php  $u_type=$rowid['u_type']; ?>
											  <?php  if($u_type=='admin'){ ?>
												<option value="">Select</option>
												<option value="admin" selected>admin</option>
												<option value="user">user</option>
											   <?php } ?>
											    <?php  if($u_type=='user'){ ?>
												<option value="">Select</option>
												<option value="admin" >admin</option>
												<option value="user"selected>user</option>
											   <?php } ?>
											   </select>
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Status</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                               <select name="status" class="form-control" required>
											   
											   <?php  $status=$rowid['status']; ?>
											  <?php  if($status=='ENABLE'){ ?>
												<option value="">Select</option>
												<option value="ENABLE" selected>ENABLE</option>
												<option value="DISABLE">DISABLE</option>
											   <?php } ?>
											    <?php  if($status=='DISABLE'){ ?>
												<option value="">Select</option>
												<option value="ENABLE" >ENABLE</option>
												<option value="DISABLE"selected>DISABLE</option>
											   <?php } ?>
											   </select>
                                                </div>
                                            </div>
                                          
      <div class="modal-footer">
	
								
								<button class="btn btn-primary" type="submit" >Update</button>	
								</form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
																							                                                                                                          </div>
								</td>
                                            </tr>
                                            <tr class="spacer"></tr>
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
