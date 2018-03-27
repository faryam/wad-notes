<?php 
$con = new mysqli("localhost","root","","nadra");
$n = $_POST["nam"];
$e = $_POST["fath"];
$f = $_POST["gender"];
$g = $_POST["dob"];
$k = $_POST["coun"];

$q = "insert into cnic (name,fathername, gender,dob,country) values('" . $n . "','" .$e . "','" . $f . "','" . $g . "','" . $k . "')";  

if($con->query($q) == TRUE)
	echo "success";
else
	echo $con->error;	
	
$q="select * from cnic";
$rs=$con->query($q);
echo"<table border=2> ";

echo"<tr>";
	echo"<th>  ID   </th>";
	echo"<th>  Name   </th>";
	echo"<th>  FatherName   </th>";
	echo"<th>  Gender  </th>";
	
	echo"<th>  Date of Birth   </th>";
	echo"<th>  Country   </th>";


echo"</tr>";

while( $r=$rs->fetch_assoc())
{
echo"<tr>";
echo"<td>" .$r["id"]. "</td>";
echo"<td>" .$r["name"]. "</td>";
echo"<td>" .$r["fathername"]. "</td>";
echo"<td>" .$r["gender"]. "</td>";
echo"<td>" .$r["dob"]. "</td>";
echo"<td>" .$r["country"]. "</td>";


echo"</tr>";

	

}
echo"</table>";




$con->close();

?>