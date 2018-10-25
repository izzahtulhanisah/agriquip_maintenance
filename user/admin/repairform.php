
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
				<a href="dashboard.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Repair Form</span>
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
				$equipment_no = $_POST['equipment_no'];
				$date_received = $_POST['date_received'];
				$submitted_by = $_POST['submitted_by'];
				$date_released = $_POST['date_released'];
				$remark = $_POST['remark'];

				$sql = "INSERT INTO repair (type_name,equipment_no,date_received,submitted_by,date_released,remark)
				    VALUES ('$type_name','$equipment_no','$date_received','$submitted_by','$date_released','$remark')";
				$result = mysqli_query($conn,$sql);



				if($result === TRUE){
					echo "<script type = \"text/javascript\">
						alert(\"Successfully Submitted Repair Form\");
						window.location = (\"repairlist.php\")
						</script>";
					}

				else {
					echo "<script type = \"text/javascript\">
						alert(\"Failed to Submit Repair Form\");
						window.location = (\"repairform.php\")
						</script>";
					}
				}
				?>


			<div class="blank-page">

				<div class="header">
						<h4 class="title"><center>REPAIR MAINTENANCE FORM</center></h4>
				</div>
				<hr>
				<div class="content">
						<form action="" method="post">
							<input type="hidden" name="repair_id">
								<div class="row">
										<div class="col-md-6">
											<div class="form-group">
													<label>Equipment Type</label>
													<select class="form-control border-input select1" name= "type_name" id="type_name">
															<option value="" selected>Please select</option>
															<?php

															$selecttype = "SELECT * FROM equipment_type";
															$resulttype = $conn->query($selecttype);
															while($rowtype = $resulttype->fetch_assoc()){
																$type_name = $rowtype["type_name"];

															echo "<option>". $type_name ."</option>";

															}
															?>
													</select>
											</div>
										</div>

										<div class="col-md-6">
												<div class="form-group">
													<label>Equipment Number</label>
													<select class="form-control border-input select2" name= "equipment_no" id="type_name">
															<option value="" selected>Please select</option>
															<?php

															$selectequipment = "SELECT * FROM equipment ORDER BY equipment_no ASC";
															$resultequipment = $conn->query($selectequipment);
															while($rowequipment = $resultequipment->fetch_assoc()){
																$type_name = $rowequipment["type_name"];
																$equipment_no = $rowequipment["equipment_no"];

															echo "<option class='". $type_name ."'>". $equipment_no ."</option>";

															}
															?>
													</select>
												</div>
										</div>
								</div>

								<div class="row">
										<div class="col-md-6">
												<div class="form-group">
														<label>Date Received</label>
														<input type="date" name="date_received" class="form-control border-input">
												</div>
										</div>
								</div>

								<hr>

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
														<label>Submitted By</label>
														<input type="text" name="submitted_by" class="form-control border-input" placeholder="eg: Izzahtul Hanisah">
												</div>
										</div>
										<div class="col-md-6">
												<div class="form-group">
														<label>Date Release</label>
														<input type="date" name="date_released" class="form-control border-input">
												</div>
										</div>
								</div>

								<div class="row">
										<div class="col-md-12">
												<div class="form-group">
														<label>Remark</label>
														<textarea rows="5" name="remark" class="form-control border-input"
														placeholder="Any description"></textarea>
												</div>
										</div>
								</div>

								<div class="text-left">
										<button type="submit" name="send" class="btn btn-primary btn-fill btn-wd">Submit</button>
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
