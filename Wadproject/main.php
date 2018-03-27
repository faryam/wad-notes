<!DOCTYPE html>
<html>
	<head>
		<title>The Fuel</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="w3.css">
		<?php
			session_start();
			if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 10)) {
			
				session_destroy();
				session_unset();
			}
			$_SESSION['LAST_ACTIVITY'] = time(); 
			if(empty($_SESSION["cart"]))
			{
				$_SESSION["Total"] =0;
				$_SESSION["count"]="";
				$_SESSION["cart"]=array();
				$_SESSION["cartname"]=array();
			}
					
		?>
		<style>		
		#main
		{
			width:1300px;
			height:1300px;
			position:relative;
			margin-left:auto;
			margin-right:auto;
			left:0px;
			top:0px;
			
		}
		#first
		{
			width:1300px;
			height:150px;
			border-style: solid;
			
			background-color:black;
			border-color:black;
			
			
						
		}
		
		#third
		{
			width:1300px;
			height:200px;
			background-color:black;
			text-align:center;
			position:relative;
			border-style: solid;
			border-color:black;
			color:white;
							
		}
		
		#second
		{
			width:1300px;
			height:550px
			position:relative;
			text-align:center;
			border-style: solid;
			border-color:black;
			background-color:black;
			
		}
		#fourth
		{
			width:1300px;
			height:200px;
		}
		.animation
		{
			padding-top:10px;
			width:1298px;
			height:550px;
			
		}
		.animation1
		{
			
			width:1300px;
			height:200px;
			
		}
		.align{margin:50;}
		.cal
		{
			width:500px;
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 40px;		
			margin:50;
			margin-left:200;
			margin-top:100;
		}
		.logo
		{
			width:130px;
			height:130px;
			padding-left:15px
			
		}
		h1
		{
			color:red;
			font-style: oblique;
			font-size: 70px;
			font-weight: bold;
			margin:10px;
		}
		
		.menu
		{
			margin-left:50px;
			color:white;
			color:#fff!important;
		}
		.menu-item
		{
			width:120px;
			height:120px;
			margin-top:30px;
			
		}
		.menu-item:hover
		{
			margin:10px;
			color:white!important;
			background-color:red!important
		}
		.menu-item2
		{
			margin:10px;
			
		}
		.menu-item2:hover
		{
			margin:10px;
			color:white!important;
			background-color:red!important
		}
		.sub-menu-item:hover
		{
			color:red!important;
			background-color:black!important
		}
		.mySlides 
		{
			display:none;
		}
		.mySlide 
		{
			display:none;
		}
		.my 
		{
			margin:70px;
		}
		.bun 
		{
			width: 50%;
			background-color: black;
			color: white;
			padding: 14px 20px;
			margin: auto;
			border: 1px solid #ccc;
			cursor: pointer;
			text-decoration:none;
		}
		.bun:hover 
		{
			width: 50%;
			background-color:red;
			color: white;
			padding: 14px 20px;
			margin: auto;
			border: 1px solid #ccc;
			cursor: pointer;
			text-decoration:none;
		}
		#fifth
		{
			width:1300px;
			height:250px;
			padding-top:10px;
			background-color:black;
			text-align:center;
			position:relative;
			border-style: solid;
			border-color:black;
			color:white;
		}
		</style>
	</head>
	<body>
		<div id="main">
		
				<div id="first">
				<img src="p.png" alt="The Fuel" class="w3-round-small logo">	<h1 style="display: inline-block;">THE FUEL</h1>
				<ul class="w3-navbar w3-card-2 menu" style="display: inline-block;">
				<div style="display: inline-block;" class="menu-item">
					<li><a href="main.php" class="menu-item2">Home</a></li>
				</div>
				<div style="display: inline-block;" class="menu-item">
					<li><a href="games.php" class="menu-item2">Games</a></li>
				</div>
				<div style="display: inline-block;">
					<li class="w3-dropdown-hover menu-item">
					<a href="csgo.php" class="menu-item2">Game items <i class="fa fa-caret-down "></i></a>
					<div class="w3-dropdown-content w3-black w3-card-4" >
					  <a href="csgo.php" class="sub-menu-item">CS:GO</a>
					  <a href="dota2.php" class="sub-menu-item">Dota 2</a>
					</div>
				  </li></div>
				  <div style="display: inline-block;"><li class="w3-dropdown-hover menu-item">
					<a href="steamcards.php" class="menu-item2">Gift Cards<i class="fa fa-caret-down"></i></a>
					<div class="w3-dropdown-content w3-black w3-card-4">
					  <a href="steamcards.php" class="sub-menu-item">Steam Wallet Cards</a>
					  <a href="facebookcards.php" class="sub-menu-item">Facebook cards</a>
					  
					</div>
				  </li></div>
				  <div style="display: inline-block;" class="menu-item"><li><a href="contact.php" class="menu-item2">Contact US</a></li></div>
				   <div style="display: inline-block;" class="menu-item"  style="width:120px;height:120px;"><li><a href="cart.php" class="menu-item2"><img src="empty-cart-light.png" alt="Shopping Cart" style="width:35px;height:35px;"> <?php if(!empty($_SESSION["cart"])){ echo "<span id='num'>".$_SESSION['count']."</span>";}else{ echo "<span id='num'></span>";}?></a></li></div>
				  
				</ul>
				
				
				</div>
				
				
			
				<div id="second" >
					
					  
					  <div class="animation">

						<div class="mySlides">
						  <img src="Steam.jpg" class="animation">
						  <div class="w3-display-middle w3-large w3-container w3-padding-16">
							<h1>All Steam Games Avalibile now</h1>
							<a href="games.php" class="bun">Buy Now</a>
						  </div>
						</div>

						<div class="mySlides">
						  <img src="Dota.jpg" class="animation">
						  <div class="w3-display-middle w3-large w3-container w3-padding-16">
						  <h1>Dota2 Items Avalibile now</h1>
							<a href="dota2.php" class="bun">Buy Now</a>
						  </div>
						</div>

						<div class="mySlides">
						  <img src="CS-GO.jpg" class="animation">
						  <div class="w3-display-middle w3-large w3-container w3-padding-16">
							<h1>CSGO and its Items Avalibile now</h1>
							<a href="csgo.php" class="bun">Buy Now</a>
						  </div>
						</div>

						<div class="mySlides">
						  <img src="WalletCodes.jpg" class="animation">
						  <div class="w3-display-middle w3-large w3-container w3-padding-16">
							<h1>Gift Cards Avalibile now</h1>
							<a href="steamcards.php" class="bun">Buy Now</a>
						  </div>
						</div>



						<a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:45%;left:0" onclick="plusDivs1(-1)"><</a>
						<a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:45%;right:0" onclick="plusDivs1(1)">></a>

						</div>

						<script>
						var myIndexx = 0;
						carousell();

						function carousell() {
							var ii;
							var xx = document.getElementsByClassName("mySlides");
							for (ii = 0; ii < xx.length; ii++) {
							   xx[ii].style.display = "none";  
							}
							myIndexx++;
							if (myIndexx > xx.length) {myIndexx = 1}    
							xx[myIndexx-1].style.display = "block";  
							setTimeout(carousell, 3000); // Change image every 2 seconds
						}
						var slideIndex1 = 1;
						showDivs1(slideIndex1);

						function plusDivs1(n) {
						  showDivs1(slideIndex1 += n);
						}

						function showDivs1(n) {
						  var i1;
						  var x1 = document.getElementsByClassName("mySlides");
						  if (n > x1.length) {slideIndex1 = 1}    
						  if (n < 1) {slideIndex1 = x1.length} ;
						  for (i1 = 0; i1 < x1.length; i1++) {
							 x1[i1].style.display = "none";  
						  }
						  x1[slideIndex1-1].style.display = "block";  
						}
						</script>
					</div>
					<div id="third">
						<h1>ALL STEAM GAMES AVAILABLE<h1>  
					</div>
					<div id="fourth">
						<div class="animation1">

						<div class="mySlide">
						  <img src="CSGO-COMPLETE.jpg" class="animation1">
						</div>

						<div class="mySlide">
						  <img src="BattlePass-2.jpg" class="animation1">
						  
						</div>

						<div class="mySlide">
						  <img src="DotaBanner.jpg" class="animation1">
						</div>

						<div class="mySlide">
						  <img src="Steamwallet.jpg" class="animation1">
						  
						  </div>
						  <a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:75%;left:0" onclick="plusDivs(-1)"><</a>
						  <a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:75%;right:0" onclick="plusDivs(1)">></a>
						</div>
							<script>
						var myIndex = 0;
						carousel();

						function carousel() {
							var i;
							var x = document.getElementsByClassName("mySlide");
							for (i = 0; i < x.length; i++) {
							   x[i].style.display = "none";  
							}
							myIndex++;
							if (myIndex > x.length) {myIndex = 1}    
							x[myIndex-1].style.display = "block";  
							setTimeout(carousel, 3000); // Change image every 2 seconds
						}
						var slideIndex = 1;
						showDivs(slideIndex);

						function plusDivs(n) {
						  showDivs(slideIndex += n);
						}

						function showDivs(n) {
						  var i;
						  var x = document.getElementsByClassName("mySlide");
						  if (n > x.length) {slideIndex = 1}    
						  if (n < 1) {slideIndex = x.length} ;
						  for (i = 0; i < x.length; i++) {
							 x[i].style.display = "none";  
						  }
						  x[slideIndex-1].style.display = "block";  
						}
						</script>


						

						</div>

						
					<div id="fifth">
						<div class="my" style="display: inline-block;">
						  <img src="pin71.png" ></br>
						  LAHORE,PAKISTAN
						</div>

						<div class="my" style="display: inline-block;">
						  <img src="telephone5.png"></br>
						  0322-8066023
						  
						</div>

						<div class="my" style="display: inline-block;">
						  <img src="mail59.png" ></br>
						  support@thefuel.com.pk
						</div>
						
						<div class="my" style="display: inline-block;">
						  <a href='admin.php' class='bun'>Admin</a>
						</div>
					</div>
		</div>
		

	</body>
</html>
