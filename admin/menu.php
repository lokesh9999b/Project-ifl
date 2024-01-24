<aside id="sidebar-left" class="sidebar-left">
				    <div class="sidebar-header">
				        <div class="sidebar-title">
				            Navigation
				        </div>
				        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
				        </div>
				    </div>
				    <div class="nano">
				        <div class="nano-content">
				            <nav id="menu" class="nav-main" role="navigation">
				                <ul class="nav nav-main">
				                    <li>
				                        <a class="nav-link" href="dashboard.php">
				                            <i class="bx bx-home-alt" aria-hidden="true"></i>
				                            <span>Dashboard</span>
				                        </a>                        
				                    </li>
									<!-- <li>
				                        <a class="nav-link" href="emp_update.php">
				                            <i class="bx bx-home-alt" aria-hidden="true"></i>
				                            <span>Update Employee Details</span>
				                        </a>                        
				                    </li> -->
				                    <li class="nav-parent">
				                        <a class="nav-link" href="#">
				                            <i class="bx bx-cart-alt" aria-hidden="true"></i>
				                            <span>Branches</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a class="nav-link" href="raj.php">
				                                    Rajamundry
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="khammam.php">
				                                    Khammam
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="kothagudem.php">
				                                    Kothagudem
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="jrg.php">
				                                    Jangareddygudem
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="manuguru.php">
				                                    Manuguru
				                                </a>
				                            </li>
				                           
				                        </ul>
				                    </li>
									<li>
				                        <a class="nav-link" href="day_wise.php">
				                            <i class="bx bx-home-alt" aria-hidden="true"></i>
				                            <span>Day Wise Report </span>
				                        </a>                        
				                    </li>
				        </div>
				        <script>
				            // Maintain Scroll Position
				            if (typeof localStorage !== 'undefined') {
				                if (localStorage.getItem('sidebar-left-position') !== null) {
				                    var initialPosition = localStorage.getItem('sidebar-left-position'),
				                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');
				                    sidebarLeft.scrollTop = initialPosition;
				                }
				            }
				        </script>
				    </div>
				</aside>
				<!-- end: sidebar -->
				