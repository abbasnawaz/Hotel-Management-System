<!DOCTYPE html>
<html>
<head>
	<title>Sales Marketing</title>
	<link rel="icon" href="hotel-icon.jpg" type="image/jpeg">
</head>
<body background="hotel.jpg" style="background-repeat: no-repeat;background-size:cover">

	<?php 

include 'connection.php';
$sql = "SELECT * FROM employee where job_type Like '%Sale Marketing%' ";
$result = $conn->query($sql);

if($result->num_rows > 0){

	echo  " <div class=\"table\"> <font color=\"black\" size=\"5\" >  </style> <table border=3 > 
	<tr>
	<th> E_id </th>
	<th> E_name </th>
	<th> E_phone_no </th>
	<th> salary </th>
	<th> job_type </th>
	<th> hire_date </th>
	<th> Email </th>
	</tr> " ;
	while($row = $result->fetch_assoc()){

		echo  "<tr>
		<td>".$row['E_id']."</td>
		<td>".$row['E_name']."</td>
		<td>".$row['E_phone_no']."</td>
		<td>".$row['salary']."</td>
		<td>".$row['job_type']."</td>
		<td>".$row['hire_date']."</td>
		<td>".$row['Email']."</td>
		
		
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