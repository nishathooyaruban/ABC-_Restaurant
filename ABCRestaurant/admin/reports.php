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
                                <h3 class="title-5 m-b-35">Sales By Orders</h3>
                                
                              <div class="table-responsive">
							  <form action="sales_report.php" method="POST" id="all_details">
								<table class="table">
								<th>From</th>
								<th>To</th>
							
								
								
								<th></th>
								</tr>
								</thead>
								<tbody>
							                                           
								<tr class="tr-shadow" style="background:#fff;">                                                                                              
								<td><input type="date" class="datepicker" name="from"></td>                                                
								<td><input type="date" class="datepicker" name="to"></td>                                                
								
							
								
							
									<td><div class="table-data-feature">			
    

 
  		 <button type="submit" class="btn btn-primary">
Search
</button>
 	
						
	                                                                                                </div>
								</td>
								</tr>
								</tbody>
								</table>
								</form>
								</div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                       
                  
                    </div>
                </div>
            </div>
        </div>
<?php include('config/footer.php');?>
