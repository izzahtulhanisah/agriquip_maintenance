
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

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>

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

		<script>

		$( document ).ready(function() {
			$('#select1').on("change", function(){
			  var selectedClass = $(this).val(); //store the selected value
			  $('#select2').val("");             //clear the second dropdown selected value

			  //now loop through the 2nd dropdown, hide the unwanted options
			  $('#select2 option').each(function () {
				var newValue = $(this).attr('class');
				if (selectedClass != newValue && selectedClass != "") {
					$(this).hide();
				}
			  else{$(this).show(); }
			 });
			});
		});

		</script>

		<script>

		$( document ).ready(function() {
			$('.select1').on("change", function(){
			  var selectedClass = $(this).val(); //store the selected value
			  $('.select2').val("");             //clear the second dropdown selected value

			  //now loop through the 2nd dropdown, hide the unwanted options
			  $('.select2 option').each(function () {
				var newValue = $(this).attr('class');
				if (selectedClass != newValue && selectedClass != "") {
					$(this).hide();
				}
			  else{$(this).show(); }
			 });
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
                        <a href="index.html" class=" hvr-bounce-to-right"><i class="fa fa-home nav_icon"></i><span class="nav-label"> Dashboard</span> </a>
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
				<span>New Part</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">

		<?php
				// error_reporting(0);
				date_default_timezone_set("Asia/Kuala_Lumpur");
				include "database.php";

				if(isset($_POST['send'])){

				$type_name = $_POST['type_name'];
				$part_no = $_POST['part_no'];
				$part_name = $_POST['part_name'];

				$sql = "INSERT INTO part (type_name,part_no,part_name)
				    VALUES ('$type_name','$part_no','$part_name')";
				$result = mysqli_query($conn,$sql);


				if($result === TRUE){
					echo "<script type = \"text/javascript\">
						alert(\"Successfully Added New Part\");
						window.location = (\"part.php\")
						</script>";
					}

				else {
					echo "<script type = \"text/javascript\">
						alert(\"Failed to Add New Part\");
						window.location = (\"partform.php\")
						</script>";
					}
				}
				?>

			<div class="blank-page">

				<div class="header">
						<h4 class="title"><center>PART REGISTRATION FORM</center></h4>
				</div>
				<hr>
				<div class="content">
						<form action="" method="post">
							<div class="row">
									<div class="col-md-6">
										<div class="form-group">
												<label>Company</label>
												<select class="form-control border-input select1" name= "company_name" id="company_name">
														<option value="" selected>Please select</option>
														<?php

														$selectcompany = "SELECT * FROM company";
														$resultcompany = $conn->query($selectcompany);
														while($rowcompany = $resultcompany->fetch_assoc()){
															$company_name = $rowcompany["company_name"];

														echo "<option>". $company_name ."</option>";

														}
														?>
												</select>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
												<label>Equipment Type</label>
												<select class="form-control border-input select2" name= "type_name" id="type_name">
														<option value="" selected>Please select</option>
														<?php

														$selecttype = "SELECT * FROM equipment_type";
														$resulttype = $conn->query($selecttype);
														while($rowtype = $resulttype->fetch_assoc()){
															$company_name = $rowtype["company_name"];
															$type_name = $rowtype["type_name"];

														echo "<option class='". $company_name ."'>". $type_name ."</option>";

														}
														?>
												</select>
										</div>
									</div>
							</div>

								<div class="row">
										<div class="col-md-12">
												<div class="form-group">
													<label>Part Number</label>
													<input type="text" class="form-control border-input" name="part_no" placeholder="Eg: PD-1.1 / BT-2.2 / CT-3.3">
												</div>
										</div>
								</div>

								<div class="row">
										<div class="col-md-12">
												<div class="form-group">
														<label>Part Name</label>
														<input type="text" class="form-control border-input" name="part_name" placeholder="Eg: Tow Bar">
												</div>
										</div>
								</div>

								<div class="text-left">
										<button type="submit" class="btn btn-primary btn-fill btn-wd" name="send">Submit</button>
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
