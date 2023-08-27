<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Total Customer</title>
    <link rel="icon" href="hotel-icon.jpg" type="image/jpeg">
</head>
<body background="hotel.jpg" style="background-repeat: no-repeat;background-size:cover">
<?php 

include 'connection.php';
$sql = "SELECT * from customer";
$result = $conn->query($sql);

if($result->num_rows > 0){

	echo  " <div class=\"table\"> <font color=\"black\" size=\"5\" >  </style> <table border=3 > 
	<tr>
	<th> Customer ID </th>
	<th> Customer First Name </th>
	<th> Customer Last Name </th>
	<th> Customer Address </th>
	<th> Customer CNIC </th>
	
	</tr> " ;
	while($row = $result->fetch_assoc()){

		echo  "<tr>
		<td>".$row['C_id']."</td>
		<td>".$row['C_First_Name']."</td>
		<td>".$row['C_Last_Name']."</td>
		<td>".$row['address']."</td>
		<td>".$row['CNIC']."</td>
		
		
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