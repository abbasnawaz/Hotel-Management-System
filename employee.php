<!DOCTYPE html>
<html>
<head>
	<title>Employees Information</title>
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


        

      		<a href="http://localhost/Hotel%20System/total.php" class="p1" target ="_blank"> Total employees</a>
        	<a href="http://localhost/Hotel%20System/mag.php" class="p1" target="_blank"> Managers </a>
        	<a href="http://localhost/Hotel%20System/server.php" class="p1" target="_blank"> Server </a> 
        	<a href="http://localhost/Hotel%20System/sg.php" class="p1" target="_blank"> Security Guard </a>       
        	<a href="http://localhost/Hotel%20System/dr.php" class="p1" target="_blank"> Desk Receptionist </a>     
        	<a href="http://localhost/Hotel%20System/me.php" class="p1" target="_blank"> Mantainance Engineer </a>    
        	<a href="http://localhost/Hotel%20System/ra.php" class="p1" target="_blank"> Room Attendent </a><br><br>
            <a href="http://localhost/Hotel%20System/hk.php" class="p1" target="_blank"> House Keeping </a>     
        	<a href="http://localhost/Hotel%20System/sm.php" class="p1" target="_blank"> Sales Marketing </a>
        	<a href="http://localhost/Hotel%20System/pa.php" class="p1" target="_blank"> Parking Attendent</a>
       

      <form action="Chk_E.php" method="post">


       
      	<p align="Center" margin-top="30px" width="30%" height="50px" padding= "12px 20px"
    margin="8px 0" box-sizing="border-box" direction="rtl" >
		Employee Id : <input class="text" type="number" name="E_id" placeholder="Enter Employee id here" size ="30" 
		font-size="30px" padding="15px 32px" required=""><br><br>
        Name : <input class="text" type="text" name="E_name" placeholder="Enter Employee Name here" maxlength="25" size="40" font-size="30px" padding="15px 32px" required=""><br><br>
        Phone No : <input class="text" type="number" name="E_phone_no" placeholder="Enter phone no here" maxlength="11" size ="30" font-size="30px" padding="15px 32px" required=""><br><br>
		Salary : <input class="text" type="number" name="salary" placeholder="Enter salary here" size ="30" 
		font-size="30px" padding="15px 32px" required=""><br><br>
		Job Type : <input class="text" type="text" name="job_type" placeholder="Enter job type here" maxlength="25" size="40" font-size="30px" padding="15px 32px" required=""><br><br>
		Hire Date : <input class="text" type="date" name="hire_date" placeholder="Enter hire_date" required=""><br><br>
		Email : <input class="text" type="email" name="Email" placeholder="Enter email" maxlength="25" size="40" font-size="30px" padding="15px 32px" required=""><br><br>
		
		<input class="p1" type="submit" name="add" value="Add Employee">
	   </p>
		
		
	</form>




	

 
</body>
</html>