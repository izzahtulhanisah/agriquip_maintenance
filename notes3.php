$details= "SELECT * FROM equipment WHERE equipment_no='$equipment_no'";

if($details===0){
$sql = "INSERT INTO equipment (type,equipment_no,manufacture_year,seriel_no,owner,remark)
    VALUES ('$type','$equipment_no','$manufacture_year','$seriel_no','$owner','$remark')";
$result = mysqli_query($conn,$sql);
}
else{
  echo "<p style='color:red;'>RECORD ALREADY EXISTS</p>";
}
