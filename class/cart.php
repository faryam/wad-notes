<?php
			session_start();
			if(isset($_SESSION["user"]))
				echo "Welcome: " . $_SESSION["user"]."           <a href='logout.php' >Logout</a> <br/><br/>";
			else
				echo "your session expired, please login again"	;
			$n=1;
			if(isset($_SESSION["user"]))
			{
				$array = $_SESSION["chart"];
				foreach($array as $value)
				{
					echo "Item".$n.":";
					$n=$n+1;
					echo $value;
					echo "<br/>";
				}
				
				echo "<br/><br/> <a href='checkout.php'>Check Out</a>  <a href='shop.php'>Shop More</a>";
			}
	
?>