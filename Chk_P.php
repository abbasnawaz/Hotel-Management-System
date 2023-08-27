<?php 

	include'connection.php';



$P_id= $_POST['P_id'];
$booking_id= $_POST['booking_id'];
$P_type= $_POST['P_type'];
$P_amount= $_POST['P_amount'];


$sql = "INSERT INTO payment(P_id,booking_id,P_type,P_amount) VALUES ('$P_id','$booking_id','$P_type','$P_amount')";

if($conn->query($sql) == True){


	echo "Data of Payment is added successfully <br>";
	echo "Payment id is:$P_id <br> Booking Id is:$booking_id
	<br> Payment Type is:$P_type <br> Payment amount is:$P_amount" ;


 }
else{

	echo" ERROR !!!!";
 

}
$conn->close();
include'end.php';
?>
