<?php

	include "database.php";

		// SUBMIT NEW EQUIPMENT TYPE --------->
		if(isset($_POST['submittype'])){
		$type_name = $_POST['type_name'];
		$description = $_POST['description'];

		$sql = "INSERT INTO equipment_type (type_name,description)
						VALUES ('$type_name','$description')";
		$result = $conn->query($sql);

		if($result === TRUE){
			echo "<script type = \"text/javascript\">
				alert(\"Successfully Added an Equipment Type\");
				window.type = (\"type.php\")
				</script>";
			}

		else {
			echo "<script type = \"text/javascript\">
				alert(\"Failed to Add Type\");
				window.type = (\"type.php\")
				</script>";
			}
	}
	// END SUBMIT NEW EQUIPMENT TYPE --------->
 ?>




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

<!-- DataTables JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>


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

		<?php include "database.php"; ?>

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
				<a href="companylist.php">Company</a>
				<i class="fa fa-angle-right"></i>
				<span>Equipment Type</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
			<div class="blank-page">

				<?php
					$company_name = $_GET['company_name'];
					?>
				<div class="header" align="center">
						<h4 class="title">LIST OF EQUIPMENT TYPES : <b><?php echo $company_name; ?></b></h4>

				</div>
				<br>
				<hr>

				<div class="body">
					<div class="dataTable_wrapper">
						<div class="table-responsive">
						<table class="table table-bordered table-striped table-hover" id="dataTables-example">
							<a class="btn btn-success pull-right" href="typeform.php">New Equipment Type</a>
								<thead>
										<tr>
												<th>No.</th>
												<th>Type Name</th>
												<th>Description</th>
												<th>Total Equipment</th>
												<th>Total Repair</th>
												<th>Action</th>
										</tr>
								</thead>
								<tfoot>
										<tr>
												<th>No.</th>
												<th>Type Name</th>
												<th>Description</th>
												<th>Total Equipment</th>
												<th>Total Repair</th>
												<th>Action</th>
										</tr>
								</tfoot>
								<tbody>

									<?php
										$count = 0;
										$company_name = $_GET['company_name'];
										$sql = "SELECT * FROM equipment_type WHERE company_name='$company_name'";
										$result = $conn->query($sql);

										while($row = $result->fetch_assoc()){
											$type_name = $row["type_name"];
											$type_id = $row["type_id"];
											$description = $row["description"];
											$company_id = $row["company_id"];
											$company_name = $row["company_name"];


											$count++;

									?>

									<?php

			            $sqlequipment="SELECT id FROM equipment WHERE type_name='$type_name'";
			            $resultequipment = $conn->query($sqlequipment);
			            if ($resultequipment=mysqli_query($conn,$sqlequipment))
			              {
			              // Return the number of rows in result set
			              $rowcountequipment=mysqli_num_rows($resultequipment);
									}
			            ?>

									<?php

									$sqlrepair="SELECT repair_id FROM repair INNER JOIN equipment ON repair.type_name=equipment.type_name WHERE equipment.type_id='$type_id'";
			            $resultrepair = $conn->query($sqlrepair);
			            if ($resultrepair=mysqli_query($conn,$sqlrepair))
			              {
			              // Return the number of rows in result set
			              $rowcountrepair=mysqli_num_rows($resultrepair);
									}
			            ?>

									<tr>
										<td><?php echo $count; ?></td>
										<td><?php echo $type_name; ?></td>
										<td><?php echo $description; ?></td>
										<td align="center"><?php echo "<a href = 'type_equipment.php?type_name=$type_name'>$rowcountequipment</a>"; ?></td>
										<td align="center"><?php echo $rowcountrepair; ?></td>

										<td>
											<div>
												<button type="button" class="btn btn-sm btn-primary">Details</button>
												<button type="button" class="btn btn-sm btn-warning">Edit</button>
												<button type="button" class="btn btn-sm btn-danger">Remove</button>
											</div>
										</td>
									</tr>
									<?php } ?>
								</tbody>
						</table>
					</div>
				</div>


				<br>

		      <a href="javascript: window.history.go(-1)"><button type="button" class="btn btn-bg-grey">Back</button></a>


		      <!-- <div class="modal fade" id="newTypeModal" tabindex="-1" role="dialog" aria-labelledby="newTypeModalLabel" aria-hidden="true" style="display: none;">
		 					<div class="modal-dialog">
		 						<div class="modal-content">
		 							<div class="modal-header" style="background-color: lightgreen">
		 								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		 								<center><h4 class="modal-title">Add New Equipment Type</h4></center>
		 							</div>
		 							<div class="modal-body">

										<div class="content">
												<form action="" method="post">
														<div class="row">
																<div class="col-md-12">
																		<div class="form-group">
																				<label>Type Name</label>
																				<input type="text" name="type_name" class="form-control border-input" placeholder="eg: MHBT - Baggage Trolley">
																		</div>
																</div>
														</div>

														<div class="row">
																<div class="col-md-12">
																		<div class="form-group">
																				<label>Description</label>
																				<textarea rows="5" name="description" class="form-control border-input"
																				placeholder="Massive trolley"></textarea>
																		</div>
																</div>
														</div>
														<div class="clearfix"></div>


		 							<div class="modal-footer">
		 								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		 								<input type="submit" class="btn btn-primary" name="submittype" value="Save Changes"/>
		 							</div>
								 </form>
		 						</div>
		 					</div>
		 				</div>
		      </div>

	    </div> -->

	</div>

	<!--//faq-->
		<!---->
		<div class="copy">
            <p> &copy; 2018 AgriQuip Machinery Sdn Bhd | Template by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
					</div>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>

<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->

	<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true,
				dom: 'Bfrtip',
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
				]
        });
    });
    </script>
</body>
</html>
