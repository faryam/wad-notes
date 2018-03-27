<?php
$servername = "127.0.0.1";
			$dbusername = "root";	
			$dbpassword = "";
			$dbname = "exam";
			$con = new mysqli($servername,$dbusername ,$dbpassword ,$dbname );
			$q = "select * from songs where id=" . $_POST["id"];
			$rs = $con->query($q);
			$rr = $rs->fetch_assoc();
			$x=$rr["listen_count"]+1;
			$s="update songs set listen_count='".$x."' where id = " . $_POST["id"];
			if($con->query($s))
			{
			}
			else
				echo "ERROR" . $sql . "<br>" . $con->error;
			$q = "select * from songs";
			$rs = $con->query($q);
			echo "<span id='output' >";
			echo "Playing Song ".$rr["name"];
			echo "<audio id='audio' src='". $rr["path"] . "' ></audio>";
			echo "<table border=1 id='output' class='container-fluid text-center table-hover table-condensed'>";
			echo "<tr>";
					echo "<th>ID</th>"; 
					echo "<th>Play</th>";
					echo "<th>Song Name</th>";
					echo "<th>Song Auther</th>";
				echo "</tr>";
			while( $r = $rs->fetch_assoc())
			{
				echo "<tr>";
					echo "<td >" . $r["id"] . "</td>"; 
					echo "<td><a href='#'   onclick='play(". $r["id"] . ");'> PLAY</a> </td>";
					echo "<td>" . $r["name"] . "</td>";
					echo "<td>" . $r["author"] . "</td>";
					
					
				echo "</tr>";	
			}	
			echo "</table>";

?>
