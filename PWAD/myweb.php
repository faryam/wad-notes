<?php

$servername = "127.0.0.1";
$dbusername = "root";
$dbpassword = "";
$dbname = "final";
 
$fname = $_POST['f'];
$lname = $_POST['l'];
$email = $_POST['e'];
$num = $_POST['c'];

$item1 = $_POST['x'];
$item2 = $_POST['y'];
$item3 = $_POST['z'];


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

$sql = "INSERT INTO donation (fname,lname,email,number) VALUES ('$fname','$lname','$email','$num')";
$sqid="SELECT id FROM donation ORDER BY ID DESC LIMIT 1";
if($conn->query($sql)==TRUE)
	{
		$rr=$conn->query($sqid);
		$rid=$rr->fetch_assoc();
		$r=$rid["id"];
		$qor="INSERT INTO item(did, sofa, bed, oven) VALUES ('$r','$item1','$item2','$item3')";
		$conn->query($qor);
	}
	else
	{
		echo "ERROR" . $sql . "<br>" . $conn->error;
	}
$qq = " DELETE FROM needy WHERE nid = " . $_POST['nid'];

if($conn->query($qq)==TRUE)
	{
		echo "THANK You For Donating";
	}
	else
	{
		echo " !!Error" . $qq . "<br>" . $conn->error;
	}
	$q = "select * from needy";
	$rs = $conn->query($q);
	echo "<table border=1 class='container-fluid text-center table-hover table-condensed'>";
	echo "<tr>";
	echo "<th>ID</th>"; 
					echo "<th>FNAME</th>";
					echo "<th>LNAME</th>";
					echo "<th>E-MAIL</th>";
					echo "<th>ADDRESS</th>";
					echo "<th>NUMBER</th>";
					echo "<th>ACTION</th>";
	echo "</tr>";
while( $r = $rs->fetch_assoc())
{
	echo "<tr>";
		echo "<td >" . $r["nid"] . "</td>"; 
					echo "<td>" . $r["fname"] . "</td>";
					echo "<td>" . $r["lname"] . "</td>";
					echo "<td>" . $r["email"] . "</td>";
					echo "<td>" . $r["address"] . "</td>";
					echo "<td>" . $r["number"] . "</td>";
					echo "<td><a href='#' onclick='fun(". $r["nid"] . ");' data-toggle='modal' data-target='#newModal'  class='btn btn-info btn-lg'> Donate</a>  </td>";
	echo "</tr>";	
}	
echo "</table>";










$conn->close();
?>