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
				                    <li class="nav-parent">
				                        <a class="nav-link" href="#">
				                            <i class="bx bx-cart-alt" aria-hidden="true"></i>
				                            <span>eCommerce</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a class="nav-link" href="ecommerce-dashboard.html">
				                                    Dashboard
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ecommerce-products-list.html">
				                                    Products List
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ecommerce-products-form.html">
				                                    Products Form
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ecommerce-category-list.html">
				                                    Categories List
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ecommerce-category-form.html">
				                                    Category Form
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ecommerce-coupons-list.html">
				                                    Coupons List
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ecommerce-coupons-form.html">
				                                    Coupons Form
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ecommerce-orders-list.html">
				                                    Orders List
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ecommerce-orders-detail.html">
				                                    Orders Detail
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ecommerce-customers-list.html">
				                                    Customers List
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ecommerce-customers-form.html">
				                                    Customers Form
				                                </a>
				                            </li>
				                        </ul>
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
				