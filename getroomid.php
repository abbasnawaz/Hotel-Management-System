<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Room Status</title>
    <link rel="icon" href="hotel-icon.jpg" type="image/jpeg">
</head>
<body background="hotel.jpg" style="background-repeat: no-repeat;background-size:cover">
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
<form action="alterroomstatus.php" method="post">
<p align="Center" margin-top="30px" width="30%" height="50px" padding= "12px 20px"
    margin="8px 0" box-sizing="border-box" direction="rtl" > Change UnBooked Room Status to Booked </p>
<p align="Center" margin-top="30px" width="30%" height="50px" padding= "12px 20px"
    margin="8px 0" box-sizing="border-box" direction="rtl" >

    Room ID : <input class="text"  type="number" name="R_id" placeholder="Enter Room ID here" size ="30" required="" autofocus="" ><br><br>
    <input class="p1" type="submit" name="add" value="Booked Room">
</p>
</form>


<form action="alterbookroomstatus.php" method="post">
<p align="Center" margin-top="30px" width="30%" height="50px" padding= "12px 20px"
    margin="8px 0" box-sizing="border-box" direction="rtl" > Change Booked Room Status to UnBooked </p>
<p align="Center" margin-top="30px" width="30%" height="50px" padding= "12px 20px"
    margin="8px 0" box-sizing="border-box" direction="rtl" >

    Room ID : <input class="text" type="number" name="R_id" placeholder="Enter Room ID here" size ="30" required="" autofocus="" ><br><br>
    <input class="p1" type="submit" name="add" value="Unbooked Room">
</p>
</form>

</body>
</html>