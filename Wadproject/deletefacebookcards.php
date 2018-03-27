<?php  
$con = new mysqli("localhost", "root", "", "wadproject");
 $q = "DELETE FROM giftcards WHERE id = '".$_POST["id"]."'";  
 if($con->query($q) == TRUE)
{
	
	
						echo "<ul class='menu2'>";
						
							$q = "select * from giftcards where type='facebook'";
						$rs = $con->query($q);
						while ( $r = $rs->fetch_assoc())
						{

							echo "<li><div class='img'>
							<img src='". $r["image"] ."' class='image'>
						  </br>". $r["name"] ."</br>RS.". $r["price"] ."</br><button type='button' name='delete_btn'  data-id3='".$r['id']."' class='buny'>Delete</button></div></li>";
									
						}
						$con->close();
						
					
					
					echo "</ul>";
					
}
else
	echo $con->error;	
 ?> 