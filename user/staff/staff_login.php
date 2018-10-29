<?php
session_start();
// from form
$staff_id=$_POST['staff_id'];
$staff_password=$_POST['staff_password'];

// Create connection
include "database.php";

$sql="SELECT * FROM staff WHERE staff_id='$staff_id' and staff_password='$staff_password'";
$result = mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);

// If result matched $staff_id and $staff_password, table row must be 1 row
if($count==1){

    // SAVE SESSION VARIABLES AND REDIRECT TO "page"
    $_SESSION['staff_id'] = $staff_id;
    $_SESSION['staff_password'] = $staff_password;
    header("location: dashboard.php");
    exit;
}
else {
    echo "<script>alert('Wrong username or password');
	window.location = '../../index.php';</script>";
}
?>
