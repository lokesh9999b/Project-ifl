<?php session_start();

if(empty($_SESSION['name']))
{
   
	
    echo" <script>document.location='index.php'</script>";
}


?>






<!doctype html><html class="fixed">
	<head>
		<!-- Basic -->
		<meta charset="UTF-8">
		<meta name="keywords" content="HTML5 Admin Template">
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!-- Web Fonts  -->		<link href="../../../css-1?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">		<link rel="stylesheet" href="vendor/animate/animate.compat.css">		<link rel="stylesheet" href="vendor/font-awesome/css/all.min.css">		<link rel="stylesheet" href="vendor/boxicons/css/boxicons.min.css">		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css">		<link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css">
		<!-- Specific Page Vendor CSS -->

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">
		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="master/style-switcher/style.switcher.localstorage.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
										<h2 class="center" >Login Here</h2>
									</header>
									<div class="card-body">
										<form class="form-horizontal form-bordered" method="get">
											<div class="form-group row pb-4">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputPlaceholder">Employee Id</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" placeholder="Employee Id" id="inputPlaceholder">
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
												<br/>
												<button onClick="take_snapshot_student()" class="mb-1 mt-1 me-1 btn btn-info">Login</button>
											</div>
										</form>
									</div>
								</section>
							</div>
						</div>
						<!--Table-->
						<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<!-- <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a> -->
										</div>
										<h2 class="card-title">Basic</h2>
									</header>
									<div class="card-body">
										<table class="table table-bordered table-striped mb-0" id="datatable-default">
											<thead>
												<tr>
													<th>Rendering engine</th>
													<th>Browser</th>
													<th>Platform(s)</th>
													<th class="d-lg-none">Engine version</th>
													<th class="d-lg-none">CSS grade</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Trident</td>
													<td>Internet
														Explorer 4.0
													</td>
													<td>Win 95+</td>
													<td class="center d-lg-none">4</td>
													<td class="center d-lg-none">X</td>
												</tr>
												<tr>
													<td>Trident</td>
													<td>Internet
														Explorer 5.0
													</td>
													<td>Win 95+</td>
													<td class="center d-lg-none">5</td>
													<td class="center d-lg-none">C</td>
												</tr>
												<tr>
													<td>Trident</td>
													<td>Internet
														Explorer 5.5
													</td>
													<td>Win 95+</td>
													<td class="center d-lg-none">5.5</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Trident</td>
													<td>Internet
														Explorer 6
													</td>
													<td>Win 98+</td>
													<td class="center d-lg-none">6</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Trident</td>
													<td>Internet Explorer 7</td>
													<td>Win XP SP2+</td>
													<td class="center d-lg-none">7</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Trident</td>
													<td>AOL browser (AOL desktop)</td>
													<td>Win XP</td>
													<td class="center d-lg-none">6</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Firefox 1.0</td>
													<td>Win 98+ / OSX.2+</td>
													<td class="center d-lg-none">1.7</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Firefox 1.5</td>
													<td>Win 98+ / OSX.2+</td>
													<td class="center d-lg-none">1.8</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Firefox 2.0</td>
													<td>Win 98+ / OSX.2+</td>
													<td class="center d-lg-none">1.8</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Firefox 3.0</td>
													<td>Win 2k+ / OSX.3+</td>
													<td class="center d-lg-none">1.9</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Camino 1.0</td>
													<td>OSX.2+</td>
													<td class="center d-lg-none">1.8</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Camino 1.5</td>
													<td>OSX.3+</td>
													<td class="center d-lg-none">1.8</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Netscape 7.2</td>
													<td>Win 95+ / Mac OS 8.6-9.2</td>
													<td class="center d-lg-none">1.7</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Netscape Browser 8</td>
													<td>Win 98SE+</td>
													<td class="center d-lg-none">1.7</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Netscape Navigator 9</td>
													<td>Win 98+ / OSX.2+</td>
													<td class="center d-lg-none">1.8</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.0</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center d-lg-none">1</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.1</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center d-lg-none">1.1</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.2</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center d-lg-none">1.2</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.3</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center d-lg-none">1.3</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.4</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center d-lg-none">1.4</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.5</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center d-lg-none">1.5</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.6</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center d-lg-none">1.6</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.7</td>
													<td>Win 98+ / OSX.1+</td>
													<td class="center d-lg-none">1.7</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Mozilla 1.8</td>
													<td>Win 98+ / OSX.1+</td>
													<td class="center d-lg-none">1.8</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Seamonkey 1.1</td>
													<td>Win 98+ / OSX.2+</td>
													<td class="center d-lg-none">1.8</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Gecko</td>
													<td>Epiphany 2.20</td>
													<td>Gnome</td>
													<td class="center d-lg-none">1.8</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>Safari 1.2</td>
													<td>OSX.3</td>
													<td class="center d-lg-none">125.5</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>Safari 1.3</td>
													<td>OSX.3</td>
													<td class="center d-lg-none">312.8</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>Safari 2.0</td>
													<td>OSX.4+</td>
													<td class="center d-lg-none">419.3</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>Safari 3.0</td>
													<td>OSX.4+</td>
													<td class="center d-lg-none">522.1</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>OmniWeb 5.5</td>
													<td>OSX.4+</td>
													<td class="center d-lg-none">420</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>iPod Touch / iPhone</td>
													<td>iPod</td>
													<td class="center d-lg-none">420.1</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Webkit</td>
													<td>S60</td>
													<td>S60</td>
													<td class="center d-lg-none">413</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 7.0</td>
													<td>Win 95+ / OSX.1+</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 7.5</td>
													<td>Win 95+ / OSX.2+</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 8.0</td>
													<td>Win 95+ / OSX.2+</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 8.5</td>
													<td>Win 95+ / OSX.2+</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 9.0</td>
													<td>Win 95+ / OSX.3+</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 9.2</td>
													<td>Win 88+ / OSX.3+</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera 9.5</td>
													<td>Win 88+ / OSX.3+</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Opera for Wii</td>
													<td>Wii</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Nokia N800</td>
													<td>N800</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Presto</td>
													<td>Nintendo DS browser</td>
													<td>Nintendo DS</td>
													<td class="center d-lg-none">8.5</td>
													<td class="center d-lg-none">C/A<sup>1</sup></td>
												</tr>
												<tr>
													<td>KHTML</td>
													<td>Konqureror 3.1</td>
													<td>KDE 3.1</td>
													<td class="center d-lg-none">3.1</td>
													<td class="center d-lg-none">C</td>
												</tr>
												<tr>
													<td>KHTML</td>
													<td>Konqureror 3.3</td>
													<td>KDE 3.3</td>
													<td class="center d-lg-none">3.3</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>KHTML</td>
													<td>Konqureror 3.5</td>
													<td>KDE 3.5</td>
													<td class="center d-lg-none">3.5</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Tasman</td>
													<td>Internet Explorer 4.5</td>
													<td>Mac OS 8-9</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">X</td>
												</tr>
												<tr>
													<td>Tasman</td>
													<td>Internet Explorer 5.1</td>
													<td>Mac OS 7.6-9</td>
													<td class="center d-lg-none">1</td>
													<td class="center d-lg-none">C</td>
												</tr>
												<tr>
													<td>Tasman</td>
													<td>Internet Explorer 5.2</td>
													<td>Mac OS 8-X</td>
													<td class="center d-lg-none">1</td>
													<td class="center d-lg-none">C</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>NetFront 3.1</td>
													<td>Embedded devices</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">C</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>NetFront 3.4</td>
													<td>Embedded devices</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">A</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>Dillo 0.8</td>
													<td>Embedded devices</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">X</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>Links</td>
													<td>Text only</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">X</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>Lynx</td>
													<td>Text only</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">X</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>IE Mobile</td>
													<td>Windows Mobile 6</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">C</td>
												</tr>
												<tr>
													<td>Misc</td>
													<td>PSP browser</td>
													<td>PSP</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">C</td>
												</tr>
												<tr class="gradeU">
													<td>Other browsers</td>
													<td>All others</td>
													<td>-</td>
													<td class="center d-lg-none">-</td>
													<td class="center d-lg-none">U</td>
												</tr>
											</tbody>
										</table>
									</div>
								</section>
							</div>
						</div>
		<!-- photo -->
        <script language="JavaScript">
    Webcam.set({
        width: 480,
        height: 360,
        image_format: 'jpeg',
        jpeg_quality: 90,
    });
  
    Webcam.attach( '#my_camera1' );
  
    function take_snapshot_student() {
        Webcam.snap( function(data_uri_student) {
            $(".image-tag-student").val(data_uri_student);
            document.getElementById('results_1').innerHTML = '<img src="'+data_uri_student+'"/>';
        } );
    }
</script>
		<!-- Vendor -->
		<script src="vendor/jquery/jquery.js"></script>		<script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>		<script src="master/style-switcher/style.switcher.js"></script>		<script src="vendor/popper/umd/popper.min.js"></script>		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>		<script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>		<script src="vendor/common/common.js"></script>		<script src="vendor/nanoscroller/nanoscroller.js"></script>		<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>		<script src="vendor/jquery-placeholder/jquery.placeholder.js"></script>
		<!-- Specific Table Vendor -->
         <!-- Tables -->
		<script src="vendor/datatables/media/js/jquery.dataTables.min.js"></script>		<script src="vendor/datatables/media/js/dataTables.bootstrap5.min.js"></script>		<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js"></script>		<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js"></script>		<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js"></script>		<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js"></script>		<script src="vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js"></script>		<script src="vendor/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js"></script>		<script src="vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js"></script>
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>
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