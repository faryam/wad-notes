<?php 
$con = new mysqli("localhost", "root", "", "wadproject");
$n = $_POST["username"];
$e = $_POST["pass"];


$q = "insert into users (username,pass) values('" . $n . "','" . $e . "')";  

if($con->query($q) == TRUE)
{
	
	header("location:cart.php");
	
}
else
	echo $con->error;	
$con->close();               
?>