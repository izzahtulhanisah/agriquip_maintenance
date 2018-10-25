<?php $sql = "INSERT INTO equipment (type_id,type_name,equipment_no,manufacture_year,seriel_no,owner,remark)
    VALUES ('$type_id','$type_name','$equipment_no','$manufacture_year','$seriel_no','$owner','$remark')";
$result = mysqli_query($conn,$sql);

if($result === TRUE){
  echo "<script type = \"text/javascript\">
    alert(\"Successfully Added New Equipment\");
    window.location = (\"equipmentlist.php\")
    </script>";
  }

else {
  echo "<script type = \"text/javascript\">
    alert(\"Failed to Add New Equipment\");
    window.location = (\"equipmentform.php\")
    </script>";
  } ?>


<!--Start Check Data  -->

<?php
$details= "SELECT * FROM equipment WHERE equipment_no='$equipment_no'";

if($details === 0){
$sql = "INSERT INTO equipment (type,equipment_no,manufacture_year,seriel_no,owner,remark)
    VALUES ('$type','$equipment_no','$manufacture_year','$seriel_no','$owner','$remark')";
$result = mysqli_query($conn,$sql);
}
else{
  echo "<center><h2 style='color:red;'>RECORD ALREADY EXISTS</h2></center>";
} ?>

<!-- CHECK DATA EXIST --><!-- CHECK DATA EXIST -->
<!-- CHECK DATA EXIST --><!-- CHECK DATA EXIST -->
<?php $check = mysqli_query($conn, "SELECT * FROM equipment WHERE equipment_no='".$equipment_no."'");

    if (!$check)
    {
        die('Error: ' . mysqli_error($con));
    }

if(mysqli_num_rows($check) > 0){

    echo "Data already exists";

}else{

  $sql = "INSERT INTO equipment (type_id,type_name,equipment_no,manufacture_year,seriel_no,owner,remark)
      VALUES ('$type_id','$type_name','$equipment_no','$manufacture_year','$seriel_no','$owner','$remark')";
  $result = mysqli_query($conn,$sql);

        if($result === TRUE){
          echo "<script type = \"text/javascript\">
            alert(\"Successfully Added New Equipment\");
            window.location = (\"equipmentlist.php\")
            </script>";
          }

        else {
          echo "<script type = \"text/javascript\">
            alert(\"Failed to Add New Equipment\");
            window.location = (\"equipmentform.php\")
            </script>";
          }

}
?>

<!-- END CHECK DATA EXIST --><!-- END CHECK DATA EXIST -->
<!-- END CHECK DATA EXIST --><!-- END CHECK DATA EXIST -->

<a href="#defaultModal<?php echo $id_highlight;?>" data-toggle="modal">
  <button type='button' class='btn btn-warning btn-sm'>
  <span class='glyphicon glyphicon-edit' aria-hidden='true'>
  </span></button></a>

  <!-- MODAL INFO EQUIPMENT-->
   <div class="modal fade" id="equipmentInfo<?php echo $equipment_no; ?>" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h4 class="modal-title" id="equipmentInfoLabel"><center>Equipment Info</center></h4>
         </div>
         <div class="modal-body">

           <form method="post" class="form-horizontal" role="form">

           </form>
         </div>
       </div>
     </div>
   </div>

   <!-- NAME PROJECT LINKS -->
   <?php
   include 'database.php';

   $sql = "SELECT * FROM project ORDER BY project_due_date ASC ";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
   // output data of each row
   $x=1;
   while($row = $result->fetch_assoc()) {
   $project_id = $row['project_id'];
   $project_name = $row['project_name'];
   $project_description = $row['project_description'];
   $project_date_created = $row['project_date_created'];
   $project_due_date = $row['project_due_date'];
   $project_status = $row['project_status'];

   if($project_status == 'Delayed'){
   $alert = "<div class='badge bg-red'>
   <strong>$project_status</strong>
   </div>";

   }else if($project_status == 'In Progress'){
   $alert = "<div class='badge bg-blue'>
   <strong>$project_status</strong>
   </div>";

   }else {
   $alert = $alert = "<div class='badge bg-green'>
   <strong>$project_status</strong>
   </div>";
   }

   echo "<tr>
   <td>$x</td>
   <td><a href = 'project_details.php?project_id=$project_id&project_name=$project_name'>$project_name</a></td>
   ";
   ?>

   <td><?php echo $project_description; ?></td>
   <td><?php echo $project_date_created; ?></td>
   <td><?php echo $project_due_date; ?></td>
   <td><?php echo $alert;

   if ($project_status == "Completed"){
   }
   else{

   $sql2 = "UPDATE project
   SET project_status =
   CASE
   WHEN NOW() > project_due_date THEN 'Delayed'
   WHEN NOW() < project_due_date THEN 'In Progress'
   END
   WHERE project_id = $project_id
   ";

   $result2 = $conn -> query($sql2);
   }
   ?>
   </td>





<!-- TYPE MODAL NEW TYPE -->
<div class="bs-example2 bs-example-padded-bottom">
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newTypeModal">
   New Equipment Type
  </button>

  <div class="modal fade" id="newTypeModal" tabindex="-1" role="dialog" aria-labelledby="newTypeModalLabel" aria-hidden="true" style="display: none;">
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
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>
  </div>

</div>
</div>
