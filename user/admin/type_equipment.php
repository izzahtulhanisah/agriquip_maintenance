                          
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
        <i class="fa fa-angle-right"></i>
				<span>Equipment</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
			<div class="blank-page">

				<div class="header">
						<center><h4 class="title">LIST OF EQUIPMENTS</h4></center>
				</div>
				<hr>

        <div class="body">
				<!-- <div class="dataTable_wrapper"> -->
					<div class="table-responsive">

        <table class="table table-striped table-bordered table-hover table-sm" id="dataTables-example">
          <a class="btn btn-success pull-right" href="equipmentform.php">New Equipment</a>

          <thead>
            <tr>
              <th>No.</th>
							<th>Type</th>
              <th>Equipment No</th>
							<th>Repair Form</th>
							<th>Remark</th>
							<th>Action</th>
						</tr>
          </thead>

					<tfoot>
						<tr>
              <th>No.</th>
							<th>Type</th>
              <th>Equipment No</th>
							<th>Repair Form</th>
							<th>Remark</th>
							<th>Action</th>
						</tr>
          </tfoot>

					<tbody>

						<?php
							$count = 0;
              $type_name = $_GET['type_name'];
							$sql = "SELECT equipment.id, equipment.equipment_no, equipment.type_name, equipment.manufacture_year, equipment.seriel_no, equipment.remark, equipment_type.company_name
                      FROM equipment LEFT JOIN equipment_type ON equipment.type_name=equipment_type.type_name
                      WHERE equipment.type_name='$type_name' ORDER BY equipment_no ASC";
							$result = $conn->query($sql);

							while($row = $result->fetch_assoc()){

								$equipment_id = $row["id"];
                $type_name = $row["type_name"];
                $equipment_no = $row["equipment_no"];
								$manufacture_year = $row["manufacture_year"];
								$seriel_no = $row["seriel_no"];
								$remark = $row["remark"];
                $company_name = $row["company_name"];
								$count++;

						?>

            <?php

            $sqlrepair="SELECT repair_id FROM repair WHERE equipment_no='$equipment_no'";
            $resultrepair = $conn->query($sqlrepair);
            if ($resultrepair=mysqli_query($conn,$sqlrepair))
              {
              // Return the number of rows in result set
              $rowcountrepair=mysqli_num_rows($resultrepair);
            ?>

						<tr>
							<td><?php echo $count; ?></td>
							<td><?php echo $type_name; ?></td>
							<td><?php echo $equipment_no; ?></td>
							<td align="center"><?php echo "<a href = 'equipment_repairlist.php?equipment_no=$equipment_no'>$rowcountrepair</a>"; ?></td>
                <?php
                  // Free result set
                  mysqli_free_result($resultrepair);
                  }
                ?>
							<td><?php echo $remark; ?></td>

							<td>
								<div>
									<a href="#equipmentInfo<?php echo $equipment_no;?>" data-toggle="modal"><button type="button" class="btn btn-sm btn-primary">Details</button></a>
									<a href="#editEquipment<?php echo $equipment_id;?>" data-toggle="modal"><button type='button' class='btn btn-sm btn-warning'>Edit</button></a>
                  <a href="#deleteEquipment<?php echo $equipment_no;?>" data-toggle="modal"><button type='button' class='btn btn-sm btn-danger'>Remove</button></a>
                </div>
							</td>

        <!-- START OF MODAL EQUIPMENT INFO -->

				<div class="modal fade" id="equipmentInfo<?php echo $equipment_no; ?>" tabindex="-1" role="dialog">
		      <div class="modal-dialog" role="document">
		        <div class="modal-content">
		          <div class="modal-header" style="background-color: lightgreen">
		            <h4 class="modal-title" id="equipmentInfoLabel"><center>Equipment Info</center></h4>
		          </div>
		          <div class="modal-body">


                <div class="row">
                    <div class="col-md-6" align="right">
                        <h5>Company :
                    </div>
                    <div class="col-md-6" align="left">
                        <b><?php echo $company_name; ?></b></h5>
                    </div>
                </div>
                <br>
                <div class="row">
											<div class="col-md-6" align="right">
													<h5>Equipment Type :
                      </div>
                      <div class="col-md-6" align="left">
													<b><?php echo $type_name; ?></b></h5>
											</div>
									</div>
                  <br>
									<div class="row" align="center">
											<div class="col-md-6" align="right">
													<h5>Equipment No :
                      </div>
                      <div class="col-md-6" align="left">
													<b><?php echo $equipment_no; ?></b></h5>
											</div>
									</div>
                  <br>
									<div class="row">
											<div class="col-md-6" align="right">
													<h5>Manufacture Year :</h5>
                      </div>
                      <div class="col-md-6" align="left">
													<b><?php echo $manufacture_year; ?></b>
											</div>
									</div>
                  <br>
                  <div class="row">
											<div class="col-md-6" align="right">
													<h5>Serial Number :</h5>
											</div>
                      <div class="col-md-6" align="left">
													<b><?php echo $seriel_no; ?></b>
											</div>
									</div>
                  <br>
                  <div class="row">
                      <div class="col-md-6" align="right">
													<h5>Remark :</h5>
                      </div>
                      <div class="col-md-6" align="left">
													<b><?php echo $remark; ?></b>
											</div>
									</div>
                  <br>
                  <div class="row">
                      <div class="col-md-6" align="right">
													<h5>Total of Repair Forms :</h5>
                      </div>
                      <div class="col-md-6" align="left">
													<b><?php echo $rowcountrepair; ?></b>
											</div>
									</div>

                  <hr>

									<div class="text-left">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
									<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>

        <!-- END OF EQUIPMENT INFO -->

        <!-- START OF EDIT EQUIPMENT MODAL --><!-- START OF EDIT EQUIPMENT MODAL -->
         <div class="modal fade" id="editEquipment<?php echo $equipment_id; ?>" tabindex="-1" role="dialog">
           <div class="modal-dialog" role="document">
             <div class="modal-content">
               <div class="modal-header" style="background-color: lightgreen">
                 <h4 class="modal-title" id="editEquipmentLabel"><center>EDIT EQUIPMENT</center></h4>
               </div>
               <div class="modal-body">

                 <form method="post" class="form-horizontal" role="form">
                   <input type="hidden" name="edit_id" value="<?php echo $equipment_id; ?>">


                   <div class="row">
                      <div class="col-md-4">
                          <label>Company :</label>
                       </div>
                       <div class="col-md-8" align="left">
                         <select class="form-control select1" name= "company_name" id="company_name">
                             <b><option value="<?php echo $company_name; ?>" selected><?php echo $company_name; ?></option></b>
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
                  <br>
                  <div class="row">
                     <div class="col-md-4">
                         <label>Equipment Type :</label>
                       </div>
                      <div class="col-md-8" align="left">
                        <select class="form-control select2" name= "type_name" >
                          <option value="<?php echo $type_name; ?>" selected><?php echo $type_name; ?></option>

                          <?php
                          $selecttype = "SELECT * FROM equipment_type";
                          $resulttype = $conn->query($selecttype);
                          while($rowtype = $resulttype->fetch_assoc()){
                            $company_name = $rowtype["company_name"];
                            $type_name = $rowtype["type_name"];
                            // $type_id = $rowtype["type_id"];
                          echo "<option class='". $company_name ."'>". $type_name ."</option>";
                          }
                          ?>

                        </select>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-md-4">
                         <label>Equipment No :</label>
                      </div>
                      <div class="col-md-8" align="left">
                         <b><input class="form-control" name="equipment_no" type="text" value="<?php echo $equipment_no; ?>" ></input></b>
                     </div>
                 </div>
                 <br>
                 <div class="row">
                    <div class="col-md-4">
                        <label>Manufacture Year :</label>
                      </div>
                     <div class="col-md-8" align="left">
                        <b><input class="form-control" name="manufacture_year" type="number" min="1900" max="2099" step="1" value="<?php echo $manufacture_year; ?>" ></input></b>
                    </div>
                 </div>
                 <br>
                 <div class="row">
                    <div class="col-md-4">
                        <label>Serial Number:</label>
                      </div>
                     <div class="col-md-8" align="left">
                        <b><input class="form-control" name="seriel_no" type="text" value="<?php echo $seriel_no; ?>" ></input></b>
                    </div>
                 </div>
                 <br>
                 <div class="row">
                    <div class="col-md-4">
                        <label>Remark :</label>
                      </div>
                     <div class="col-md-8" align="left">
                        <b><input class="form-control" name="remark" type="text" value="<?php echo $remark; ?>" ></input></b>
                    </div>
                 </div>
                 <br>

                   <div class="modal-footer">
                     <span class="pull-left"><button type="button" class="btn btn-bg-grey" data-dismiss="modal">Close</button></span>
                     <button type="submit" class="btn btn-primary" name="edit_equipment">Save</button>
                   </div>
                 </form>
               </div>
             </div>
           </div>
         </div>
        <!-- END OF EQUIPMENT EDIT -->

        <!-- START OF DELETE MODAL -->
        <div class="modal fade" id="deleteEquipment<?php echo $equipment_no; ?>" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header" style="background-color: salmon">
                <h4 class="modal-title" id="deleteEquipmentLabel"><center>DELETE EQUIPMENT</center></h4>
              </div>
              <div class="modal-body">

                <form method="post" class="form-horizontal" role="form">
                  <input type="hidden" name="delete_id" value="<?php echo $equipment_no; ?>">

                    <center><h5>Are you sure you want to delete equipment : <b><?php echo $equipment_no; ?></b>?</h5></center>
                    <br>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-bg-grey waves-effect pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger waves-effect" name="delete_equipment"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- END OF DELETE MODAL -->

						</tr>
						<?php }
            //START EDIT MODAL REPAIR FORM SQL INJECTION-->

              if(isset($_POST['edit_equipment'])){

              $edit_id = $_POST['edit_id'];
              $type_name = $_POST['type_name'];
              $equipment_no = $_POST['equipment_no'];
              $manufacture_year = $_POST['manufacture_year'];
              $seriel_no = $_POST['seriel_no'];
              $remark = $_POST['remark'];

              $sql = "UPDATE equipment SET
                      type_name='$type_name',
                      equipment_no='$equipment_no',
                      manufacture_year='$manufacture_year',
                      seriel_no='$seriel_no',
                      remark='$remark'
                      WHERE id='$edit_id' ";

                if ($conn->query($sql) === TRUE) {
                  echo '<script>window.location.href="equipmentlist.php"</script>';
                } else {
                  echo "Error updating record: " . $conn->error;
                }
              }
              //END EDIT MODAL EQUIPMENT SQL INJECTION -->

              //START OF DELETE MODAL EQUIPMENT FORM -->
              if(isset($_POST['delete_equipment'])){
                // sql to delete a highlight
                $delete_id = $_POST['delete_id'];
                $sql = "DELETE FROM equipment WHERE equipment_no='$delete_id' ";
                if ($conn->query($sql) === TRUE) {
                  echo '<script>window.location.href="equipmentlist.php"</script>';

                  } else {
                    echo "Error deleting record: " . $conn->error;
                  }
                }
                // END OF DELETE EQUIPMENT SQL INJECTION --->
            ?>
					</tbody>
        </table>
			</div>
		</div>

		<br>
    <a href="javascript: window.history.go(-1)"><button type="button" class="btn btn-bg-grey">Back</button></a>
		<!-- <a class="btn btn-success" href="equipmentform.php">New Equipment</a> -->

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
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
