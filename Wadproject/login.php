<?php 
	$con = new mysqli("localhost", "root", "", "wadproject");
	$n = $_POST["x"];
	$e = $_POST["y"];

	$q = "select * from users where username='".$n."' and pass='".$e."'";

	$rs = $con->query($q);
	if ($r = $rs->fetch_assoc())
	{
										session_start();
							
							$s= $r['id'];
							$c= $_SESSION['Total'];

								$q = "insert into orders (custid,total) values('" . $s . "','" . $c . "')"; 
								$rs = $con->query($q);								
								session_destroy();
								session_unset();
								echo "Thanks for shopping";
	}
	else
	{
		session_start();
		echo "Total items: ".$_SESSION['count']."</br>";
								echo "Total Bill: ".$_SESSION['Total']."</br>";
		$q = "select * from games";
			$rs = $con->query($q);
			echo "<table class='w3-table'>";
		    while ( $r = $rs->fetch_assoc())
			{
				$array = $_SESSION["cart"];
				$array2 = $_SESSION["cartname"];
				for($n=0;$n<count($array);$n++)
				{
					if($r["name"]==$array2[$n]&&$r["id"]==$array[$n])
					{
						echo "<tr>";
						echo "<td><img src='". $r["image"] ."' class='w3-left w3-circle w3-margin-right' style='width:60px'></td>"; 
						echo "<td>" . $r["name"] . "</td>";
						echo "<td>RS.". $r["price"] ."</td>";
						echo "<td><a href='#' onclick='fun(\"". $r["id"] ."\",\"".$r["name"]."\",\"".$r["price"]. "\");'> X</a> </td>";
						echo "</tr>";
					}
				}
	        }
		
			
			$q = "select * from gameitems";
			$rs = $con->query($q);
			while ( $r = $rs->fetch_assoc())
			{
				$array = $_SESSION["cart"];
				$array2 = $_SESSION["cartname"];
				for($n=0;$n<count($array);$n++)
				{
					if($r["name"]==$array2[$n]&&$r["id"]==$array[$n])
					{
						echo "<tr>";
						echo "<td><img src='". $r["image"] ."' class='w3-left w3-circle w3-margin-right' style='width:60px'></td>"; 
						echo "<td>" . $r["name"] . "</td>";
						echo "<td>RS.". $r["price"] ."</td>";
						echo "<td><a href='#' onclick='fun(\"". $r["id"] ."\",\"".$r["name"]."\",\"".$r["price"]. "\");'> X</a> </td>";
						echo "</tr>";
					}
				}
	        }
			$q = "select * from giftcards";
			$rs = $con->query($q);
			while ( $r = $rs->fetch_assoc())
			{
				$array = $_SESSION["cart"];
				$array2 = $_SESSION["cartname"];
				for($n=0;$n<count($array);$n++)
				{
					if($r["name"]==$array2[$n]&&$r["id"]==$array[$n])
					{
						echo "<tr>";
						echo "<td><img src='". $r["image"] ."' class='w3-left w3-circle w3-margin-right' style='width:60px'></td>"; 
						echo "<td>" . $r["name"] . "</td>";
						echo "<td>RS.". $r["price"] ."</td>";
						echo "<td><a href='#' onclick='fun(\"". $r["id"] ."\",\"".$r["name"]."\",\"".$r["price"]. "\");'> X</a> </td>";
						echo "</tr>";
					}
				}
	        }
			$con->close();
			echo "</table>";
			echo "</table>";
								
								echo "</br></br>";
								echo "<button onclick=\"document.getElementById('id01').style.display='block'\" class='w3-btn bun'>Check Out</button></br>";
								echo "Incorrect Username or password";
								echo "<div id='id01' class='w3-modal'>";
								echo "<div class='w3-modal-content' style='background-color:black; width:500px;height:400px;'>";
								
								echo "<div class='w3-container' style='color:black; width:500px;height:400px;'>";
						        echo "<span onclick=\"document.getElementById('id01').style.display='none'\" class='w3-closebtn'>&times;</span>";
								echo "<form class='mom' >";
								echo "Enter  Username:<br/>";
								echo "<input type='text' id='x1' name='username'<br><br>";
								echo "Enter  Password:<br/>";
								echo "<input type='password' id='y1' name='pass'<br><br>";
								echo "<input type='button'  onClick='fun3();' value='Login' class='bun'/><br>";;
								echo "</br>";
								echo "<a href='#' class='bun'>Create Account</a>";
								
								echo "</form>";
								echo "</div>";
								
								echo "</div>";
								echo "</div>";		
								echo "</span>";
		
	}
	
	            
?>