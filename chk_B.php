<?php 

	include'connection.php';


$booking_id= $_POST['booking_id'];



$sql = "SELECT booking_id FROM booking WHERE booking_id='$booking_id'";

if($conn->query($sql) == True){


	echo "Data of Employee is added successfully <br>";


 }
else{


 echo "ERROR !!!!" ;

}
$conn->close();
?>
S