
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updated</title>
    <link rel="icon" href="hotel-icon.jpg" type="image/jpeg">
</head>

<body background="hotel.jpg" style="background-repeat: no-repeat;background-size:cover">
    

    
<?php 

include'connection.php';
$B_id=$_POST['B_id'];



$sql = "UPDATE booking SET B_status = 'Not Active' WHERE booking_id=$B_id ";

if($conn->query($sql)==true)
{
    
        echo "Update Completed";
    
}
else
{
echo "ERROR !!!!";
}

$conn->close();


?>



</body>
</html>
