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
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Company List</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
			<div class="blank-page">

				<div class="header">
						<center><h4 class="title">LIST OF COMPANIES</h4></center>
				</div>
				<hr>

        <div class="body">
				<!-- <div class="dataTable_wrapper"> -->
					<div class="table-responsive">

        <table class="table table-striped table-bordered table-hover table-sm" id="dataTables-example">
          <a class="btn btn-success pull-right" href="companyform.php">New Company</a>
          <thead>
            <tr>
              <th>No.</th>
							<th>Company</th>
              <th>Code</th>
							<th><center>Equipment Type</center></th>
              <th><center>Total Equipments</center></th>
							<th>Action</th>
						</tr>
          </thead>

					<tfoot>
						<tr>
              <th>No.</th>
							<th>Company</th>
              <th>Code</th>
							<th><center>Equipment Type</center></th>
              <th><center>Total Equipments</center></th>
							<th>Action</th>
						</tr>
          </tfoot>

					<tbody>

						<?php
							$count = 0;
							$sql = "SELECT * FROM company";
							$result = $conn->query($sql);

							while($row = $result->fetch_assoc()){
                $company_id = $row["company_id"];
								$company_name = $row["company_name"];
								$company_code = $row["company_code"];
								$description = $row["description"];
								$count++;

						?>

            <?php
							$sqlequipmenttype = "SELECT * FROM equipment_type";
							$resultequipmenttype = $conn->query($sqlequipmenttype);

							while($rowequipmenttype = $resultequipmenttype->fetch_assoc()){

								$type_name = $rowequipmenttype["type_name"];

}

						?>

            <!-- COUNT EQUIPMENT TYPE BY COMPANY -->
            <?php

            $sqltype="SELECT type_id FROM equipment_type WHERE company_name='$company_name'";
            $resulttype = $conn->query($sqltype);
            if ($resulttype=mysqli_query($conn,$sqltype))
              {
              // Return the number of rows in result set
              $rowcounttype=mysqli_num_rows($resulttype);
            ?>

            <!-- COUNT EQUIPMENT NUMBER BY COMPANY -->
            <?php

            $sqlequipment="SELECT id FROM equipment INNER JOIN equipment_type ON equipment.type_name=equipment_type.type_name WHERE equipment_type.company_name='$company_name'";
            $resultequipment = $conn->query($sqlequipment);
            if ($resultequipment=mysqli_query($conn,$sqlequipment))
              {
              // Return the number of rows in result set
              $rowcountequipment=mysqli_num_rows($resultequipment);
              }
            ?>


						<tr>
							<td><?php echo $count; ?></td>
							<td><?php echo $company_name; ?></td>
							<td><?php echo $company_code; ?></td>
							<td align="center"><?php echo "<a href = 'company_type.php?company_name=$company_name'>$rowcounttype</a>"; ?></td>
              <?php
                // Free result set
                mysqli_free_result($resultequipment);
                }
              ?>
              <td align="center"><?php echo "<a href = 'company_equipment.php?company_name=$company_name'>$rowcountequipment</a>"; ?></td>



							<td>
								<div>
									<a href="#companyInfo<?php echo $company_id;?>" data-toggle="modal"><button type="button" class="btn btn-sm btn-primary">Info</button></a>
									<a href="#companyEdit<?php echo $company_id;?>" data-toggle="modal"><button type="button" class="btn btn-sm btn-warning">Edit</button></a>
                  <a href="#companyDelete<?php echo $company_id;?>" data-toggle="modal"><button type='button' class='btn btn-sm btn-danger'>Remove</button></a>
								</div>
							</td>

				<!-- START OF INFO EQUIPMENT MODAL -->
        <div class="modal fade" id="companyInfo<?php echo $company_id; ?>" tabindex="-1" role="dialog">
		      <div class="modal-dialog" role="document">
		        <div class="modal-content">
		          <div class="modal-header" style="background-color: lightgreen">
		            <h4 class="modal-title" id="companyInfoLabel"><center>Company Info</center></h4>
		          </div>
		          <div class="modal-body">


									<div class="row">
											<div class="col-md-6" align="right">
													<h5>Company Name :
                      </div>
                      <div class="col-md-6" align="left">
													<b><?php echo $company_name; ?></b></h5>
											</div>
									</div>

									<div class="row" align="center">
											<div class="col-md-6" align="right">
													<h5>Company Code :
                      </div>
                      <div class="col-md-6" align="left">
													<b><?php echo $company_code; ?></b></h5>
											</div>
									</div>


									<div class="row">
											<div class="col-md-6" align="right">
													<h5>Description :</h5>
                      </div>
                      <div class="col-md-6" align="left">
													<b><?php echo $description; ?></b>
											</div>
									</div>

                  <div class="row">
											<div class="col-md-6" align="right">
													<h5>Equipment Type :</h5>
                      </div>
                      <div class="col-md-6" align="left">
													<b><?php echo $rowcounttype; ?></b>
											</div>
									</div>

                  <div class="row">
											<div class="col-md-6" align="right">
													<h5>Total Equipment :</h5>
                      </div>
                      <div class="col-md-6" align="left">
													<b><?php echo $rowcountequipment; ?></b>
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
        <!-- END OF INFO EQUIPMENT MODAL -->

        <!-- START OF EDIT EQUIPMENT MODAL --><!-- START OF EDIT EQUIPMENT MODAL -->
         <div class="modal fade" id="companyEdit<?php echo $company_id; ?>" tabindex="-1" role="dialog">
           <div class="modal-dialog" role="document">
             <div class="modal-content">
               <div class="modal-header" style="background-color: lightgreen">
                 <h4 class="modal-title" id="companyEditLabel"><center>EDIT EQUIPMENT</center></h4>
               </div>
               <div class="modal-body">

                 <form method="post" class="form-horizontal" role="form">
                   <input type="hidden" name="edit_id" value="<?php echo $company_id; ?>">


                   <div class="row">
                      <div class="col-md-4">
                          <label>Company Name:</label>
                       </div>
                       <div class="col-md-8" align="left">
                         <b><input class="form-control" name="company_name" type="text" value="<?php echo $company_name; ?>" ></input></b>
                      </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-md-4">
                         <label>Company Code :</label>
                       </div>
                      <div class="col-md-8" align="left">
                        <b><input class="form-control" name="company_code" type="text" value="<?php echo $company_code; ?>" ></input></b>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-md-4">
                         <label>Description :</label>
                      </div>
                      <div class="col-md-8" align="left">
                         <b><textarea rows="5" name="description" class="form-control border-input"><?php echo $description; ?></textarea></b>
                    </div>
                 </div>
                 <br>

                   <div class="modal-footer">
                     <span class="pull-left"><button type="button" class="btn btn-bg-grey" data-dismiss="modal">Close</button></span>
                     <button type="submit" class="btn btn-primary" name="edit_company">Save</button>
                   </div>
                 </form>
               </div>
             </div>
           </div>
         </div>
        <!-- 	END OF EDIT MODAL -->

        <!-- START OF DELETE MODAL -->
        <div class="modal fade" id="companyDelete<?php echo $company_id; ?>" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header" style="background-color: salmon">
                <h4 class="modal-title" id="companyDeleteLabel"><center>DELETE COMPANY</center></h4>
              </div>
              <div class="modal-body">

                <form method="post" class="form-horizontal" role="form">
                  <input type="hidden" name="delete_id" value="<?php echo $company_id; ?>">

                    <center><h5>Are you sure you want to delete company : <b><?php echo $company_name; ?></b>?</h5></center>
                    <br>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-bg-grey waves-effect pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span>Close</button>
                    <button type="submit" class="btn btn-danger waves-effect" name="delete_company"><span class="glyphicon glyphicon-trash"></span> Delete</button>
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

              if(isset($_POST['edit_company'])){

              $edit_id = $_POST['edit_id'];
              $company_name = $_POST['company_name'];
              $company_code = $_POST['company_code'];
              $description = $_POST['description'];

              $sql = "UPDATE company SET
                      company_name='$company_name',
                      company_code='$company_code',
                      description='$description'
                      WHERE company_id='$edit_id' ";

                if ($conn->query($sql) === TRUE) {
                  echo '<script>window.location.href="companylist.php"</script>';
                } else {
                  echo "Error updating record: " . $conn->error;
                }
              }
              //END EDIT MODAL REPAIR SQL INJECTION -->

              //START OF DELETE MODAL REPAIR FORM -->

              if(isset($_POST['delete_company'])){
                // sql to delete a highlight
                $delete_id = $_POST['delete_id'];
                $sql = "DELETE FROM company WHERE company_id='$delete_id' ";
                if ($conn->query($sql) === TRUE) {
                  echo '<script>window.location.href="companylist.php"</script>';
                  } else {
                    echo "Error deleting record: " . $conn->error;
                  }
                }

                // END OF DELETE COMPANY SQL INJECTION --->
            ?>
					</tbody>
        </table>
			</div>
		</div>

		<br>
		<a href="javascript: window.history.go(-1)"><button type="button" class="btn btn-bg-grey">Back</button></a>


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
