<?php
include '../connect.php';
$id=$_GET['updateid'];
$query1="SELECT * FROM `register` WHERE `emp_id`='$id'";
$result=mysqli_query($con,$query1);
$row=mysqli_fetch_assoc($result);
$name1=$row['ename'];
$deg1=$row['desig'];
$dob1=$row['dob'];
$doj1=$row['doj'];
$aadhar1=$row['aadhar'];
$mobile1=$row['contact'];
$alter1=$row['alterno'];
$mail1=$row['mail'];
$gender1=$row['gender'];
$branch1=$row['branch'];
$photo1=$row['photo'];

if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $name=strtoupper($name);
   
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
    $image=$_FILES['profile']['name'];
	$tmp_image=$_FILES['profile']['tmp_name'];
	$folder="uploads/profiles/".$image;
	move_uploaded_file($tmp_image,$folder);
	
    

    $query="UPDATE `register` SET `ename`='$name',`desig`='$deg',`dob`='$dob',`doj`='$doj',`aadhar`='$aadhar',`contact`='$mobile',`alterno`='$alter',`mail`='$mail',`gender`='$gender',`branch`='$branch',`emp_id`='$id',`photo`='$folder' WHERE `emp_id`='$id'";
	$res=mysqli_query($con,$query);
     if($res)
	 {
		echo "<script>alert('Data Updated successfully')</script>";
		
		echo"<script>document.location.href='dashboard.php'</script>";

		
	 }
	 else
	 {
		echo "<script>alert('Data NOT updated')</script>";
		echo"<script>document.location.href='emp_update.php'</script>";
     }
}

?>


<!doctype html><html class="fixed">
	<head>
		<!-- Basic -->
		<meta charset="UTF-8">
		<title>IFL | UPDATE EMPLOYEE DETAILS</title>
		<meta name="keywords" content="HTML5 Admin Template">
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!-- Web Fonts  -->		<link href="../../../../css-1?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.css">		
        <link rel="stylesheet" href="../vendor/animate/animate.compat.css">		
        <link rel="stylesheet" href="../vendor/font-awesome/css/all.min.css">		
        <link rel="stylesheet" href="../vendor/boxicons/css/boxicons.min.css">		
        <link rel="stylesheet" href="../vendor/magnific-popup/magnific-popup.css">		
        <link rel="stylesheet" href="../vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css">
		<!-- Specific Page ../Vendor CSS -->
		<link rel="stylesheet" href="../vendor/bootstrap-fileupload/bootstrap-fileupload.min.css"> 
        <link rel="stylesheet" href="../vendor/jquery-ui/jquery-ui.css">		
        <link rel="stylesheet" href="../vendor/jquery-ui/jquery-ui.theme.css"> 
        <link rel="stylesheet" href="../vendor/select2/css/select2.css">		
        <link rel="stylesheet" href="../vendor/select2-bootstrap-theme/select2-bootstrap.min.css">		
        <link rel="stylesheet" href="../vendor/bootstrap-multiselect/css/bootstrap-multiselect.css">	
        	<link rel="stylesheet" href="../vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">		
            <link rel="stylesheet" href="../vendor/bootstrap-timepicker/css/bootstrap-timepicker.css">		
            <link rel="stylesheet" href="../vendor/dropzone/basic.css">		
            <link rel="stylesheet" href="../vendor/dropzone/dropzone.css">		
            <link rel="stylesheet" href="../vendor/bootstrap-markdown/css/bootstrap-markdown.min.css">		
            <link rel="stylesheet" href="../vendor/summernote/summernote-bs4.css">
		<!-- Theme CSS -->
		<link rel="stylesheet" href="../css/theme.css">
		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="../css/custom.css">
		<!-- Head Libs -->
		<script src="../vendor/modernizr/modernizr.js"></script>
		<script src="../master/style-switcher/style.switcher.localstorage.js"></script>
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
						<h2 class="text-center">IFL GREEN PRODUCER COMPANY LIMITED</h2>
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
					<section role="main" class="container">
    
					<!-- start: page -->
						<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											
										</div>
										<h3 class="text-center"><b>Employee Details Updation Page</b></h3>
									</header>
									<div class="card-body">
										<form class="form-horizontal form-bordered" method="POST" enctype="multipart/form-data">
                                        <div class="form-group row pb-4">

<label class="col-lg-3 control-label text-lg-end pt-2" for="inputPlaceholder"><b>Full Name</b></label>
<div class="col-lg-6">
<input type="text" class="form-control" name="name" value=<?php echo $name1;?> placeholder="Enter Your Name" id="inputPlaceholder" >
</div>
</div>
<div class="form-group row pb-4">

<label class="col-lg-3 control-label text-lg-end pt-2" for="inputPlaceholder"><b>Employee Id</b></label>
<div class="col-lg-6">
<input type="text" class="form-control" name="id" value=<?php echo $id;?> disabled placeholder="Enter Your Employee Id" id="inputPlaceholder" >
</div>
</div>
<div class="form-group row pb-4">

<label class="col-lg-3 control-label text-lg-end pt-2" for="inputPlaceholder"><b>Designation</b></label>
<div class="col-lg-6">
<input type="text" class="form-control" name="deg" value=<?php echo $deg1;?> placeholder="Enter Your Designagtion" id="inputPlaceholder" >
</div>
</div>
<div class="form-group row pb-3">
<label class="col-lg-3 control-label text-lg-end pt-2"><b>DOB (M/D/Y)</b></label>
<div class="col-lg-6">
<div class="input-group">
<span class="input-group-text">
<i class="fas fa-calendar-alt"></i>
</span>
<input type="text" data-plugin-datepicker="" value=<?php echo $dob1;?> name="dob" class="form-control">
</div>
</div>
</div>
<div class="form-group row pb-3">
<label class="col-lg-3 control-label text-lg-end pt-2"><b>Date Of Joining (M/D/Y)</b></label>
<div class="col-lg-6">
<div class="input-group">
<span class="input-group-text">
<i class="fas fa-calendar-alt"></i>
</span>
<input type="text" data-plugin-datepicker="" value=<?php echo $doj1;?> name="doj" class="form-control">
</div>
</div>
</div><div class="form-group row pb-4">
<label class="col-lg-3 control-label text-lg-end pt-2"><b>Aadhar No</b></label>
<div class="col-lg-6">
<div class="input-group">
<span class="input-group-text">
<i class="fas fa-user"></i>
</span>
<input type="text"  name="aadhar"  placeholder="0000-0000-0000" value=<?php echo $aadhar1;?> class="form-control" placeholder="Left icon" >
</div>
</div>
</div>
<div class="form-group row pb-3">
<label class="col-lg-3 control-label text-lg-end pt-2"><b>Phone</b></label>
<div class="col-lg-6">
<div class="input-group">
<span class="input-group-text">
<i class="fas fa-phone"></i>
</span>
<input type="text" name="mobile" value=<?php echo $mobile1;?> placeholder="00000-00000" class="form-control">
</div>
</div>
</div>

<div class="form-group row pb-3">
<label class="col-lg-3 control-label text-lg-end pt-2"><b>Alt.Phone</b></label>
<div class="col-lg-6">
<div class="input-group">
<span class="input-group-text">
<i class="fas fa-phone"></i>
</span>
<input type="text"  name="altno" value=<?php echo $alter1;?>  class="form-control" >
</div>
</div>
</div>

<div class="form-group row pb-3">
<label class="col-lg-3 control-label text-lg-end pt-2"><b>Email ID</b></label>
<div class="col-lg-6">
<div class="input-group">
<span class="input-group-text">
<i class="fas fa-envelope"></i>
</span>
<input type="text" class="form-control" name="mail" value=<?php echo $mail1;?> placeholder="Email" >
</div>
</div>
</div>
<div class="form-group row pb-3">
<label class="col-sm-3 control-label text-sm-end pt-2"><b>Gender </b><span class="required">*</span></label>
<div class="col-sm-9">
<div class="radio-custom radio-default">
<input name="gender" type="radio" value="male"
<?php 
	 if($row['gender']=='male')
	 {
		echo "checked";
	 }
    ?> 
 >
<label for="MALE">Male</label>
</div>
<div class="radio-custom radio-default">
<input name="gender" type="radio" value="female"
    <?php 
	 if($row['gender']=='female')
	 {
		echo "checked";
	 }
    ?>
 >
<label for="FEMALE">Female</label>
</div>
<div class="radio-custom radio-default">
<input name="gender" type="radio" value="others"
<?php 
	 if($row['gender']=='others')
	 {
		echo "checked";
	 }
    ?> 
>
<label for="OTHERS">Others</label>
</div>
<label class="error" for="gender"></label>
</div>
</div>
<div class="form-group row pb-3">
<label class="col-lg-3 control-label text-lg-end pt-2"><b>Branch</b></label>
<div class="col-lg-6">
<select data-plugin-selecttwo="" name="branch"  value=<?php echo $branch1;?> class="form-control populate" >
<!-- <optgroup label="Select "> -->
<option value="0">Select Branch</option>
<option value="Jangareddygudem 061" 
<?php 
   if($row['branch']=='Jangareddygudem 061')
   {
	echo "selected";
   }
   ?>
>Jangareddygudem 061</option>
<option value="Kothagudem 059"
<?php 
   if($row['branch']=='Kothagudem 059')
   {
	echo "selected";
   }
   ?>
>Kothagudem 059</option>
<option value="Khammam 054"
<?php 
   if($row['branch']=='Khammam 054')
   {
	echo "selected";
   }
   ?>
    >Khammam 054</option>
<option value="Rajahmundry 051" 
<?php 
   if($row['branch']=='Rajahmundry 051')
   {
	echo "selected";
   }
   ?>
>Rajahmundry 051</option>
<option value="Manuguru 063" 
<?php 
   if($row['branch']=='Manuguru 063')
   {
	echo "selected";
   }
   ?>
>Manuguru 063</option>
</optgroup>

</select>
</div>
</div>
<div class="form-group row pb-4">
												<label class="col-lg-3 control-label text-lg-end pt-2"><b>Upload Photo</b></label>
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
																<input type="file" name="profile" value="<?php echo $row['photo'];?>" >
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
								<button type="submit" class=" btn btn-success"  name="register">Update</button>
								</div>
							</div>
							
							
										</form>
									</div>
								</section>
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

		<!-- Vendor -->
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





        <!-- </section> -->
		<!-- Vendor -->
		<script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">

        </script><script src="../vendor/jquery/jquery.js"></script>		
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
		<script src="../vendor/autosize/autosize.js"></script>		
        <script src="../vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
        <script src="../vendor/jquery-ui/jquery-ui.js"></script>		
        <script src="../vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js"></script>		
        <script src="../vendor/select2/js/select2.js"></script>		
        <script src="../vendor/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>		
        <script src="../vendor/jquery-maskedinput/jquery.maskedinput.js"></script>		
        <script src="../vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>		
        <script src="../vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>		
        <script src="../vendor/fuelux/js/spinner.js"></script>		
        <script src="../vendor/dropzone/dropzone.js"></script>		
        <script src="../vendor/bootstrap-markdown/js/markdown.js"></script>		
        <script src="../vendor/bootstrap-markdown/js/to-markdown.js"></script>		
        <script src="../vendor/bootstrap-markdown/js/bootstrap-markdown.js"></script>		
        <script src="../vendor/summernote/summernote-bs4.js"></script>		
        <script src="../vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>		
        <script src="../vendor/ios7-switch/ios7-switch.js"></script>
		<!-- Theme Base, Components and Settings -->
		<script src="../js/theme.js"></script>
		<!-- Theme Custom -->
		<script src="../js/custom.js"></script>
		<!-- Theme Initialization Files -->
		<script src="../js/theme.init.js"></script>
		<!-- Analytics to Track Preview Website -->
        <script src="../js/examples/examples.modals.js"></script>
        <script src="../vendor/modernizr/modernizr.js"></script>
		<script src="../master/style-switcher/style.switcher.localstorage.js"></script>
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