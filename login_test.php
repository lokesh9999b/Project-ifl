<?php session_start();

?>





<!doctype html>
<html class="fixed">

<head>
	<!-- Basic -->
	<meta charset="UTF-8">
	<meta name="keywords" content="HTML5 Admin Template">
	<meta name="description" content="Porto Admin - Responsive HTML5 Template">
	<meta name="author" content="okler.net">
	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<!-- Web Fonts  -->
	<!-- Vendor CSS -->
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">		<link rel="stylesheet" href="vendor/animate/animate.compat.css">		<link rel="stylesheet" href="vendor/font-awesome/css/all.min.css">		<link rel="stylesheet" href="vendor/boxicons/css/boxicons.min.css">		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css">		<link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css">
		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="vendor/select2/css/select2.css">		<link rel="stylesheet" href="vendor/select2-bootstrap-theme/select2-bootstrap.min.css">		<link rel="stylesheet" href="vendor/datatables/media/css/dataTables.bootstrap5.css">
		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">
		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="master/style-switcher/style.switcher.localstorage.js"></script>		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
		<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
	<!-- start: page -->
	<div class="row">
		<div class="col">
			<section class="card">
				<header class="card-header">
					<div class="card-actions">
					</div>
					<div class="col-md-12 text-center ">
						<h2 class="card-title">LOGIN</h2>
					</div>
				</header>
				<div class="card-body">
					<form class="form-horizontal form-bordered" method="POST" action="storeImage.php" enctype="multipart/form-data">
						<div class="form-group row pb-4">
							<label class="col-lg-3 control-label text-lg-end pt-2" for="inputPlaceholder">Employee Id</label>
							<div class="col-lg-6">
								<input type="text" class="form-control" name="eid" placeholder="Employee Id" id="inputPlaceholder">
							</div>
						</div>
						<div class="form-group row pb-2">
							<div class="row justify-content-md-center">
								<div id="my_camera1"></div>
								<input type="hidden" name="image" class="image-tag-student">
								<!-- <div class="col-md-12 text-center">
										  <input type=button value="Take Snapshot" class="mb-1 mt-1 me-1 btn btn-success" onClick="take_snapshot_student()">
										  </div> -->
							</div>


						</div>
						<div class="col-md-10">
							<div id="results_1"></div>
						</div>
						<div class="col-md-12 text-center">
							<br />
							<button onClick="take_snapshot_student()" class="mb-1 mt-1 me-1 btn btn-info">Login</button>
						</div>
					</form>
				</div>
			</section>
		</div>
	</div>
	<!-- </div> -->
	<!--Table-->
	<section role="main" class="container">
		<div class="row">
			<div class="col">
				<section class="card">
					<header class="card-header">
						<div class="card-actions">
							<!-- <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a> -->
						</div>
						<div class="col-md-12 text-center">
							<h2 class="card-title" class="col-md-12 text-center">LOG TABLE</h2>
						</div>
					</header>



					<div class="card-body">
						<table class="table table-bordered table-striped mb-0" id="datatable-default">
							<thead>
								<tr>
									<th>Photo Id</th>
									<th>Employee Id</th>
									<th>Employee Name</th>
									<th>Branch</th>
									<th>In Time</th>
									<th>Out Time</th>
									<th>Log Out</th>

								</tr>
							</thead>
							<tbody>
								<!-- <tr>
													<td>Trident</td>
													<td>Internet
														Explorer 4.0
													</td>
													<td>Win 95+</td>
													
												</tr> -->
								<?php
								include 'connect.php';
								date_default_timezone_set("Asia/Calcutta");
								$date = date('Y-m-d');


								$query = "SELECT l.emp_id,l.photo,l.intime,l.outtime,r.ename,r.branch FROM log l,register r WHERE l.intime like '$date%' and l.emp_id=r.emp_id";
								$run = mysqli_query($con, $query);
								while ($res = mysqli_fetch_assoc($run)) {
									$empid = $res['emp_id'];
									$name = $res['ename'];
									$branch = $res['branch'];
									$photo = $res['photo'];
									$intime = $res['intime'];
									$outtime = $res['outtime'];
									$ct = date('Y-m-d H:i:s');
									// $query1="select name from students where regno=$reg";
									// $res1=mysqli_query($con,$query1);
									// while($res2=mysqli_fetch_assoc($res1))
									// {
									// 	$name=$res2['name']
									// }

									echo '<tr>
							
														 <td><img src="' . $photo . '" width="75" height="75"></td>
														 <td><b>' . $empid . '<b></td>
														 <td><b>' . $name . '<b></td>
														 <td><b>' . $branch . '<b></td>
														 <td><span class="wish_price theme-cl">' . substr($intime, 11) . '</span></td>
														 <td>' . substr($outtime, 11) . '</td>';
									if ($outtime == "---") {
										echo '<td><a href="logout.php?emp_id=' . $empid . '&t=' . substr($intime, 11) . '" class="mb-1 mt-1 me-1 btn btn-warning">Log out </a></td>
															</tr>';
									} else {
										echo '<td>Loged out</td>
													 </tr>';
									}
								} ?>

							</tbody>
						</table>
					</div>
				</section>
			</div>
		</div>
	</section>
	<!-- </div> -->
	<!-- photo -->
	<script language="JavaScript">
		Webcam.set({
			width: 480,
			height: 360,
			image_format: 'jpeg',
			jpeg_quality: 90,
		});

		Webcam.attach('#my_camera1');

		function take_snapshot_student() {
			Webcam.snap(function(data_uri_student) {
				$(".image-tag-student").val(data_uri_student);
				document.getElementById('results_1').innerHTML = '<img src="' + data_uri_student + '"/>';
			});
		}
	</script>
	<!-- Vendor -->
	<script src="vendor/jquery/jquery.js"></script>		<script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>		<script src="master/style-switcher/style.switcher.js"></script>		<script src="vendor/popper/umd/popper.min.js"></script>		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>		<script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>		<script src="vendor/common/common.js"></script>		<script src="vendor/nanoscroller/nanoscroller.js"></script>		<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>		<script src="vendor/jquery-placeholder/jquery.placeholder.js"></script>
		<!-- Specific Page Vendor -->
		<script src="vendor/select2/js/select2.js"></script>		<script src="vendor/datatables/media/js/jquery.dataTables.min.js"></script>		<script src="vendor/datatables/media/js/dataTables.bootstrap5.min.js"></script>		<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js"></script>		<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js"></script>		<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js"></script>		<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js"></script>		<script src="vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js"></script>		<script src="vendor/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js"></script>		<script src="vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js"></script>
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>
				<!-- Theme Base, Components and Settings -->
				<script src="js/theme.js"></script>
				<!-- Theme Custom -->
				<script src="js/custom.js"></script>
				<!-- Theme Initialization Files -->
				<script src="js/theme.init.js"></script>
				<!-- Analytics to Track Preview Website -->
				
</body>

</html>