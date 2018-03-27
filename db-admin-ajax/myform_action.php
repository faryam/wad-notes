<?php 
$con = new mysqli("localhost","root","","db");
$n = $_POST["x"];
$e = $_POST["y"];


$q = "insert into mytable(name,email) values('$n','$e')";  

if($con->query($q) == TRUE)
{
	$q = "select * from mytable";
$rs = $con->query($q);
	
	echo "<table border=1>";
echo "<tr>";
		echo "<th>ID</th>"; 
		echo "<th>NAME</th>";
		echo "<th>E-MAIL</th>";
		echo "<th>ACTION</th>";
	echo "</tr>";
while( $r = $rs->fetch_assoc())
{
	echo "<tr>";
		echo "<td>" . $r["id"] . "</td>"; 
		echo "<td>" . $r["name"] . "</td>";
		echo "<td>" . $r["email"] . "</td>";
		echo "<td><a href='#' onclick='fun(". $r["id"] . ");'> Delete</a> / <a  href='#' class='updte'  onclick='fun2(". $r["id"] . ");'>view</a></td>";
	echo "</tr>";	
}	
echo "</table>";
	
}
else
	echo $con->error;	
$con->close();               
?>