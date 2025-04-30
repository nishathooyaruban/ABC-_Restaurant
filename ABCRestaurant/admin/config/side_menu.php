        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                          
                        </li>
						
						  <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-calendar-alt"></i>Bookings</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="calendar.php">Bookings Calander</a></a>
                                </li>
								<li>
                                    <a href="bookings.php">Bookings</a></a>
                                </li>
                             
                               
                            </ul>
                        </li><li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-sticky-note-o"></i>Orders</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                               
								<li>
                                    <a href="orders.php">Orders</a></a>
                                </li>
                             
                               
                            </ul>
                        </li>
						<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-list-alt"></i>Inquiries</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                               
								<li>
                                    <a href="inquiries.php">Inquiries</a></a>
                                </li>
                             
                               
                            </ul>
                        </li><li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-user"></i>Customers</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                               
								<li>
                                    <a href="customers.php">Customers</a></a>
                                </li>
                             
                               
                            </ul>
                        </li>
						
						<?php if($u_type=='admin'){ ?>
						<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-file-o"></i>Reports</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                               
								<li>
                                    <a href="reports.php">Reports</a></a>
                                </li>
                             
                               
                            </ul>
                        </li>
						  
						
						
						<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-cutlery"></i>Menu Items</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                               
								<li>
                                    <a href="items.php">Items</a></a>
                                </li>
                             
                               
                            </ul>
                        </li>
							<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-picture-o "></i>Gallery</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                               
								<li>
                                    <a href="images.php">images</a></a>
                                </li>
                             
                               
                            </ul>
                        </li>
                       <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user"></i>User Management</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="users.php">Users</a>
                                </li>
                               
                               
                            </ul>
                        </li>
                      <?php } ?>
                      
                    
                       
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->