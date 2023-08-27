<!DOCTYPE html>
<html>
<head>
	<title>Booking </title>
	<link rel="icon" href="hotel-icon.jpg" type="image/jpeg">
	<style>
		p{
			font-size: 30px;
			font-family:Lucida Sans;
		}
         
         .p1{
         background-color:#CD5C5C;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.text{
	padding: 10px 10px 10px 10px;
	border: round;
}
   
	</style>
</head>
<body background="hotel.jpg" style="background-repeat: no-repeat;background-size:cover">
      <form action="connectBooking.php" method="post">
      	<marquee direction="right">
      	<h1>Hotel Management system</h1>
        </marquee>


        <a href="http://localhost/Hotel%20System/changebookingstatus.php" class="p1"target="_blank" >Change Booking Status</a>
		<a href="http://localhost/Hotel%20System/viewallbooking.php" class="p1"target="_blank" >View All Booking Status</a>

        
       
      	<p align="Center" margin-top="30px" width="30%" height="50px" padding= "12px 20px"
    margin="8px 0" box-sizing="border-box" direction="rtl" >
		Booking ID  : <input class="text" type="number" name="B_id" placeholder="Enter Booking ID here" size ="30" 
		font-size="30px" padding="15px 32px" required="" autofocus="" autocomplete="On"><br><br>
        Entry Date  : <input class="text" type="date" name="Entry_date" placeholder="Enter Entey date here" maxlength="25" size="40" font-size="30px" padding="15px 32px" required=""><br><br>
		Exit Date  : <input class="text" type="date" name="Exit_date" placeholder="Enter Exit date Name here" maxlength="25" size="40" font-size="30px" padding="15px 32px" required=""><br><br>
		Customer ID : <input class="text" type="number" name="C_id" placeholder="Enter Customer ID" maxlength="25" size="40" font-size="30px" padding="15px 32px" required=""><br><br>
		Manager ID : <input class="text" type="number" name="M_id" placeholder="Enter Manager ID" maxlength="25" size="40" font-size="30px" padding="15px 32px" required="">
		<br><br>
		<input class="p1" type="submit" name="add" value="Add Booking">
	   </p>
		
		
	</form>
	

</body>
</html>