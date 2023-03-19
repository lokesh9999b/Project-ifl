<?php session_start();
  include 'connect.php';
  if(empty($_SESSION['name'])){


    echo" <script>document.location='index.php'</script>";
}
  ?>



<!doctype html><html class="boxed header-fixed" data-style-switcher-options="{'layoutStyle': 'boxed'}">
	<head>
		<!-- Basic -->
		<meta charset="UTF-8">
		<title>IFL | LOGIN PAGE</title>
		
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!-- Web Fonts  -->		
        <link href="../../../css-1?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">		
        <link rel="stylesheet" href="vendor/animate/animate.compat.css">		
        <link rel="stylesheet" href="vendor/font-awesome/css/all.min.css">		
        <link rel="stylesheet" href="vendor/boxicons/css/boxicons.min.css">		
		<link rel="stylesheet" href="vendor/datatables/media/css/dataTables.bootstrap5.css">
        	
        <link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css">
		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.css">		
        <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.theme.css">		
        <link rel="stylesheet" href="vendor/bootstrap-multiselect/css/bootstrap-multiselect.css">		
        <link rel="stylesheet" href="vendor/morris/morris.css">
		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">
		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="master/style-switcher/style.switcher.localstorage.js"></script>

		<link rel="stylesheet" href="css/layouts/modern.css">
		
		
		           
                    
                    	
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>           
        <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
		<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>	
                    

		<script src="js/examples/examples.dashboard.js"></script>
			<!-- Examples -->
			<script src="js/examples/examples.header.menu.js"></script>
		<script src="js/examples/examples.ecommerce.datatables.list.js"></script>
	</head>
	<body>
		<section class="body">
			<!-- start: header -->
			<?php include 'header.php';?>
			<!-- end: header -->
			<!-- <body> -->
	<!-- start: page -->
    <br>
    <br>

    <br>

	<div class="row">
		<div class="col">
			<section class="card">
				<br>
				<div class="card-body">
                    <h3 class="text-center "><b>IFL GREEN PRODUCER COMPANY LIMITED<br>Employee Login System</b></h3>
					<br>
					<form class="form-horizontal form-bordered" method="POST" action="storeImage.php" enctype="multipart/form-data">
						<div class="form-group row pb-4">
							<label class="col-lg-3 control-label text-lg-end pt-2" for="inputPlaceholder"><b>Employee Id</b></label>
							<div class="col-lg-6">
								<input type="text" class="form-control" name="eid" placeholder="Enter Your Employee Id" id="inputPlaceholder">
							</div>
						</div>
						<div class="form-group row pb-2">
							<div class="row justify-content-md-center">
								<div id="my_camera1" class="my_camera"></div>
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
							<button onClick="take_snapshot_student()" class="mb-1 mt-1 me-1 btn btn-success">Login</button>
						</div>
						<div class="form-group">
																	<p>Not yet registered?</p>
																	<!-- <a href="register.php"><button class=>Register Now</button></a> -->
																	<a href="register.php" class="mb-1 mt-1 me-1 btn btn-info">Register here!</a>
																</div>
					</form>
				</div>
			</section>
		</div>
	</div>
	<!-- </div> -->
	<!--Table-->
	    <h1 class="text-center ">Log Table</h1>
	<div class="row">
		
						<div class="col">
							<div class="card card-modern">
								<div class="card-body">
								<?php
												date_default_timezone_set("Asia/Calcutta");
								$date = date('Y-m-d');
                                $time=date('H:i:s');
								
								?>
								<h5><b>Current Time :</b> <?php echo $time;?></h5>
									<div class="datatables-header-footer-wrapper">
										<div class="datatable-header">
											<div class="row align-items-center mb-3">
												<div class="col-12 col-lg-auto mb-3 mb-lg-0">
													<!-- <a href="ecommerce-orders-detail.html" class="btn btn-primary btn-md font-weight-semibold btn-py-2 px-4">+ Add Order</a> -->
												</div>
												<div class="col-8 col-lg-auto ms-auto ml-auto mb-3 mb-lg-0">
													<!-- <div class="d-flex align-items-lg-center flex-column flex-lg-row">
														<label class="ws-nowrap me-3 mb-0"><b>Filter By:</b></label>
														<select class="form-control select-style-1 filter-by" name="filter-by">
															<option value="all" selected="">All</option>
															<option value="1">Employee Id</option>
															<option value="2">Employee Name</option>
															<option value="3">In time</option>
															<option value="4">Out time</option>
															
														</select>
													</div> -->
												</div>
												<!-- <div class="col-4 col-lg-auto ps-lg-1 mb-3 mb-lg-0">
													<div class="d-flex align-items-lg-center flex-column flex-lg-row">
														<label class="ws-nowrap me-3 mb-0">Show:</label>
														<select class="form-control select-style-1 results-per-page" name="results-per-page">
															<option value="12" selected="">12</option>
															<option value="24">24</option>
															<option value="36">36</option>
															<option value="100">100</option>
														</select>
													</div>
												</div> -->
												
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
													<th width="15%">EMPLOYEE Name</th>
													<th width="10%">BRANCH</th>
													<th width="10%">IN TIME</th>
													<th width="10%">OUT TIME</th>
													<th width="15%">LOGOUT</th>
												</tr>
											</thead>
											<tbody>
											<?php
								include 'connect.php';
								

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

												echo '<tr>
							
												<td><img src="' . $photo . '" width="50" height="50"></td>
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

									<!--	'<tr>
													<!-- <td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value=""></td> >
													<td><a href=""><strong>191</strong></a></td>
													<td><a href="ecommerce-orders-detail.html"><strong>Customer Name Example</strong></a></td>
													<td>Nov 21, 2019</td>
													<td>$200</td>
													<td><span class="ecommerce-status on-hold">On Hold</span></td>
												</tr>'-->
										<!-- <hr class="solid mt-5 opacity-4"> -->
										<!-- <div class="datatable-footer">
											<div class="row align-items-center justify-content-between mt-3">
												<div class="col-md-auto order-1 mb-3 mb-lg-0">
													<div class="d-flex align-items-stretch">
														<div class="d-grid gap-3 d-md-flex justify-content-md-end me-4">
															<select class="form-control select-style-1 bulk-action" name="bulk-action" style="min-width: 170px;">
																<option value="" selected="">Bulk Actions</option>
																<option value="delete">Delete</option>
															</select>
															<a href="ecommerce-orders-detail.html" class="bulk-action-apply btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">Apply</a>
														</div>
													</div>
												</div>
												<div class="col-lg-auto text-center order-3 order-lg-2">
													<div class="results-info-wrapper"></div>
												</div>
												<div class="col-lg-auto order-2 order-lg-3 mb-3 mb-lg-0">
													<div class="pagination-wrapper"></div>
												</div>
											</div>
										</div> -->
									
								</div>
							</div>
						</div>
					</div>
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
	<script src="vendor/jquery/jquery.js"></script>		
    <script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>		
    <script src="vendor/jquery-cookie/jquery.cookie.js"></script>		
    <script src="master/style-switcher/style.switcher.js"></script>		
    <script src="vendor/popper/umd/popper.min.js"></script>		
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>		
    <script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>		
    <script src="vendor/common/common.js"></script>		
    <script src="vendor/nanoscroller/nanoscroller.js"></script>		
    <script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>		
    <script src="vendor/jquery-placeholder/jquery.placeholder.js"></script>
		<!-- Specific Page Vendor -->
		<script src="vendor/select2/js/select2.js"></script>		
        <script src="vendor/datatables/media/js/jquery.dataTables.min.js"></script>		
        <script src="vendor/datatables/media/js/dataTables.bootstrap5.min.js"></script>		
        <script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js"></script>		
        <script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js"></script>		
        <script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js"></script>		
        <script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js"></script>		
        <script src="vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js"></script>		
        <script src="vendor/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js"></script>		
        <script src="vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js"></script>
		
		
		<script>
            const searchFun = () => {
                let filter = document.getElementById('search-term').value.toUpperCase();
                
                let myTable = document.getElementById('datatable-log-list');
                
                let tr = myTable.getElementsByTagName('tr');

                for(var i=0;i<tr.length;i++){
                    let td = tr[i].getElementsByTagName('td')[1];
                    let t1 = tr[i].getElementsByTagName('td')[0];
             
                    if(td || t1){
                        let textvlaue = td.textContent || td.innerHTML;
                        let pid = t1.textContent || t1.innerHTML;
                        if(textvlaue.toUpperCase().indexOf(filter)>-1 || pid.toUpperCase().indexOf(filter)>-1){
                            tr[i].style.display = "";
                        }
                        else{
                            tr[i].style.display = "none";
                        }
                    }
                }

            }
        </script>
				

				<!-- Theme Base, Components and Settings -->
				<script src="js/theme.js"></script>
				<!-- Theme Custom -->
				<script src="js/custom.js"></script>
				<!-- Theme Initialization Files -->
				<script src="js/theme.init.js"></script>
				<!-- Analytics to Track Preview Website -->
			
</body>

</html>