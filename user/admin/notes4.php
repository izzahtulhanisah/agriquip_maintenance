
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
				<span>Part</span>
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
				$description = $_POST['description'];

				$details= "SELECT * FROM equipment_type WHERE ='$type_name'";

				$sql = "INSERT INTO equipment_type (type_name,description)
				    VALUES ('$type_name','$description')";
				$result = mysqli_query($conn,$sql);


				if($result === TRUE){
					echo "<script type = \"text/javascript\">
						alert(\"Successfully Added New Type\");
						window.location = (\"type.php\")
						</script>";
					}

				else {
					echo "<script type = \"text/javascript\">
						alert(\"Failed to Add New Type\");
						window.location = (\"typeform.php\")
						</script>";
					}
				}
				?>

			<div class="blank-page">

        <select id="data">
          <option value="#">Select a country ..</option>
          <option value="us">United States</option>
          <option value="es">Spain</option>
         <!-- more countries -->
        </select>


        <div id="container">
          <table border="1">
               <tr>
                  <td> Country </td>
                  <td> Chance</td>
               </tr>
               <tr class="hideShowTr" id="us"  style="display: none;">
                  <td> United States </td>
                  <td> 2.02 % </td>
               </tr>
               <tr class="hideShowTr" id="es" style="display: none;">
                  <td> Spain </td>
                  <td> 2.12 % </td>
               </tr>
          </table>
        </div>

				<div class="header">
						<h4 class="title"><center>PART REGISTRATION FORM</center></h4>
				</div>
				<hr>
				<div class="content">
						<form action="" method="post">
								<div class="row">
										<div class="col-md-12">
												<div class="form-group">
													<label>Type Name</label>
													<input type="text" class="form-control border-input" name="type_name" placeholder="Eg: MHBT - Baggage Trolley">
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
  <script>
    $('#data').change(function() {
    $('.hideShowTr').css('display','none');
    $('tr#' + $(this).val()).css('display','block');
    });
  </script>
	<!--//scrolling js-->
</body>
</html>





<!-- PART MODAL INFO -->
<div class="modal fade" id="equipmentInfo<?php echo $part_no; ?>" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: lightgreen">
        <h4 class="modal-title" id="equipmentInfoLabel"><center>Equipment Info</center></h4>
      </div>
      <div class="modal-body">

          <div class="row">
              <div class="col-md-6" align="right">
                  <h5>Equipment Type :
              </div>
              <div class="col-md-6" align="left">
                  <b><?php echo $type_name; ?></b></h5>
              </div>
          </div>

          <div class="row" align="center">
              <div class="col-md-6" align="right">
                  <h5>Part Number :
              </div>
              <div class="col-md-6" align="left">
                  <b><?php echo $part_no; ?></b></h5>
              </div>
          </div>

          <div class="row">
              <div class="col-md-6" align="right">
                  <h5>Part Name :</h5>
              </div>
              <div class="col-md-6" align="left">
                  <b><?php echo $part_name; ?></b>
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
