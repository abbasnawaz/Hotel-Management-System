<?php 


	function insertphone($C_id,$C_phone_no){

		include'connection.php';
		$sql = "INSERT INTO customer_phone(C_phone_no,C_id) VALUES ('$C_phone_no','$C_id')";

		if($conn->query($sql) == True){


		#echo "Data of Customer phone is added successfully <br> <br>";
		echo " Customer phone is: $C_phone_no";

		}
	else{
			echo "Error. ".$conn->error;
		}
		$conn->close();


	}


	include'connection.php';
$C_id= $_POST['C_id'];
$C_First_Name= $_POST['C_First_Name'];
$C_Last_Name= $_POST['C_Last_Name'];
$address = $_POST['address'];
$CNIC = $_POST['CNIC'];
$C_phone_no= $_POST['C_phone_no'];

$sql = "INSERT INTO customer(C_id,C_First_Name,C_Last_Name,address,CNIC) VALUES ('$C_id','$C_First_Name','$C_Last_Name','$address','$CNIC')";

if($conn->query($sql) == True){


	echo "Data of Customer is added successfully <br> <br>";
	echo "C_id is:$C_id <br> C_First_Name is: $C_First_Name
	<br> C_Last_Name is: $C_Last_Name <br> Customer address is: $address <br> 
	Customer CNIC is:$CNIC <br>";

}
else{
	echo"ERROR !!!!!";
}

		



$conn->close();

insertphone($C_id,$C_phone_no);


include'Booking.php';

	 ?>