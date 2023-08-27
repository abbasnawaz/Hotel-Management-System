<!DOCTYPE html>
<html>
<head>
	<title>Customer Register</title>
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
	padding: 15px 15px 15px 15px;
	border: round;
}
   
	</style>
</head>
<body background="hotel.jpg" style="background-repeat: no-repeat;background-size:cover">
      <form action="Chk_C.php" method="post">
      	<marquee direction="right">
      	<h1>Hotel Management system</h1>
        </marquee>


        <a href="http://localhost/Hotel%20System/totalcustomers.php" class="p1"target="_blank" >Total Customer</a>
		
        
       
      	<p align="Center" margin-top="30px" width="30%" height="50px" padding= "12px 20px"
    margin="8px 0" box-sizing="border-box" direction="rtl" >
		Customer ID : <input class="text" type="number" name="C_id" placeholder="Enter Customer id here" size ="30" 
		font-size="30px" padding="15px 32px" required="" autofocus="" autocomplete="On" ><br><br>
        First Name : <input class="text" type="text" name="C_First_Name" placeholder="Enter Customer First Name here" maxlength="25" size="40" font-size="30px" padding="15px 32px" required=""><br><br>
		Last Name : <input class="text" type="text" name="C_Last_Name" placeholder="Enter Customer Last Name here" maxlength="25" size="40" font-size="30px" padding="15px 32px" required=""><br><br>
		Phone Number: <input class="text" type="text" name="C_phone_no" placeholder="Enter Customer Phone Number Here" maxlength="25" size="40" font-size="30px" padding="15px 32px" required=""><br><br>
		Address : <input class="text" type="text" name="address" placeholder="Enter Address" maxlength="25" size="40" font-size="30px" padding="15px 32px" required=""><br><br>
		CNIC : <input class="text" type="number" name="CNIC" placeholder="Enter Customer CNIC" maxlength="25" size="40" font-size="30px" padding="15px 32px" required="">
		<br><br>
		<input class="p1" type="submit" name="add" value="Add Customer">
	   </p>
		
		
	</form>

</body>
</html>