<!DOCTYPE html>
<html>
<head>
	<title>Credid Card Payments</title>
	<link rel="icon" href="hotel-icon.jpg" type="image/jpeg">
</head>
<body background="hotel.jpg" style="background-repeat: no-repeat;background-size:cover">

	<?php 

include 'connection.php';
$sql = "SELECT * FROM payment where P_type LIKE '%Credit Card%' ";
$result = $conn->query($sql);

if($result->num_rows > 0){

	echo  " <div class=\"table\"> <font color=\"black\" size=\"5\" >  </style> <table border=3 > 
	<tr>
	<th> Paymnet Id </th>
	<th> Booking Id </th>
	<th> Payment Type </th>
	<th> Payment Amount </th>
	</tr> " ;
	while($row = $result->fetch_assoc()){

		echo  "<tr>
		<td>".$row['P_id']."</td>
		<td>".$row['booking_id']."</td>
		<td>".$row['P_type']."</td>
		<td>".$row['P_amount']."</td>
		
		
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