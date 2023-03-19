<!doctype html><html class="fixed">
	<head>
		<!-- Basic -->
		<meta charset="UTF-8">
		<title>IFL | Dashboard</title>
		<meta name="keywords" content="HTML5 Admin Template">
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!-- Web Fonts  -->		<link href="../../../css-1?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
		<!-- ../Vendor CSS -->
		<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.css">		
		<link rel="stylesheet" href="../vendor/animate/animate.compat.css">		
		<link rel="stylesheet" href="../vendor/font-awesome/css/all.min.css">		
		<link rel="stylesheet" href="../vendor/boxicons/css/boxicons.min.css">		
		<link rel="stylesheet" href="../vendor/magnific-popup/magnific-popup.css">		
		<link rel="stylesheet" href="../vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css">
		<!-- Specific Page ../Vendor CSS -->

		<!-- Theme CSS -->
		<link rel="stylesheet" href="../css/theme.css">
		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="../css/custom.css">
		<!-- Head Libs -->
		<script src="../vendor/modernizr/modernizr.js"></script>
		<script src="../master/style-switcher/style.switcher.localstorage.js"></script>
	</head>
	<body>
		<section class="body">
			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="index.htm" class="logo">						<img src="../img/ifl-logo.jpg" width="75" height="47" alt="Porto Admin">
					</a>
					<div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
				<!-- start: search & user box -->
				<div class="header-right">
					
					<span class="separator"></span>
					<div id="userbox" class="userbox">
						<a href="#" data-bs-toggle="dropdown">
							<figure class="profile-picture">
								<img src="../img/!logged-user.jpg" alt="Joseph Doe" class="rounded-circle" data-lock-picture="img/!logged-user.jpg">
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">John Doe Junior</span>
								<span class="role">Administrator</span>
							</div>
							<i class="fa custom-caret"></i>
						</a>
						<div class="dropdown-menu">
							<ul class="list-unstyled mb-2">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="bx bx-user-circle"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="bx bx-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="bx bx-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->
			<div class="inner-wrapper">
				<!-- start: sidebar -->
			<?php
			 include 'menu.php';
			 ?>
			 <section role="main" class="content-body">
					<header class="page-header">
						<h2>Blank Page</h2>
						<div class="right-wrapper text-end">
							<ol class="breadcrumbs">
								<!-- <li>
									<a href="index.html">
										<i class="bx bx-home-alt"></i>
									</a>
								</li>
								<li><span>Pages</span></li>
								<li><span>Blank Page</span></li> -->
							</ol>
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>
					<!-- start: page -->
					<div class="row">
						<div class="col-lg-12">
							<div class="row mb-3">
								<div class="col-xl-6">
									<section class="card card-featured-left card-featured-primary mb-3">
										<div class="card-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-primary">
														<i class="fas fa-life-ring"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Support Questions</h4>
														<div class="info">
															<strong class="amount">1281</strong>
															<span class="text-primary">(14 unread)</span>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase" href="#">(view all)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-xl-6">
									<section class="card card-featured-left card-featured-secondary">
										<div class="card-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-secondary">
														<i class="fas fa-dollar-sign"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Total Profit</h4>
														<div class="info">
															<strong class="amount">$ 14,890.30</strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase" href="#">(withdraw)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-6">
									<section class="card card-featured-left card-featured-tertiary mb-3">
										<div class="card-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-tertiary">
														<i class="fas fa-shopping-cart"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Today's Orders</h4>
														<div class="info">
															<strong class="amount">38</strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase" href="#">(statement)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-xl-6">
									<section class="card card-featured-left card-featured-quaternary">
										<div class="card-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-quaternary">
														<i class="fas fa-user"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Today's Visitors</h4>
														<div class="info">
															<strong class="amount">3765</strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase" href="#">(report)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-xl-6">
									<section class="card card-featured-left card-featured-quaternary">
										<div class="card-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-quaternary">
														<i class="fas fa-user"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Today's Visitors</h4>
														<div class="info">
															<strong class="amount">3765</strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase" href="#">(report)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
					</div>
					
					<!-- end: page -->
				</section>
			</div>
			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close d-md-none">
							Collapse <i class="fas fa-chevron-right"></i>
						</a>
						<div class="sidebar-right-wrapper">
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker="" data-plugin-skin="dark"></div>
								
							</div>
							
						</div>
					</div>
				</div>
			</aside>
		</section>
		<!-- Body-->
		
		<!-- ../Vendor -->
		<script src="../vendor/jquery/jquery.js"></script>
		<script src="../vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>		
		<script src="../vendor/jquery-cookie/jquery.cookie.js"></script>		
		<script src="../master/style-switcher/style.switcher.js"></script>		
		<script src="../vendor/popper/umd/popper.min.js"></script>		
		<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>		
		<script src="../vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>		
		<script src="../vendor/common/common.js"></script>		
		<script src="../vendor/nanoscroller/nanoscroller.js"></script>		
		<script src="../vendor/magnific-popup/jquery.magnific-popup.js"></script>		
		<script src="../vendor/jquery-placeholder/jquery.placeholder.js"></script>
		<!-- Specific Page ../Vendor -->

		<!-- Theme Base, Components and Settings -->
		<script src="../js/theme.js"></script>
		<!-- Theme Custom -->
		<script src="../js/custom.js"></script>
		<!-- Theme Initialization Files -->
		<script src="../js/theme.init.js"></script>
		<!-- Analytics to Track Preview Website -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-42715764-8', 'auto');
		  ga('send', 'pageview');
		</script>
	</body>
</html>