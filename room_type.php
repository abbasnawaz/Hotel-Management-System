<!DOCTYPE html>
<html>
<head>
	<title>Room Types</title>
	<link rel="icon" href="hotel-icon.jpg" type="image/jpeg">
</head>
<body background="hotel.jpg" style="background-repeat: no-repeat;background-size:cover">
<marquee direction="right">
      	<h1>Hotel Management system</h1>
        </marquee>
	<?php 

include 'connection.php';
$sql = "SELECT * FROM room_type ";
$result = $conn->query($sql);

if($result->num_rows > 0){

	echo  " <div class=\"table\"> <font color=\"black\" size=\"5\" >  </style> <table border=3 > 
	<tr>
	<th> Room Type ID </th>
	<th> Price </th>
	<th> Description </th>
	<th> Room Type </th>
	</tr> " ;
	while($row = $result->fetch_assoc()){

		echo  "<tr>
		<td>".$row['roomtype_id']."</td>
		<td>".$row['price']."</td>
		<td>".$row['description']."</td>
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