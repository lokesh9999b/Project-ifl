<?php session_start();
include '../connect.php';
if (empty($_SESSION['name'])) 
{

     
	echo " <script>document.location='index.php'</script>";
}
?>


<!doctype html>
<html class="fixed">

<head>
	<!-- Basic -->
	<meta charset="UTF-8">
	<title>IFL | Dashboard</title>
	<meta name="keywords" content="HTML5 Admin Template">
	<meta name="description" content="Porto Admin - Responsive HTML5 Template">
	<meta name="author" content="okler.net">
	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<!-- Web Fonts  -->
	<link href="../../../css-1?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
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
				<a href="index.htm" class="logo"> <img src="../img/ifl_dash2.png" width="75" height="48" alt="Porto Admin">
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
							<img src="../<?php echo $_SESSION['photo']; ?>" alt="<?php echo $_SESSION['name']; ?>" class="rounded-circle" data-lock-picture="../<?php echo $_SESSION['photo']; ?>">
						</figure>
						<div class="profile-info" data-lock-name="<?php echo $_SESSION['name']; ?>" data-lock-email="<?php echo $_SESSION['deg']; ?>">
							<span class="name"><?php echo $_SESSION['name']; ?></span>
							<span class="role"><?php echo $_SESSION['deg']; ?></span>
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
								<a role="menuitem" tabindex="-1" href="logout.php"><i class="bx bx-power-off"></i> Logout</a>
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
					<h2>ADMIN DASHBOARD</h2>
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
												<div class="summary-icon bg-secondary">
													<i class='far fa-building' style='font-size:48px;'></i>
												</div>
											</div>
											<div class="widget-summary-col">
												<div class="summary">
													<h4 class="title">Branch</h4>
													<div class="info">
														<strong class="amount">Rajamundry</strong>
														<span class="text-primary">(051)</span>
													</div>
												</div>
												<div class="summary-footer">
													<a class="text-muted text-uppercase" href="raj.php">(view)</a>
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
													<i class='far fa-building' style='font-size:48px;'></i>
												</div>
											</div>
											<div class="widget-summary-col">
												<div class="summary">
													<h4 class="title">Branch</h4>
													<div class="info">
														<strong class="amount">Khammam</strong>
														<span class="text-primary">(054)</span>
													</div>
												</div>
												<div class="summary-footer">
													<a class="text-muted text-uppercase" href="khammam.php">(view)</a>
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
												<div class="summary-icon bg-secondary">
													<i class='far fa-building' style='font-size:48px;'></i>
												</div>
											</div>
											<div class="widget-summary-col">
												<div class="summary">
													<h4 class="title">Branch</h4>
													<div class="info">
														<strong class="amount">Kothagudem</strong>
														<span class="text-primary">(059)</span>
													</div>
												</div>
												<div class="summary-footer">
													<a class="text-muted text-uppercase" href="kothagudem.php">(view)</a>
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
												<div class="summary-icon bg-secondary">
													<i class='far fa-building' style='font-size:48px;'></i>
												</div>
											</div>
											<div class="widget-summary-col">
												<div class="summary">
													<h4 class="title">Branch</h4>
													<div class="info">
														<strong class="amount">Jangareddygudem</strong>
														<span class="text-primary">(061)</span>
													</div>
												</div>
												<div class="summary-footer">
													<a class="text-muted text-uppercase" href="jrg.php">(view)</a>
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
												<div class="summary-icon bg-secondary">
													<i class='far fa-building' style='font-size:48px;'></i>
												</div>
											</div>
											<div class="widget-summary-col">
												<div class="summary">
													<h4 class="title">Branch</h4>
													<div class="info">
														<strong class="amount">Manuguru</strong>
														<span class="text-primary">(063)</span>
													</div>
												</div>
												<div class="summary-footer">

													<a class="text-muted text-uppercase" href="manuguru.php">(view)</a>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
				<h1 class="text-center ">Today's Log Table</h1>
				<div class="row">
					<div class="col">
						<div class="card card-modern">
							<div class="card-body">
								<?php
								date_default_timezone_set("Asia/Calcutta");
								$date = date('m/d/y');
								$time = date('H:i:s');

								?>
								<h5><b>Current Time :</b> <?php echo $time; ?></h5>
								<div class="datatables-header-footer-wrapper">
									<div class="datatable-header">
										<div class="row align-items-center mb-3">
											<div class="col-12 col-lg-auto mb-3 mb-lg-0">
												<!-- <a href="ecommerce-orders-detail.html" class="btn btn-primary btn-md font-weight-semibold btn-py-2 px-4">+ Add Order</a> -->
											</div>
											<div class="col-8 col-lg-auto ms-auto ml-auto mb-3 mb-lg-0">
												
											</div>
											

											<div class="col-12 col-lg-auto ps-lg-1">

												<div class="search search-style-1 search-style-1-lg mx-lg-auto">
													<div class="input-group">
														<input type="text" onchange="searchFun()" class="search-term form-control" name="search-term" id="search-term" placeholder="Search Here">
														<button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<table class="table table-ecommerce-simple table-borderless table-striped mb-0" id="datatable-log-list" style="min-width: 640px;">
										<thead>
											<tr>
												<!-- <th width="3%"><input type="checkbox" name="select-all" class="select-all checkbox-style-1 p-relative top-2" value=""></th> -->
												<th width="6%">PHOTO</th>
												<th width="10%">EMPLOYEE ID</th>
												<th width="12%">EMPLOYEE NAME</th>
												<th width="10%">BRANCH</th>
												<th width="10%">DATE</th>
												<th width="10%">IN TIME</th>
												<th width="10%">OUT TIME</th>
												<!-- <th width="15%">LOGOUT</th> -->
											</tr>
										</thead>
										<tbody>
											<?php
											include '../connect.php';
                                            date_default_timezone_set("Asia/Calcutta");
								            $date = date('m/d/Y');
								            $time = date('H:i:s');

											$query = "SELECT l.emp_id,l.photo,l.date,l.intime,l.outtime,r.ename,r.branch FROM log l,register r WHERE l.date like '$date' and l.emp_id=r.emp_id";
											$run = mysqli_query($con, $query);
											while ($res = mysqli_fetch_assoc($run)) {
												$empid = $res['emp_id'];
												$name = $res['ename'];
												$branch = $res['branch'];
												$photo = $res['photo'];
												$date1 = $res['date'];
												$intime = $res['intime'];
												$outtime = $res['outtime'];
												

												echo '<tr>
							
												<td><img src="../' . $photo . '" width="50" height="50"></td>
												<td>' . $empid . '</td>
												<td>' . $name . '</td>
												<td>' . $branch . '</td>
												<td>' . $date1 . '</td>
												<td><span class="wish_price theme-cl">' . $intime . '</span></td>
												<td>' . $outtime . '</td>';
												
											} ?>
										</tbody>
									</table>

									

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
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
		ga('create', 'UA-42715764-8', 'auto');
		ga('send', 'pageview');
	</script>

	<!-- Vendor -->
	
	
	
	<!-- Specific Page ../Vendor -->
	<script src="../vendor/select2/js/select2.js"></script>
	<script src="../vendor/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="../vendor/datatables/media/js/dataTables.bootstrap5.min.js"></script>
	<script src="../vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js"></script>
	<script src="../vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js"></script>
	<script src="../vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js"></script>
	<script src="../vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js"></script>
	<script src="../vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js"></script>
	<script src="../vendor/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js"></script>
	<script src="../vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js"></script>
</body>

</html>