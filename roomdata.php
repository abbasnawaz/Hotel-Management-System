
<?php 
include 'connection.php';
$sql = "SELECT price,room_type from room_type";
$result = $conn->query($sql);

if($result->num_rows > 0){

	echo " <p> <font color="red"><table border=1>
	<tr>
	<th> Price </th>
	<th> Room Type </th>
	
	</tr> </font> </p> ";
	while($row = $result->fetch_assoc()){

		echo "<tr>
		<td>".$row['price']."</td>
		<td>".$row['room_type']."</td>
		
		</tr>";

	}
	echo "</table>";

}else{

	echo "No Record Found";
}

$conn->close();
 ?>