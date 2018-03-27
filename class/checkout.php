<?php
			session_start();
			if(isset($_SESSION["user"]))
				echo "Welcome: " . $_SESSION["user"]."            <br/><br/>";
			else
				echo "your session expired, please login again"	;
			$n=1;
			if(isset($_SESSION["chart"]))
			{
				$array = $_SESSION["chart"];
				echo "Your Purchases<br><br>";
				foreach($array as $value)
				{
					echo "Item".$n.":";
					$n=$n+1;
					echo $value;
					echo "<br/>";
				}
				
				echo  "<br/><br/><a href='logout.php' >Logout</a> ";
			}

	
?>