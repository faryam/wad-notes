<?php

$servername = "127.0.0.1";
$dbusername = "root";
$dbpassword = "";
$dbname = "final";
 
$fname = $_POST['f'];
$lname = $_POST['l'];
$email = $_POST['e'];
$addr = $_POST['h'];
$num = $_POST['c'];




$conn = new mysqli($servername,$dbusername ,$dbpassword ,$dbname );

if($conn->connect_error)
{
	die ("COnnection failed: " . $conn->connect_error);
}
else
{
	
}

if(empty($fname))
{
		echo "First name can not be blank press back and connect the issue! ";
		die();
}

$sql = "INSERT INTO needy(fname,lname,email,address,number) VALUES
('$fname','$lname','$email','$addr','$num')";


if($conn->query($sql)==TRUE)
	{
		echo "THANK YOU FOR REGISTERING";
	}
	else
	{
		echo "ERROR" . $sql . "<br>" . $conn->error;
	}

$conn->close();
?>