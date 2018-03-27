<?php 
$con = new mysqli("localhost","root","","mydb");
$n = $_POST["title"];
$e = $_POST["author"];
$f = $_POST["ISBN"];
$g = $_POST["publisher"];
$h = $_POST["name"];
if($h=="")
{
	$h=$_POST["nam"];
}

$q = "update library set title = '" . $n . "',author ='". $e . "',ISBN ='". $f . "',Publisher ='". $g . "',name ='". $h . "' where id = " . $_POST["id"]; 
if($con->query($q) == TRUE)
{
	echo '<script>';
	echo 'alert("successfully Updated")';
	echo '</script>';
	header("location:admin.php");
	echo '<script>';
	echo 'alert("successfully Updated")';
	echo '</script>';
}
else
	echo $con->error;	
$con->close();               
?>