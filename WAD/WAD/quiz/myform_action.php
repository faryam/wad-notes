<?php



$con = new mysqli("localhost", "root", "", "nadra");

$name = $_POST["name"];
$fathername = $_POST["fathername"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$country = $_POST["country"];

$q = "insert into cnic (name, fathername, gender, dob, country) values ('" . $name . "','" .$fathername . "','" . $gender . "','" . $dob . "','" . $country . "')"; 


if($con -> query($q) == TRUE)
echo "success";
else
echo $con -> error();


$q = "select * from cnic";
$rs = $con -> query($q);

echo "<table border=1>";
echo "<th> ID </th>";
echo "<th> Name </th>";
echo "<th> Father's name </th>";
echo "<th> Gender </th>";
echo "<th> Country </th>";

while ( $r = $rs -> fetch_assoc())
{
	echo "<tr>";
		echo "<td>" . $r["Id"] . "</td>";
		echo "<td>" . $r["name"] . "</td>";
		echo "<td>" . $r["fathername"] . "</td>";
		echo "<td>" . $r["gender"] . "</td>";
		echo "<td>" . $r["country"] . "</td>";
	echo "</tr>";
		
}


$con-> close();
?>