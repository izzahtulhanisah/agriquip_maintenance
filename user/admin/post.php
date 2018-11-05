<?php
date_default_timezone_set("Asia/Kuala_Lumpur");


include 'database.php';

$part_no = mysqli_real_escape_string($conn, $_POST["part_no"]);
$quantity = mysqli_real_escape_string($conn, $_POST["quantity"]);
$repair_id = mysqli_real_escape_string($conn, $_POST["repair_id"]);

$query = "INSERT INTO repair_part(part_no, quantity, repair_id)VALUES ('$part_no', '$quantity', '$repair_id')";
mysqli_query($conn, $query);

?>
