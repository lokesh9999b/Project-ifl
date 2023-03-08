<?php
include 'connect.php';
if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $name=strtoupper($name);
    $id=$_POST['id'];
    $deg=$_POST['deg'];
    $deg=strtoupper($deg);
    $dob=$_POST['dob'];
    $doj=$_POST['doj'];
    $aadhar=$_POST['aadhar'];
    $mobile=$_POST['mobile'];
    $alter=$_POST['altno'];
    $mail=$_POST['mail'];
    $gender=$_POST['gender'];
    $branch=$_POST['branch'];
    $profile=$_POST['profile'];

    $query="INSERT INTO `emp_details`(`name`, `desig`, `dob`, `doj`, `aadhar`, `mobile`, `alternative`, `email`, `gender`, `branch`, `emp_id`, `photo`) VALUES ('$name','$deg','$dob','$doj','$aadhar','$mobile','$alter','$mail','$gender','$branch','$id','$profile')";
	$res=mysqli_query($con,$query);
     if($res)
	 {
		echo "<script>alert('Data inserted successfully')</script>";
		// echo "<script>$('#modalHeaderColorSuccess').modal('show');</script>";
        echo "<script>$('#modalHeaderColorSuccess')</script>";

		// echo"<script>document.location.href='login.php'</script>";
	 }
	 else
	 {
		echo "<script>alert('Data NOT inserted successfully')</script>";
     }
}

?>











<!doctype html><html class="fixed">
	<head>
		<!-- Basic -->
		<meta charset="UTF-8">
		<title>IFL | Register Page</title>
		<meta name="keywords" content="HTML5 Admin Template">
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!-- Web Fonts  -->		<link href="../../../css-1?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">		<link rel="stylesheet" href="vendor/animate/animate.compat.css">		<link rel="stylesheet" href="vendor/font-awesome/css/all.min.css">		<link rel="stylesheet" href="vendor/boxicons/css/boxicons.min.css">		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css">		<link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css">
		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap-fileupload/bootstrap-fileupload.min.css"> <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.css">		<link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.theme.css"> <link rel="stylesheet" href="vendor/select2/css/select2.css">		<link rel="stylesheet" href="vendor/select2-bootstrap-theme/select2-bootstrap.min.css">		<link rel="stylesheet" href="vendor/bootstrap-multiselect/css/bootstrap-multiselect.css">		<link rel="stylesheet" href="vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">		<link rel="stylesheet" href="vendor/bootstrap-timepicker/css/bootstrap-timepicker.css">		<link rel="stylesheet" href="vendor/dropzone/basic.css">		<link rel="stylesheet" href="vendor/dropzone/dropzone.css">		<link rel="stylesheet" href="vendor/bootstrap-markdown/css/bootstrap-markdown.min.css">		<link rel="stylesheet" href="vendor/summernote/summernote-bs4.css">
		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">
		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="master/style-switcher/style.switcher.localstorage.js"></script>
	</head>
	<body>
		<!-- <section class="body"> -->
			<!-- start: header -->
			<a class="mb-1 mt-1 me-1 modal-basic btn btn-success" href="#modalHeaderColorSuccess">Success</a>
            <div id="modalHeaderColorSuccess" class="modal-block modal-header-color modal-block-success mfp-hide">
										<section class="card">
											<header class="card-header">
												<h2 class="card-title">Success!</h2>
											</header>
											<div class="card-body">
												<div class="modal-wrapper">
													<div class="modal-icon">
														<i class="fas fa-check"></i>
													</div>
													<div class="modal-text">
														<h4 class="font-weight-bold text-dark">Success</h4>
														<p>This is a successfull message.</p>
													</div>
												</div>
											</div>
											<footer class="card-footer">
												<div class="row">
													<div class="col-md-12 text-end">
														<button class="btn btn-success modal-dismiss">OK</button>
													</div>
												</div>
											</footer>
										</section>
									</div>	

				<!-- end: sidebar -->
				<section role="main" class="content-body card-margin">
    
					<!-- start: page -->
						<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											
										</div>
										<h2 class="card-title">Registration Form</h2>
									</header>
									<div class="card-body">
										<form class="form-horizontal form-bordered" method="post">
                                        <div class="form-group row pb-4">

<label class="col-lg-3 control-label text-lg-end pt-2" for="inputPlaceholder">Full Name</label>
<div class="col-lg-6">
<input type="text" class="form-control" name="name" placeholder="Enter Your Name" id="inputPlaceholder" required>
</div>
</div>
<div class="form-group row pb-4">

<label class="col-lg-3 control-label text-lg-end pt-2" for="inputPlaceholder">Employee Id</label>
<div class="col-lg-6">
<input type="text" class="form-control" name="id" placeholder="Enter Your Employee Id" id="inputPlaceholder" required>
</div>
</div>
<div class="form-group row pb-4">

<label class="col-lg-3 control-label text-lg-end pt-2" for="inputPlaceholder">Designation</label>
<div class="col-lg-6">
<input type="text" class="form-control" name="deg" placeholder="Enter Your Designagtion" id="inputPlaceholder" required>
</div>
</div>
<div class="form-group row pb-3">
<label class="col-lg-3 control-label text-lg-end pt-2">DOB</label>
<div class="col-lg-6">
<div class="input-group">
<span class="input-group-text">
<i class="fas fa-calendar-alt"></i>
</span>
<input type="date" data-plugin-datepicker="" name="dob" class="form-control">
</div>
</div>
</div>
<div class="form-group row pb-3">
<label class="col-lg-3 control-label text-lg-end pt-2">Date Of Joining</label>
<div class="col-lg-6">
<div class="input-group">
<span class="input-group-text">
<i class="fas fa-calendar-alt"></i>
</span>
<input type="date" data-plugin-datepicker="" name="doj" class="form-control">
</div>
</div>
</div><div class="form-group row pb-4">
<label class="col-lg-3 control-label text-lg-end pt-2">Aadhar No.</label>
<div class="col-lg-6">
<div class="input-group">
<span class="input-group-text">
<i class="fas fa-user"></i>
</span>
<input type="text"  name="aadhar"  placeholder="0000-0000-0000" class="form-control" placeholder="Left icon" required>
</div>
</div>
</div>
<div class="form-group row pb-3">
<label class="col-lg-3 control-label text-lg-end pt-2">Phone</label>
<div class="col-lg-6">
<div class="input-group">
<span class="input-group-text">
<i class="fas fa-phone"></i>
</span>
<input type="text" name="mobile" placeholder="00000-00000" class="form-control" required>
</div>
</div>
</div>

<div class="form-group row pb-3">
<label class="col-lg-3 control-label text-lg-end pt-2">Alt.Phone</label>
<div class="col-lg-6">
<div class="input-group">
<span class="input-group-text">
<i class="fas fa-phone"></i>
</span>
<input type="text"  name="altno"  class="form-control" required>
</div>
</div>
</div>

<div class="form-group row pb-3">
<label class="col-lg-3 control-label text-lg-end pt-2">Email ID</label>
<div class="col-lg-6">
<div class="input-group">
<span class="input-group-text">
<i class="fas fa-envelope"></i>
</span>
<input type="text" class="form-control" name="mail" placeholder="Email" >
</div>
</div>
</div>
<div class="form-group row pb-3">
<label class="col-sm-3 control-label text-sm-end pt-2">Gender <span class="required">*</span></label>
<div class="col-sm-9">
<div class="radio-custom radio-default">
<input name="gender" type="radio" value="male" required="">
<label for="MALE">Male</label>
</div>
<div class="radio-custom radio-default">
<input name="gender" type="radio" value="female">
<label for="FEMALE">Female</label>
</div>
<div class="radio-custom radio-default">
<input name="gender" type="radio" value="others">
<label for="OTHERS">Others</label>
</div>
<label class="error" for="gender"></label>
</div>
</div>
<div class="form-group row pb-3">
<label class="col-lg-3 control-label text-lg-end pt-2">Branch</label>
<div class="col-lg-6">
<select data-plugin-selecttwo="" name="branch" class="form-control populate" requires>
<!-- <optgroup label="Select "> -->
<option value="0">Select Branch</option>
<option value="JRG">Jangareddygudem 061</option>
<option value="KHM">Kothagudem 059</option>
<option value="KHM">Khammam 054</option>
<option value="KHM">Rajahmundry 051</option>
<option value="KHM">Manuguru 063</option>
</optgroup>

</select>
</div>
</div>
<div class="form-group row pb-4">
												<label class="col-lg-3 control-label text-lg-end pt-2">Upload Photo</label>
												<div class="col-lg-6">
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<div class="input-append">
															<div class="uneditable-input">
																<i class="fas fa-file fileupload-exists"></i>
																<span class="fileupload-preview"></span>
															</div>
															<span class="btn btn-default btn-file">
																<span class="fileupload-exists">Change</span>
																<span class="fileupload-new">Select file</span>
																<input type="file" name="profile" required>
															</span>
															<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
														</div>
													</div>
												</div>
											</div>
                                            <div class="row">
								<!-- <div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="RememberMe" name="rememberme" type="checkbox">
										<label for="RememberMe">Remember Me</label>
									</div>
								</div> -->
								<div class="col-sm-7   text-end">
									<button type="submit" name="register" class="mb-1 mt-1 me-1 btn btn-info">Register</button>
								</div>
							</div>
											
										</form>
									</div>
								</section>
							</div>
						</div>
                       
						
		<!-- </section> -->
		<!-- Vendor -->
		<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="vendor/jquery/jquery.js"></script>		<script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>		<script src="master/style-switcher/style.switcher.js"></script>		<script src="vendor/popper/umd/popper.min.js"></script>		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>		<script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>		<script src="vendor/common/common.js"></script>		<script src="vendor/nanoscroller/nanoscroller.js"></script>		<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>		<script src="vendor/jquery-placeholder/jquery.placeholder.js"></script>
		<!-- Specific Page Vendor -->
		<script src="vendor/autosize/autosize.js"></script>		<script src="vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
        <script src="vendor/jquery-ui/jquery-ui.js"></script>		<script src="vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js"></script>		<script src="vendor/select2/js/select2.js"></script>		<script src="vendor/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>		<script src="vendor/jquery-maskedinput/jquery.maskedinput.js"></script>		<script src="vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>		<script src="vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>		<script src="vendor/fuelux/js/spinner.js"></script>		<script src="vendor/dropzone/dropzone.js"></script>		<script src="vendor/bootstrap-markdown/js/markdown.js"></script>		<script src="vendor/bootstrap-markdown/js/to-markdown.js"></script>		<script src="vendor/bootstrap-markdown/js/bootstrap-markdown.js"></script>		<script src="vendor/summernote/summernote-bs4.js"></script>		<script src="vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>		<script src="vendor/ios7-switch/ios7-switch.js"></script>
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>
		<!-- Analytics to Track Preview Website -->
        <script src="js/examples/examples.modals.js"></script>
        <script src="vendor/modernizr/modernizr.js"></script>
		<script src="master/style-switcher/style.switcher.localstorage.js"></script>
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