<!DOCTYPE html>
<html>
<head>
	<title>Customer Phone</title>
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
      <form action="Chk_CP.php" method="post">
      	<marquee direction="right">
      	<h1>Hotel Management system</h1>
        </marquee>


        <a href="http://localhost/Hotel%20System/c_phone.php" class="p1"target="_blank" >View All Customers Phone Number</a>
		
        
       
      	<p align="Center" margin-top="30px" width="30%" height="50px" padding= "12px 20px"
    margin="8px 0" box-sizing="border-box" direction="rtl" >
        Phone Number: <input class="text" type="text" name="C_phone_no" autofocus="" placeholder="Enter Customer Phone Number Here" maxlength="25" size="40" font-size="30px" padding="15px 32px" required=""><br><br>
		Customer ID : <input class="text" type="number" name="C_id" placeholder="Enter Customer id here" size ="30" 
		font-size="30px" padding="15px 32px" required=""  autocomplete="On"><br><br>
        
		<br><br>
		<input class="p1" type="submit" name="add" value="Add Customer Phone Number">
	   </p>
		
		
	</form>

</body>
</html>