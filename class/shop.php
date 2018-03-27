<html>
	<head>
		<title>User Shoping</title>
		
	</head>
	<?php
			session_start();
			if(isset($_SESSION["user"]))
			{
				echo "total number of items in cart:".$_SESSION["count"]."              ";
				echo "             <a href='cart.php'>ShowCart</a> <a href='logout.php' >Logout</a> <br/><br/> ";
				if(isset($_SESSION["user"]))
					echo "Welcome: " . $_SESSION["user"]."<br/><br/>";
				else
					echo "your session expired, please login again<br/>"	;
			}
			else
					echo "your session expired, please login again<br/>"	;
	
	?>
	<body>
		
		<img src="1.jpg" alt="watch" height="50px" width="50px">
		<br/><a href="add.php?id=watch" >Add to chart</a><br/><br/>
		<img src="2.jpg" alt="Mobile" height="50px" width="50px">
		<br/><a href="add.php?id=Mobile" >Add to chart</a><br/><br/>
		<img src="3.jpg" alt="car" height="50px" width="50px">
		<br/><a href="add.php?id=car" >Add to chart</a><br/><br/>
		<img src="4.jpg" alt="bat" height="50px" width="50px">
		<br/><a href="add.php?id=bat" >Add to chart</a><br/><br/>
		<img src="5.jpg" alt="ball" height="50px" width="50px">
		<br/><a href="add.php?id=ball" >Add to chart</a><br/><br/><br/>
		<a href="checkout.php">Check Out</a>
		
		
		
	</body>
</html>
