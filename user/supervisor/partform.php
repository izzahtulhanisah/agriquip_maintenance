
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

<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}



			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});



		});
		</script>



</head>
<body>
<div id="wrapper">
       <!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="index.html">AGRIQUIP</a></h1>
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	  <section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt"></i></button>
			</section>
			<form class=" navbar-left-right">
              <input type="text"  value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
              <input type="submit" value="" class="fa fa-search">
            </form>
            <div class="clearfix"> </div>
           </div>


            <!-- Brand and toggle get grouped for better mobile display -->


			<div class="clearfix">

     </div>

		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                    <li>
                        <a href="index.html" class=" hvr-bounce-to-right"><i class="fa fa-home nav_icon"></i><span class="nav-label"> Dashboards</span> </a>
                    </li>


					 					<li>
                        <a href="inbox.html" class=" hvr-bounce-to-right"><i class="fa fa-pencil nav_icon"></i> <span class="nav-label">New Equipment</span> </a>
                    </li>

                    <li>
                        <a href="gallery.html" class=" hvr-bounce-to-right"><i class="fa fa-sticky-note nav_icon"></i> <span class="nav-label">Repair Form</span> </a>
                    </li>
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-folder-open nav_icon"></i> <span class="nav-label">Repair Record</span><span class="fa arrow"></span></a>
                    </li>
										<li>
                        <a href="gallery.html" class=" hvr-bounce-to-right"><i class="fa fa-newspaper-o nav_icon"></i> <span class="nav-label">Report</span> </a>
                    </li>
										<li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i> <span class="nav-label">User Profile</span></a>
                    </li>
                </ul>
            </div>
			</div>
        </nav>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">

 	<!--banner-->
		     <div class="banner">
		    	<h2>
				<a href="dashboard.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Repair Form</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">


			<div class="blank-page">

				<div class="header">
						<h4 class="title"><center>REPAIR MAINTENANCE FORM</center></h4>
				</div>
				<hr>
				<div class="content">
						<form>
								<div class="row">
										<div class="col-md-6">
											<div class="form-group">
													<label>Category</label>
													<select class="form-control border-input">
															<option>MHBT - Baggage Trolley</option>
															<option>MHCT - Container Trolley</option>
															<option>MHPD - Pallet Dolley</option>
													</select>
											</div>
										</div>

										<div class="col-md-6">
												<div class="form-group">
													<label>Equipment ID</label>
													<input type="text" class="form-control border-input" placeholder="ID/SKU" value="MHBT335">
												</div>
										</div>
								</div>

								<div class="row">
										<div class="col-md-6">
												<div class="form-group">
														<label>Received by</label>
														<input type="text" class="form-control border-input" placeholder="PIC" value="Izzahtul Hanisah">
												</div>
										</div>

										<div class="col-md-6">
												<div class="form-group">
														<label>Date Received</label>
														<input type="date" class="form-control border-input">
												</div>
										</div>
								</div>

								<div class="row">
										<div class="col-md-6">
												<div class="form-group">
														<label>Part(s)</label>
														<div class="checkbox">
																<label>
																		<input type="checkbox" value="">1. Turn Table
																</label>
														</div>
														<div class="checkbox">
																<label>
																		<input type="checkbox" value="">2. Steering Frame
																</label>
														</div>
												</div>
										</div>
								</div>

								<hr>

								<div class="row">
										<div class="col-md-6">
												<div class="form-group">
														<label>Inspected By</label>
														<input type="text" class="form-control border-input" placeholder="City" value="Izzahtul Hanisah">
												</div>
										</div>
										<!-- <div class="col-md-4">
												<div class="form-group">
														<label>Country</label>
														<input type="text" class="form-control border-input" placeholder="Country" value="Australia">
												</div>
										</div> -->
										<div class="col-md-6">
												<div class="form-group">
														<label>Date</label>
														<input type="date" class="form-control border-input">
												</div>
										</div>
								</div>

								<div class="row">
										<div class="col-md-12">
												<div class="form-group">
														<label>Remark</label>
														<textarea rows="5" class="form-control border-input"
														placeholder="Any description">Any description..
														</textarea>
												</div>
										</div>
								</div>
								<div class="text-left">
										<button type="submit" class="btn btn-primary btn-fill btn-wd">Submit</button>
								</div>
								<div class="clearfix"></div>
						</form>
				</div>

	    </div>
	</div>

	<!--//faq-->
		<!---->
<div class="copy">
            <p> &copy; 2018 AgriQuip Machinery Sdn Bhd | Template by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	    </div>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>

<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>
