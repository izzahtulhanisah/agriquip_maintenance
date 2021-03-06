
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>AgriQuip Maintenance System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet">
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
</head>
<body>
	<div class="login">
		<h1><a href="index.html">AgriQuip Maintenance </a></h1>

		<div class="login-bottom">
			 <ul id="myTab" class="nav nav-tabs" role="tablist">
				 <li role="presentation" class="active"><a href="#staff" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Staff</a></li>
				 <li role="presentation"><a href="#supervisor" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Supervisor</a></li>
				 <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Admin</a></li>
			 </ul>
			 <div id="myTabContent" class="tab-content">
				 <!-- START TAB ONE TAB ONE TAB ONE START -->
				 <div role="tabpanel" class="tab-pane fade in active" id="staff" aria-labelledby="home-tab">
					 <h2>Login</h2>
		 			<form action="user/staff/staff_login.php" id="staff_login" method="POST">
		 			<div class="col-md-6">
		 				<div class="login-mail">
		 					<input type="text" placeholder="Staff ID" name="staff_id">
		 					<i class="fa fa-envelope"></i>
		 				</div>
		 				<div class="login-mail">
		 					<input type="password" placeholder="Password" name="staff_password">
		 					<i class="fa fa-lock"></i>
		 				</div>
		 				   <a class="news-letter " href="#">
		 						 <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
		 					 </a>
		 			</div>

		 			<div class="col-md-6 login-do">
		 				<label class="hvr-shutter-in-horizontal login-sub">
		 					<input type="submit" value="Login">
		 					</label>
		 					<p>Do not have an account?</p>
		 				<a href="signup.html" class="hvr-shutter-in-horizontal">Contact Admin</a>
		 			</div>
		 			<div class="clearfix"> </div>
		 			</form>
				 </div>
				 <!-- END TAB ONE TAB ONE TAB ONE END -->

				 <div role="tabpanel" class="tab-pane fade" id="supervisor" aria-labelledby="profile-tab">
					 <h2>Login</h2>
		 			<form action="user/supervisor/supervisor_login.php" id=supervisor_login" method="POST">
		 			<div class="col-md-6">
		 				<div class="login-mail">
		 					<input type="text" placeholder="Supervisor ID" name="supervisor_id">
		 					<i class="fa fa-envelope"></i>
		 				</div>
		 				<div class="login-mail">
		 					<input type="password" placeholder="Password" name="supervisor_password">
		 					<i class="fa fa-lock"></i>
		 				</div>
		 				   <a class="news-letter " href="#">
		 						 <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
		 					 </a>
		 			</div>

		 			<div class="col-md-6 login-do">
		 				<label class="hvr-shutter-in-horizontal login-sub">
		 					<input type="submit" value="Login">
		 					</label>
		 					<p>Do not have an account?</p>
		 				<a href="signup.html" class="hvr-shutter-in-horizontal">Contact Admin</a>
		 			</div>
		 			<div class="clearfix"> </div>
		 			</form>
				 </div>


				 <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
					 <h2>Login</h2>
		 			<form>
		 			<div class="col-md-6">
		 				<div class="login-mail">
		 					<input type="text" placeholder="Email" >
		 					<i class="fa fa-envelope"></i>
		 				</div>
		 				<div class="login-mail">
		 					<input type="password" placeholder="Password" >
		 					<i class="fa fa-lock"></i>
		 				</div>
		 				   <a class="news-letter " href="#">
		 						 <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
		 					 </a>
		 			</div>

		 			<div class="col-md-6 login-do">
		 				<label class="hvr-shutter-in-horizontal login-sub">
		 					<a href="user/admin/dashboard.php">Login</a>
		 					<!-- <input type="submit" value="Login"> -->
		 					</label>
		 					<p>Do not have an account?</p>
		 				<a href="signup.html" class="hvr-shutter-in-horizontal">Contact Admin</a>
		 			</div>
		 			<div class="clearfix"> </div>
		 			</form>
				 </div>

			 </div>

		</div>
	</div>
		<!---->
<div class="copy-right">
            <p> &copy; 2018 AgriQuip Machinery Sdn Bhd | Template by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	    </div>
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>
