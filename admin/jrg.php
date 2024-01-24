
<?php session_start();
include '../connect.php';
if (empty($_SESSION['name'])) 
{

     
	echo " <script>document.location='index.php'</script>";
}
?>
<!doctype html><html class="fixed">
	<head>
		<!-- Basic -->
		<meta charset="UTF-8">
		<title>JANGAREDDYGUDEM BRANCH</title>
		<meta name="keywords" content="HTML5 Admin Template">
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!-- Web Fonts  -->		<link href="../../../../css-1?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
		<!-- ../Vendor CSS -->
		<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.css">		
		<link rel="stylesheet" href="../vendor/animate/animate.compat.css">		
		<link rel="stylesheet" href="../vendor/font-awesome/css/all.min.css">		
		<link rel="stylesheet" href="../vendor/boxicons/css/boxicons.min.css">		
		<link rel="stylesheet" href="../vendor/magnific-popup/magnific-popup.css">		
		<link rel="stylesheet" href="../vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css">
		<!-- Specific Page ../Vendor CSS -->
		<link rel="stylesheet" href="../vendor/select2/css/select2.css">		
		<link rel="stylesheet" href="../vendor/select2-bootstrap-theme/select2-bootstrap.min.css">		
		<link rel="stylesheet" href="../vendor/datatables/media/css/dataTables.bootstrap5.css">
		<!-- Theme CSS -->
		<link rel="stylesheet" href="../css/theme.css">
		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="../css/custom.css">
		<!-- Head Libs -->
		<script src="../vendor/modernizr/modernizr.js"></script>
		<script src="../master/style-switcher/style.switcher.localstorage.js"></script>
	</head>
	<body>
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
         
				
				<!-- end: sidebar -->
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>JANGAREDDYGUDEM BRANCH</h2>
						<div class="right-wrapper text-end">
							
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>
					<!-- start: page -->
					<h1 class="text-center ">BRANCH EMPLOYEE'S LIST</h1>
					<div class="row">
						<div class="col">
							<div class="card card-modern">
								<div class="card-body">
								
					
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
													
													<th width="10%">EMPLOYEE ID</th>
													<th width="15%">EMPLOYEE NAME</th>
													<th width="10%">DESIGNATION</th>
													<th width="10%">PHONE NO</th>
													<th width="10%">AADHAR</th>
													<th width="10%">DOB</th>
													<th width="10%">DOJ</th>
													<th width="10%">Update Details</th>
												</tr>
											</thead>
											<tbody>
											<?php
								include '../connect.php';
								

								$query = "SELECT `ename`, `desig`, `dob`, `doj`, `aadhar`, `contact`, `emp_id` FROM `register` WHERE `branch`= 'jangareddygudem 061'";
								$run = mysqli_query($con, $query);
								while ($res = mysqli_fetch_assoc($run)) {
									$empid = $res['emp_id'];
									$name = $res['ename'];
									$desig = $res['desig'];
									$phno = $res['contact'];
									$aadhar = $res['aadhar'];
									$dob = $res['dob'];
									$doj = $res['doj'];
							

												echo '<tr>
							
												<td><b>' . $empid . '<b></td>
												<td><b>' . $name . '<b></td>
												<td><b>' . $desig . '<b></td>
												<td><b>' . $phno . '<b></td>
												<td><b>' . $aadhar . '<b></td>
												<td><b>' . $dob . '<b></td>
												<td><b>' . $doj . '<b></td>
											
								<td><button type="submit" class=" btn btn-success"  name="update"><a href="emp_update.php? updateid='.$empid.'"> Update</a></button></td>';
												
						
					                        } ?>
											</tbody>
										</table>

									
									
								</div>
							</div>
						</div>
					</div>
					<!-- end: page -->
					
					<form method="post">
				
		                                  </div>
		                                      <div class="form-group row pb-4">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">EMPLOYEE ID</label>
												<div class="col-lg-6">
													<input type="text" name="id" class="form-control" id="inputDefault">
												</div>
											</div>
		                                     <div class="form-group row pb-3">
												<label class="col-lg-3 control-label text-lg-end pt-2">Date range</label>
												<div class="col-lg-6">
													<div class="input-daterange input-group" data-plugin-datepicker="">
														<span class="input-group-text">
															<i class="fas fa-calendar-alt"></i>
														</span>
														<input type="text" class="form-control" name="start">
														<span class="input-group-text border-start-0 border-end-0 rounded-0">
															to
														</span>
														<input type="text" class="form-control" name="end">
													</div>
												</div>
											</div>
											<div class="col-sm-6   text-end">
								<button type="submit" class=" btn btn-success"  name="submit">check</button>
								</div>
										</form>
                                    <br>
						<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
										</div>
										<h1 class="card-title">Log Table</h1>
									</header>
									<div class="card-body">
										<table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
											<thead>
												<tr>
													<th>Employee Name</th>
													<th>Employee Id</th>
													<th>Branch</th>
													<th>Date (M/D/Y)</th>
													<th>IN Time</th>
													<th>Out Time</th>
													
												</tr>
											</thead>
											<tbody>
											<?php
					  include '../connect.php';
					  if(isset($_POST['submit']))
					  {
						$id=$_POST['id'];
						$id=strtoupper($id);
						$start=$_POST['start'];
						$end=$_POST['end'];
						$query="SELECT r.ename, r.emp_id, l.intime,  r.branch, l.outtime, l.date
						FROM register r, log l
						WHERE r.emp_id = l.emp_id AND r.emp_id = '$id'  AND l.date BETWEEN '$start' AND '$end'";
						
						$run = mysqli_query($con, $query);
						
						while ($res = mysqli_fetch_assoc($run)) {
							$name=$res['ename'];
							$id=$res['emp_id'];
							$branch=$res['branch'];
							$date1=$res['date'];
							$intime = $res['intime'];
							$outtime = $res['outtime'];

							echo '<tr class="gradeU">
							<td>'.$name.'</td>
							<td>'.$id.'</td>
							<td>'.$branch.'</td>
							<td>'.$date1.'</td>
							<td>'.$intime.'</td>
							<td>'.$outtime.'</td>
							
						    </tr>';
						
					  }
					}
					  ?> 
												
											</tbody>
										</table>
									</div>
								</section>
							</div>
						</div>
						</section>
					<!-- end: page -->
				
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
							<div class="sidebar-widget widget-friends">
								<!-- <h6>Friends</h6> -->
								
							</div>
						</div>
					</div>
				</div>
		</section>
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
		<!-- Examples -->
		<script src="../js/examples/examples.datatables.default.js"></script>
		<script src="../js/examples/examples.datatables.row.with.details.js"></script>
		<script src="../js/examples/examples.datatables.tabletools.js"></script>
	</body>
</html>