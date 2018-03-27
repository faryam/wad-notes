<?php
$con = new mysqli("localhost","root","","mydb");
$q= "delete from library where id = " . $_GET["id"];
if($con->query($q) == TRUE)
{
	
	
	echo "successfully deleted'";
	
}
else
	echo $con->error;	
$con->close();	
?>