<!DOCTYPE html>
<html>
<head>
	<title>Mangers</title>
	<link rel="icon" href="hotel-icon.jpg" type="image/jpeg">
</head>
<body background="hotel.jpg" style="background-repeat: no-repeat;background-size:cover">



	<?php 

include 'connection.php';
$sql = "SELECT * FROM employee WHERE job_type LIKE '%Manager%' ";
$result = $conn->query($sql);

if($result->num_rows > 0){

	echo  " <div class=\"table\"> <font color=\"black\" size=\"5\" >  </style> <table border=3 > 
	<tr>
	<th> Employee ID </th>
	<th> Employee Name </th>
	<th> Employee Phone # </th>
	<th> Employee Salary </th>
	<th> Employee Job Type </th>
	<th> Employee Hire Date </th>
	<th> Employee Email </th>
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