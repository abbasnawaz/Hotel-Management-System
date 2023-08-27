
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
$R_id=$_POST['R_id'];



$sql = "UPDATE room SET R_status = 'UnBooked' WHERE R_id = $R_id ";

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

