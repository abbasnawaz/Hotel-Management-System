<?php  

include'connection.php';

$B_id =$_POST['B_id'];
$Entry_date =$_POST['Entry_date'];
$Exit_date =$_POST['Exit_date'];
$B_status = "Active";
$C_id =$_POST['C_id'];
$M_id =$_POST['M_id'];

$sql="INSERT INTO booking(booking_id,entry_date,exit_date,B_status,C_id,M_id) values ('$B_id','$Entry_date','$Exit_date','$B_status','$C_id','$M_id')";
if($conn->query($sql)==true)
{
    echo"Booking added Successfully<br><br>";

    echo "Booking ID is : $B_id <br> Entry Date  is : $Entry_date
	<br> Exit Date is : $Exit_date <br>:Booking status is : $B_status <br> 
	Customer ID is : $C_id <br> Manager ID is : $M_id";	
}

    
else
{
    echo"Booking Not Added !! Error";
}

$conn->close();
include'room.php';

?>