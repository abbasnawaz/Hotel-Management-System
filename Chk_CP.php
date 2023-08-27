<?php 

	include'connection.php';
$C_phone_no= $_POST['C_phone_no'];
$C_id= $_POST['C_id'];



$sql = "INSERT INTO customer_phone(C_phone_no,C_id) VALUES ('$C_phone_no','$C_id')";

if($conn->query($sql) == True){


	echo "Data of Customer phone is added successfully <br> <br>";
	echo "C_id is:$C_id <br> Customer phone is: $C_phone_no";

}
else{
	echo "Error. ".$conn->error;
}
$conn->close();

	 ?>