<?php 

    function getamount($R_id,$booking_id){
        include'connection.php';

       $sql="SELECT booking.entry_date,booking.exit_date,room.R_id,room_type.room_type,room_type.price, DATEDIFF(booking.exit_date,booking.entry_date)*room_type.price AS'Total Bill',DATEDIFF(booking.exit_date,booking.entry_date) AS'Total Days' FROM booking JOIN booking_room ON(booking.booking_id=booking_room.booking_id) JOIN room ON(booking_room.R_id=room.R_id) JOIN room_type ON(room_type.roomtype_id=room.roomtype_id) WHERE booking.booking_id=$booking_id AND room.R_id=$R_id;";
       $result = $conn->query($sql);

       if($result->num_rows > 0){
       
           echo  " <div class=\"table\"> <font color=\"black\" size=\"5\" >  </style> <table border=3 > 
           <tr>
           <th> Total Days </th>
           <th> Per Day Amount  </th>
           <th> Total Amount </th>
           </tr> " ;
           while($row = $result->fetch_assoc()){
       
               echo  "<tr>
               <td>".$row['Total Days']."</td>
               <td>".$row['price']."</td>
               <td>".$row['Total Bill']."</td>
                           
               
               </tr> </font> </div>";
       
           }
           echo "</table>";
       
       }else{
       
           echo "No Record Found";
       }
       $conn->close();

    }



	include'connection.php';




$R_id= $_POST['R_id'];
$booking_id= $_POST['booking_id'];

# include'connectbooking.php';

$sql = "INSERT INTO booking_room(R_id,booking_id) VALUES ('$R_id','$booking_id')";

if($conn->query($sql) == True){


	echo "Data of Booking Room is added successfully <br><br><br>";
    
    echo "Room ID is:$R_id <br> Booking Id is:$booking_id";


 }
else
{

    echo "Error !!!!";

}
$conn->close();
    getamount($R_id,$booking_id);
include'payment.php';
?>