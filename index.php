<?php session_start();
 include 'connect.php';
 if(isset($_POST['submit']))
 {
	$user=$_POST['username'];
	$pass=$_POST['pwd'];
	$query=$con->prepare("select name,desig,photo from admin where (uname=? and pwd=?)");
	$query->bind_param("ss",$user,$pass);
	$query->execute();
	$query->bind_result($name,$desig,$photo);
	$details=$query->fetch();
	$query->close();

	if($details)
     {
		if($desig=='MANAGING DIRECTOR')
		{
			$_SESSION['name']=$name;
        $_SESSION['deg']=$desig;
        $_SESSION['photo']=$photo; 


		echo "<script>document.location='login.php'</script";
		}  
		
}
else 
      {
        // echo "<script>alert('password is incorrect')</script>";
		echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
		<strong>Password or User name is incorrect.</strong> <a href='' class='alert-link'></a> 
		<button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true' aria-label='Close'></button>
	</div>";

      } 
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
	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo float-start">
					<img src="img/ifl-logo.jpg" height="70" alt="Porto Admin">
				</a>
				<div class="panel card-sign">
					<div class="card-title-sign mt-3 text-end">
						<h2 class="title text-uppercase font-weight-bold m-0"><i class="bx bx-user-circle me-1 text-6 position-relative top-5"></i> Log In</h2>
					</div>
					<div class="card-body">
						<form method="POST">
							<div class="form-group mb-3">
								<label>Username</label>
								<div class="input-group">
									<input name="username" type="text" class="form-control form-control-lg">
									<span class="input-group-text">
										<i class="bx bx-user text-4"></i>
									</span>
								</div>
							</div>
							<div class="form-group mb-3">
								<div class="clearfix">
									<label class="float-start">Password</label>
									<!-- <a href="pages-recover-password.html" class="float-end">Lost Password?</a> -->
								</div>
								<div class="input-group">
									<input name="pwd" type="password" class="form-control form-control-lg">
									<span class="input-group-text">
										<i class="bx bx-lock text-4"></i>
									</span>
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
									<button name="submit" class="mb-1 mt-1 me-1 btn btn-success">Sign In</button>
								</div>
							</div>
							<!-- <span class="mt-3 mb-3 line-thru text-center text-uppercase">
								<span>or</span>
							</span>
							<!-- <div class="mb-1 text-center">
								<a class="btn btn-facebook mb-3 ms-1 me-1" href="#">Connect with <i class="fab fa-facebook-f"></i></a>
								<a class="btn btn-twitter mb-3 ms-1 me-1" href="#">Connect with <i class="fab fa-twitter"></i></a>
							</div> 
							<p class="text-center">Don't have an account yet? <a href="pages-signup.html">Sign Up!</a></p> -->
						</form>
					</div>
				</div>
				<p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2021. All Rights Reserved.</p>
				<p class="text-center text-muted mt-3 mb-3">Ifl Green Pvt limited</p>

			</div>
		</section>
		<!-- end: page -->
		<!-- Vendor -->
		<script src="vendor/jquery/jquery.js"></script>		<script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>		<script src="master/style-switcher/style.switcher.js"></script>		<script src="vendor/popper/umd/popper.min.js"></script>		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>		<script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>		<script src="vendor/common/common.js"></script>		<script src="vendor/nanoscroller/nanoscroller.js"></script>		<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>		<script src="vendor/jquery-placeholder/jquery.placeholder.js"></script>
		<!-- Specific Page Vendor -->

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