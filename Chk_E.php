<?php 

	include'connection.php';




$E_id= $_POST['E_id'];
$E_name= $_POST['E_name'];
$E_phone_no= $_POST['E_phone_no'];
$salary = $_POST['salary'];
$job_type= $_POST['job_type'];
$hire_date= $_POST['hire_date'];
$Email= $_POST['Email'];

$sql = "INSERT INTO employee(E_id,E_name,E_phone_no,salary,job_type,hire_date,Email) VALUES ('$E_id','$E_name','$E_phone_no','$salary','$job_type','$hire_date','$Email')";

if($conn->query($sql) == True){


	echo "Data of Employee is added successfully <br>";


	echo "Employee id is:$E_id <br> Employee Name is:$E_name
	<br> Employee phone no is:$E_phone_no <br> Employee Salary is:$salary <br> 
     Job Type is:$job_type <br> Hire date id:$hire_date<br> Email is:$Email";
 }
 else{
	 echo "ERROR !!!";
 }
$conn->close();
?>
