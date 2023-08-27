<!DOCTYPE html>
<html>
<head>
	<title>All Rooms Status</title>
	<link rel="icon" href="hotel-icon.jpg" type="image/jpeg">
</head>
<body background="hotel.jpg" style="background-repeat: no-repeat;background-size:cover">
	<?php 

include 'connection.php';
$sql = "SELECT * FROM booking";
$result = $conn->query($sql);

if($result->num_rows > 0){

	echo  " <div class=\"table\"> <font color=\"black\" size=\"5\" >  </style> <table border=3 > 
	<tr>
	<th> Booking ID </th>
	<th> Entry Date </th>
	<th> Exit Date </th>
	<th> Booking Status </th>
	<th> Customer ID </th>
    <th> Manager ID </th>
	</tr> " ;
	while($row = $result->fetch_assoc()){

		echo  "<tr>
		<td>".$row['booking_id']."</td>
		<td>".$row['entry_date']."</td>
		<td>".$row['exit_date']."</td>
		<td>".$row['B_status']."</td>
		<td>".$row['C_id']."</td>
        <td>".$row['M_id']."</td>
		
		
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