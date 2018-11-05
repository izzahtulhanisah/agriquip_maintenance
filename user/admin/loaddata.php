<?php
include 'database.php';



	$idd = $_REQUEST["repair_id"];
$sql = "Select * from repair_part WHERE repair_id='$idd'";
$result = $result=mysqli_query($conn,$sql);
while($row =  $result->fetch_assoc())
{
echo("<table>
<thead>
	<th>ID</th>
	<th>Name</th>
	<th>QTY</th>
</thead>
<tbody>
	<td>".$row['repairpart_id']."</td>
	<td>".$row['part_no']."</td>
	<td>".$row['quantity']."</td>
</tbody>
</table>");
}

?>
