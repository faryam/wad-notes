<?php 
$con = new mysqli("localhost", "root", "", "wadproject");
$n = $_POST["name"];
$e = $_POST["price"];
$f = $_POST["filename"];

move_uploaded_file( $_FILES['filename']['tmp_name'],$_FILES['filename']['names']);
$q = "insert into games (name,price,image) values('" . $n . "','" . $e . "','" . $f . "')";  
if($con->query($q) == TRUE)
{
	
	
						echo "<ul class='menu2'>";
						
						$con = new mysqli("localhost", "root", "", "wadproject");
						$q = "select * from games";
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