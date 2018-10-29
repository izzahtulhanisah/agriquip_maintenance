<?php
session_start();
// from form
$supervisor_id=$_POST['supervisor_id'];
$supervisor_password=$_POST['supervisor_password'];

// Create connection
include "database.php";

$sql="SELECT * FROM supervisor WHERE supervisor_id='$supervisor_id' and supervisor_password='$supervisor_password'";
$result = mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);

// If result matched $supervisor_id and $supervisor_password, table row must be 1 row
if($count==1){

    // SAVE SESSION VARIABLES AND REDIRECT TO "page"
    $_SESSION['supervisor_id'] = $supervisor_id;
    $_SESSION['supervisor_password'] = $supervisor_password;
    header("location: dashboard.php");
    exit;
}
else {
    echo "<script>alert('Wrong username or password');
	window.location = '../../index.php';</script>";
}
?>
