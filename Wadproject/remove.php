<?php
		session_start();
		if(!empty($_SESSION["cart"]))
		{
			$array = $_SESSION["cart"];
			$array2 = $_SESSION["cartname"];
			$arrlength = count($array);
			for($d=0;$d<$arrlength;$d++)
			{
				if($_POST["name"]==$array2[$d]&&$_POST["id"]==$array[$d])
				{
					$array[$d]=0;
					$array2[$d]="";
					break;
				}
			}
			$_SESSION["cart"]=$array ;
			$_SESSION["cartname"]=$array2;
			$_SESSION["count"]=$_SESSION["count"]-1;
			$_SESSION["Total"]=$_SESSION["Total"]-$_POST["price"];
			
			
			if(!empty($_SESSION["cart"]))
							{
								echo "Total items: ".$_SESSION['count']."</br>";
								echo "Total Bill: ".$_SESSION['Total']."</br>";
								
								$con = new mysqli("localhost", "root", "", "wadproject");
								$q = "select * from games";
								$rs = $con->query($q);
								echo "<table class='w3-table' id='output'>";
								
								
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
											echo "<td><a href='#' onclick='fun(\"". $r["id"] ."\",\"".$r["name"]."\",\"".$r["price"]. "\");'> X</a></td>";
											echo "</tr>";
										}
									}
								}
								$con->close();
									
							
							
								echo "</table>";
								echo "</br></br>";
								echo "<button onclick=\"document.getElementById('id01').style.display='block'\" class='w3-btn bun'>Check Out</button>";
								
								echo "<div id='id01' class='w3-modal'>";
								echo "<div class='w3-modal-content' style='background-color:black; width:500px;height:400px;'>";
								echo "<div class='w3-container' style='color:black; width:500px;height:400px;'>";
						        echo "<span onclick=\"document.getElementById('id01').style.display='none'\" class='w3-closebtn'>&times;</span>";
								echo "<form class='mom' >";
								echo "Enter  Username:<br/>";
								echo "<input type='text' id='x1' name='username'<br><br>";
								echo "Enter  Password:<br/>";
								echo "<input type='password' id='y1' name='pass'<br><br>";
								echo "<input type='button'  onClick='fun3();' value='Login' class='bun'/><br>";
								echo "</br>";
								echo "<a href='create.php' class='bun'>Create Account</a>";
								echo "</form>";
								echo "</div>";
								echo "</div>";
								echo "</div>";	
								
							}
							
		}
		
?>