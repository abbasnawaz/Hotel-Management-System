<!DOCTYPE html>
<html>
<head>
	<title>Payments</title>
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

          <a href="http://localhost/Hotel%20System/pay.php" class="p1" target ="_blank"> Total Payments</a>
        	<a href="http://localhost/Hotel%20System/credit.php" class="p1" target="_blank"> Payments By Credit Card </a>
        	<a href="http://localhost/Hotel%20System/debit.php" class="p1" target="_blank"> Payments By Debit Card</a> 
        	<a href="http://localhost/Hotel%20System/cash.php" class="p1" target="_blank"> Payments By Cash </a>       
    
       

      <form action="Chk_P.php" method="post">


       
      	<p align="Center" margin-top="30px" width="30%" height="50px" padding= "12px 20px"
    margin="8px 0" box-sizing="border-box" direction="rtl" >
		Payment ID : <input class="text" type="number" name="P_id" placeholder="Enter Payment id here" size ="30" 
		font-size="30px" padding="15px 32px" required=""><br><br>
    Booking ID : <input class="text" type="number" name="booking_id" placeholder="Enter Booking Id here" maxlength="11" size ="30" font-size="30px" padding="15px 32px" required=""><br><br>
    Payment Type : <input class="text" type="text" name="P_type" placeholder="Enter payment type here" maxlength="25" size="40" font-size="30px" padding="15px 32px" required=""><br><br>
		Payment Amount : <input class="text" type="number" name="P_amount" placeholder="Enter payment amount here" size ="30" 
		font-size="30px" padding="15px 32px" required=""><br><br>
		
	
		
		<input class="p1" type="submit" name="add" value="Add Payment">
	   </p>
		
		
	</form>




	

 
</body>
</html>