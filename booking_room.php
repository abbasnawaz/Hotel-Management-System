<!DOCTYPE html>
<html>
<head>
	<title>Booking Room</title>
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
      
      <marquee direction='right'>
      	<h1>Hotel Management system</h1>
        </marquee>
		
    
       

      <form action="Chk_BR.php" method="post">


       
      	<p align="Center" margin-top="30px" width="30%" height="50px" padding= "12px 20px"
    margin="8px 0" box-sizing="border-box" direction="rtl" >
		Room ID : <input class="text" type="number" name="R_id" placeholder="Enter Payment id here" size ="30" 
		font-size="30px" padding="15px 32px" required=""><br><br>
    Booking ID : <input  class="text" type="number" name="booking_id" placeholder="Enter Booking Id here" maxlength="11" size ="30" font-size="30px" padding="15px 32px" required=""><br><br>
    
		
	
		
		<input class="p1" type="submit" name="add" value="Add Room Booking">
	   </p>
		
		
	</form>

	


	

 
</body>
</html>