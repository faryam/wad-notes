<?php 
$con = new mysqli("localhost","root","","mydb");
$n = $_POST["title"];
$e = $_POST["author"];
$f = $_POST["ISBN"];
$g = $_POST["publisher"];
$h = $_POST["name"];

$q = "insert into library (title,author,ISBN,Publisher,name) values('" . $n . "','" . $e . "','" . $f . "','" . $g . "','" . $h . "')";  

if($con->query($q) == TRUE)
{
	
	//header("location:admin.php");
	
}
else
	echo $con->error;	
$con->close();               
?>