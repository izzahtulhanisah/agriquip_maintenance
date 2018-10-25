
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
                        <a href="dashboard.php" class=" hvr-bounce-to-right"><i class="fa fa-home nav_icon"></i><span class="nav-label"> Dashboard</span> </a>
                    </li>

										<li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-cube nav_icon"></i> <span class="nav-label">Equipment</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="equipmentlist.php" class=" hvr-bounce-to-right"> <i class="fa fa-indent nav_icon"></i>Equipment List</a></li>

														<li><a href="equipmentform.php" class=" hvr-bounce-to-right"> <i class="fa fa-pencil nav_icon"></i>New Equipment</a></li>

                            <!-- <li><a href="type.php" class=" hvr-bounce-to-right"><i class="fa fa-pencil-square-o nav_icon"></i>Manage Type</a></li>

						                <li><a href="part.php" class=" hvr-bounce-to-right"><i class="	fa fa-pencil-square nav_icon"></i>Manage Part</a></li> -->
                        </ul>
                    </li>


										<li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-cog nav_icon"></i> <span class="nav-label">Maintenance</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="repairlist.php" class=" hvr-bounce-to-right"> <i class="fa fa-folder-open nav_icon"></i>Repair Record</a></li>

														<li><a href="repairform.php" class=" hvr-bounce-to-right"> <i class="fa fa-align-left nav_icon"></i>Repair Form</a></li>

                            <!-- <li><a href="type.php" class=" hvr-bounce-to-right"><i class="fa fa-pencil-square-o nav_icon"></i>Manage Type</a></li>

						                <li><a href="part.php" class=" hvr-bounce-to-right"><i class="	fa fa-pencil-square nav_icon"></i>Manage Part</a></li> -->
                        </ul>
                    </li>

										<li>
                        <a href="report.php" class=" hvr-bounce-to-right"><i class="fa fa-newspaper-o nav_icon"></i> <span class="nav-label">Report</span> </a>
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
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Blank</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
			<div class="blank-page">

				<div class="row">
						<div class="col-lg-12">
								<h3 class="page-header">REPORT</h3>
						</div>
						<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
				<div class="row">
						<div class="col-lg-12">
			<?php
			$todaydate=date("Y-m-d");
			$before30=date('Y-m-d', strtotime("-30 days"));
			?>
			<div class="row">
				<form action="reportform.php" method="post" name="report_card" id="form_id" target="myNewWinsr">
					<div class="row">
						<div class="col-lg-8">
							<label>Activity</label>
							<select class="form-control" name="activity" >
								<option value="All">All</option>
								<option value="Incoming">Incoming</option>
								<option value="Outgoing">Outgoing</option>
							</select>
						</div>
					</div>
					<br>
					<label>Type & Sub-type</label>
						<br>
					<div class="row">
						<div class="col-lg-4">
							<select class="form-control select1" name="type">
								<option value ="" ></option>
								<?php

								$selecttype = "SELECT * FROM type";
								$resulttype = $conn->query($selecttype);
								while($rowtype = $resulttype->fetch_assoc()){
									$id = $rowtype["id"];
									$type = $rowtype["type"];

								echo "<option value='". $type ."'>". $type ."</option>";

								}

								?>
							</select>
						</div>
						<div class="col-lg-4">
							<select class="form-control select2" name="subtype" >
								<option value ="" ></option>
								<?php

								$selecttype2 = "SELECT type,subtype FROM subtype";
								$resulttype2 = $conn->query($selecttype2);
								while($rowtype2 = $resulttype2->fetch_assoc()){
									$id = $rowtype2["id"];
									$type = $rowtype2["type"];
									$subtype = $rowtype2["subtype"];

								echo "<option class='".$type."'>". $subtype ."</option>";

								}

								?>
							</select>
						</div>
					</div>
					<br>
					<label>Location & Sub-location</label>
						<br>
					<div class="row">
						<div class="col-lg-4">
							<select class="form-control" id="select1" name="location">
								<option value ="" ></option>
								<?php

								if($secpass == '2'){
									$selectloc = "SELECT * FROM location WHERE manager_id = '$userid'";
								}else{
									$selectloc = "SELECT * FROM location";
								}
								$resultloc = $conn->query($selectloc);
								while($rowloc = $resultloc->fetch_assoc()){
									$id = $rowloc["id"];
									$location = $rowloc["location"];

								echo "<option value='". $location ."'>". $location ."</option>";

								}

								?>
							</select>
						</div>
						<div class="col-lg-4">
							<select class="form-control" id="select2" name="sublocation" >
								<option value ="" ></option>
								<?php

								$selectloc2 = "SELECT location,location2 FROM inventory GROUP BY location,location2";
								$resultloc2 = $conn->query($selectloc2);
								while($rowloc2 = $resultloc2->fetch_assoc()){
									$id = $rowloc2["id"];
									$location = $rowloc2["location"];
									$location2 = $rowloc2["location2"];

								echo "<option class='".$location."'>". $location2 ."</option>";

								}

								?>
							</select>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-4">
							<label>From Date : </label>
							<input class="form-control" name="salesfrom" type="date" value="<?php echo $before30 ?>" id="to_sales_date" />
						</div>
						<div class="col-lg-4">
							<label>To Date : </label>
							<input class="form-control" name="salesto" value="<?php echo $todaydate ?>" type="date" id="to_sales_date" />
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-12 col-xs-12">
							<input class="btn btn-primary" type="submit" value="Generate Report" />
						</div>
					</div>
				</form>
			</div>
						</div>
						<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->

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
