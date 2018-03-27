<?php
$servername = "127.0.0.1";
			$dbusername = "root";	
			$dbpassword = "";
			$dbname = "exam";
			$con = new mysqli($servername,$dbusername ,$dbpassword ,$dbname );
			$q = "select * from songs";
			$rs = $con->query($q);

//get the q parameter from URL
$q=$_GET["q"];

echo "<table border=1 id='output' class='container-fluid text-center table-hover table-condensed'>";
			echo "<tr>";
					echo "<th>ID</th>"; 
					echo "<th>Play</th>";
					echo "<th>Song Name</th>";
					echo "<th>Song Auther</th>";
				echo "</tr>";
			while( $r = $rs->fetch_assoc())
			{
				if (strlen($q) > 0)
				{
					 if (strtolower($q)==strtolower(substr($r["name"],0,strlen($q))))
					 {
						echo "<tr>";
						echo "<td >" . $r["id"] . "</td>"; 
						echo "<td><a href='#'   onclick='play(". $r["id"] . ");'> PLAY</a> </td>";
						echo "<td>" . $r["name"] . "</td>";
						echo "<td>" . $r["author"] . "</td>";							
						echo "</tr>";
					 }			
				}					 
			}	
			echo "</table>";

?>
