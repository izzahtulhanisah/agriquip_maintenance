

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

<!-- SQL INJECTION --><!-- SQL INJECTION --><!-- SQL INJECTION --><!-- SQL INJECTION -->
			<?php include "database.php";?>


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
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Repair Record</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
			<div class="blank-page">

				<?php
					$equipment_no = $_GET['equipment_no'];
					?>

				<div class="header">
						<center><h4 class="title">REPAIR FORMS : <b><?php echo $equipment_no; ?></b></h4>
							</center>
				</div>
				<hr>

				<div class="body">
					<div class="dataTable_wrapper">
						<div class="table-responsive">
						<table class="table table-bordered table-striped table-hover" id="dataTables-example">
								<thead>
										<tr>
												<th>No.</th>
												<th>Equipment Type</th>
												<th>Repair ID</th>
												<th>Equipment No.</th>
												<th>Date Received</th>
												<th>Date Release</th>
												<th>Action</th>
										</tr>
								</thead>
								<tfoot>
										<tr>
											<th>No.</th>
											<th>Equipment Type</th>
											<th>Repair ID</th>
											<th>Equipment No.</th>
											<th>Date Received</th>
											<th>Date Release</th>
											<th>Action</th>
										</tr>
								</tfoot>
								<tbody>
									<?php
										$count = 0;
										$sql = "SELECT * FROM repair WHERE equipment_no='$equipment_no'";
										$result = $conn->query($sql);

										while($row = $result->fetch_assoc()){

											$type_name = $row["type_name"];
											$equipment_no = $row["equipment_no"];
											$date_received = $row["date_received"];
											$submitted_by = $row["submitted_by"];
											$date_released = $row["date_released"];
											$remark = $row["remark"];
											$repair_id = $row["repair_id"];

											$count++;

									?>

									<tr>
										<td><?php echo $count; ?></td>
										<td><?php echo $type_name; ?></td>
										<td><?php echo $repair_id; ?></td>
										<td><?php echo $equipment_no; ?></td>
										<td><?php echo date('d-m-Y', strtotime($row['date_received'])); ?></td>
										<td><?php echo date('d-m-Y', strtotime($row['date_released'])); ?></td>


										<td>
											<div>
												<a href="repairview.php?repair_id=<?php echo $repair_id;?>" data-toggle="modal"><button type='button' class='btn btn-primary btn-sm'>Details</button></a>
												<a href="#edit_repair<?php echo $repair_id;?>" data-toggle="modal"><button type='button' class='btn btn-warning btn-sm'>Edit</button></a>
												<a href="#delete_repair<?php echo $repair_id;?>" data-toggle="modal"><button type='button' class='btn btn-danger btn-sm'>Delete</button></a>
											</div>
										</td>

										<!-- START MODAL MODAL MODAL MODAL START-->
										<!-- START MODAL MODAL MODAL MODAL START-->
										<!-- START MODAL MODAL MODAL MODAL START-->

										<!-- START OF EDIT MODAL -->
										 <div class="modal fade" id="edit_repair<?php echo $repair_id; ?>" tabindex="-1" role="dialog">
											 <div class="modal-dialog" role="document">
												 <div class="modal-content">
													 <div class="modal-header" style="background-color: lightgreen">
														 <h4 class="modal-title" id="edit_repairLabel"><center>EDIT REPAIR FORM</center></h4>
													 </div>
													 <div class="modal-body">

														 <form method="post" class="form-horizontal" role="form">
															 <input type="hidden" name="update_id" value="<?php echo $repair_id; ?>">


															 <div class="row">
						 											<div class="col-md-4">
						 													<label>Equipment Type :</label>
						                       </div>
						                       <div class="col-md-8" align="left">
						 													<b><input class="form-control" name="type_name" type="text" value="<?php echo $type_name; ?>" ></input></b>
						 											</div>
						 									</div>
															<br>
															<div class="row">
																 <div class="col-md-4">
																		 <label>Equipment No. :</label>
																	 </div>
	 																<div class="col-md-8" align="left">
																		 <b><input class="form-control" name="equipment_no" type="text" value="<?php echo $equipment_no; ?>" ></input></b>
																 </div>
															</div>
															<br>
															<div class="row">
																 <div class="col-md-4">
																		 <label>Date Received :</label>
																	</div>
																	<div class="col-md-8" align="left">
																		 <b><input class="form-control" name="date_received" type="date" value="<?php echo $date_received; ?>" ></input></b>
																 </div>
														 </div>
														 <br>
														 <div class="row">
																<div class="col-md-4">
																		<label>Date Release :</label>
																	</div>
																 <div class="col-md-8" align="left">
																		<b><input class="form-control" name="date_released" type="date" value="<?php echo $date_released; ?>" ></input></b>
																</div>
														 </div>

															 <div class="modal-footer">
																 <span class="pull-left"><button type="button" class="btn btn-bg-grey" data-dismiss="modal">Close</button></span>
																 <button type="submit" class="btn btn-primary" name="edit_repair">Save</button>
															 </div>
														 </form>
													 </div>
												 </div>
											 </div>
										 </div>
										<!-- 	END OF EDIT MODAL -->


										<!-- START OF DELETE MODAL -->
										<div class="modal fade" id="delete_repair<?php echo $repair_id; ?>" tabindex="-1" role="dialog">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title" id="defaultModalLabel"><center>DELETE MESSAGE</center></h4>
													</div>
													<div class="modal-body">

														<form method="post" class="form-horizontal" role="form">
															<input type="hidden" name="delete_id" value="<?php echo $repair_id; ?>">

																<p><strong>Are you sure you want to delete repair form #<b><?php echo $repair_id; ?></b>?</strong></p>


															<div class="modal-footer">
																<button type="button" class="btn btn-bg-grey waves-effect" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span>CLOSE</button>
																<button type="submit" class="btn btn-danger waves-effect" name="delete_repair"><span class="glyphicon glyphicon-trash"></span>DELETE</button>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
										<!-- END OF DELETE MODAL -->



									</tr>

									<!-- SQL INJECTION --><!-- SQL INJECTION --><!-- SQL INJECTION --><!-- SQL INJECTION -->

									<?php }

									//START EDIT MODAL REPAIR FORM SQL INJECTION-->

										if(isset($_POST['edit_repair'])){

										$update_id = $_POST['update_id'];
										$type_name = $_POST['type_name'];
										$equipment_no = $_POST['equipment_no'];
										$date_received = $_POST['date_received'];
										$date_released = $_POST['date_released'];

										$sql = "UPDATE repair SET
														type_name='$type_name',
														equipment_no='$equipment_no',
														date_received='$date_received',
														date_released='$date_released'
														WHERE repair_id='$update_id' ";

											if ($conn->query($sql) === TRUE) {
												echo '<script>window.location.href="repairlist.php"</script>';
											} else {
												echo "Error updating record: " . $conn->error;
											}
										}
										//END EDIT MODAL REPAIR SQL INJECTION -->

										//DELETE MODAL REPAIR FORM -->

										if(isset($_POST['delete_repair'])){
											// sql to delete a highlight
											$delete_id = $_POST['delete_id'];
											$sql = "DELETE FROM repair WHERE repair_id='$delete_id' ";
											if ($conn->query($sql) === TRUE) {
												echo '<script>window.location.href="repairlist.php"</script>';
												} else {
													echo "Error deleting record: " . $conn->error;
												}
											}

									?>


								</tbody>
						</table>
					</div>
				</div>
				</div>

				<br>
				<a class="btn btn-success" href="repairform.php">New Repair Form</a>

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
