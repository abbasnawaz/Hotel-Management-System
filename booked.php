<!DOCTYPE html>
<html>
<head>
	<title>Booked Rooms</title>
	<link rel="icon" href="hotel-icon.jpg" type="image/jpeg">
</head>
<body background="hotel.jpg" style="background-repeat: no-repeat;background-size:cover">

	<?php 

include 'connection.php';
$sql = "SELECT room.R_id,room.R_number,room.floor,room.R_status,room_type.room_type FROM room JOIN room_type ON(room.roomtype_id=room_type.roomtype_id) WHERE room.R_status NOT LIKE '%unbooked%' ORDER BY room.floor;";
$result = $conn->query($sql);

if($result->num_rows > 0){

	echo  " <div class=\"table\"> <font color=\"black\" size=\"5\" >  </style> <table border=3 > 
	<tr>
	<th> Room ID </th>
	<th> Room Number </th>
	<th> Floor </th>
	<th> Room Status </th>
	<th> Room Type</th>
	</tr> " ;
	while($row = $result->fetch_assoc()){

		echo  "<tr>
		<td>".$row['R_id']."</td>
		<td>".$row['R_number']."</td>
		<td>".$row['floor']."</td>
		<td>".$row['R_status']."</td>
		<td>".$row['room_type']."</td>
		
		
		</tr> </font> </div>";

	}
	echo "</table>";

}else{

	echo "No Record Found";
}
$conn->close();
 ?>


 
</body>
</html>