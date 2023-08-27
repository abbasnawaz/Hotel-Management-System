<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="mainmenu.css">
    <link rel="icon" href="hotel-icon.jpg" type="image/jpeg">
	<title></title>
</head>
<body background="38119.jpg"style="background-repeat:repeat;background-size: cover">
    
    
    <div class="topnav" style="padding: 0px 0px 0px 250px">
        <p style="font-size: 20px;padding:0px 0px 0px 300px ;color: white;">Hotel Management System</p>
        <a href="http://localhost/Hotel%20System/customer.php"  >Customer</a>
        <a href="http://localhost/Hotel%20System/room.php">Room</a>
        <a href="http://localhost/Hotel%20System/employee.php">Employee</a>
        <a href="http://localhost/Hotel%20System/Booking.php" >Booking</a>
        <a href="http://localhost/Hotel%20System/mag.php">Manager</a>
        <a href="http://localhost/Hotel%20System/room_type.php" >Room Type</a>
        <a href="http://localhost/Hotel%20System/payment.php">Payment</a>
        <a href="http://localhost/Hotel%20System/customer_phone.php"> Customer Phone</a>
       
       
      </div>

        <div style="position: relative;"><img style="position: absolute;top: 18px;right: 16px;" src="in 1.jpg" alt="logo" width="600" height ="500"></div>
        <div style="position: relative;"><img style="position: absolute;top: 550px;right: 16px;" src="in 2.jpg" alt="logo" width="600" height ="500"></div>
        <div style="position: relative;"><img style="position: absolute;top: 1100px;right: 16px;" src="in 3.jpg" alt="logo" width="600" height ="500"></div>
        <div style="position: relative;"><img style="position: absolute;top: 1650px; right: 350px" src="in 4.jpg" alt="logo" width="600" height ="500"></div>
        <div style="position: relative;"><img style="position: absolute;top: 1100px;left: 30px;" src="mainpic.jpg" alt="logo" width="600" height ="500"></div>
       
        

        <!--/////////////////////////////////////////////-->

        
        <style>
.table {
    margin-top: 5px;
    padding: 0px 40px 0px 90px;
    
     
}
</style>

<div   >
          <pre  style="text-align: left; font-size: 20px; color: white; padding: 20px 10px 30px 40px; font-family: Verdana, Geneva, Tahoma, sans-serif;"  >
The Hotel is a modern, elegant 4-star hotel overlooking
the sea,perfect for a romantic, charming vacation, in 
the enchanting setting of Taormina and the Ionian Sea.
The rooms at the Panoramic Hotel are new, well-lit 
and inviting.Our reception staff will be happy to 
help you during your stay in Taormina, suggesting 
itineraries, guided visits and some good restaurants 
in the historic centre.
While you enjoy a cocktail by the swimming pool on 
the rooftop terrace, you will be stunned by the 
breathtaking view of the bay of Isola Bella.
Here, during your summer stays, our bar serves traditional
Sicilian dishes, snacks and salads.
At the end of a stairway across from the hotel, the white 
pebbles on the beach of Isola Bella await you as well as 
beach facilities with lounge chairs and umbrellas and areas
with free access to the pristine clear sea that becomes 
deep just a few metres from the shore.
          </pre>
      </div>


<?php 

include 'connection.php';
$sql = "SELECT room_type,price from room_type";
$result = $conn->query($sql);

if($result->num_rows > 0){

	echo  " <div class=\"table\"> <font color=\"white\" size=\"50\" >  </style> <table border=3 > 
	<tr>
	<th> Room Type </th>
	<th> Price </th>
	
	</tr> " ;
	while($row = $result->fetch_assoc()){

		echo  "<tr>
		<td>".$row['room_type']."</td>
		<td>".$row['price']."</td>
		
		</tr> </font> </div>";

	}
	echo "</table>";

}else{

	echo "No Record Found";
}
$conn->close();
 ?>
        <!--/////////////////////////////////////////////-->

  <div  style="padding:1050px 0px 0px 0px; ; color: white;  ">
        <p style="text-align: left; font-size: 15px; color: red; padding: 10px 20px 0px 550px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
          Developed by :- Warda Tariq 191370011 || Muhammad Abbas Chaudhary 191370041
      </p>
  </div>
</body>
</html>