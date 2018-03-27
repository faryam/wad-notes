<!DOCTYPE html>
<html>
	<head>
		<title>STEAM GAMES-The Fuel</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="w3.css">
		<script src="jquery.min.js"></script>
		<?php
			session_start();
			
			
					
		?>
		<style>		
		#main
		{
			width:1300px;
			height:2800px;
			position:relative;
			margin-left:auto;
			margin-right:auto;
			left:0px;
			top:0px;
			
		}
		#first
		{
			width:1300px;
			height:170px;
			border-style: solid;
			margin:0;
			background-color:black;
			border-color:black;
			
			
						
		}
		
		#third
		{
			width:1300px;
			height:150px;
			background-color:black;
			text-align:center;
			position:relative;
			border-style: solid;
			border-color:red;
			color:white;
							
		}
		
		#second
		{
			width:1300px;
			height:2000px;
			color:white;
			text-align:center;
			border-style: solid;
			border-color:black;
			background-color:black;
			padding: 40px;
			
		}
		#fourth
		{
			width:1300px;
			height:200px;
		}
		.animation
		{
			
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
			list-style-type:none;margin:0;padding:0;
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
			color: red;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			text-decoration:none;
		}
		#fifth
		{
			width:1300px;
			height:250px;
			background-color:black;
			text-align:center;
			position:relative;
			border-style: solid;
			border-color:black;
			color:white;
		}
		div.img
		{
			margin: 10px;
			border: 1px solid #ccc;
			float: left;
			width:300px;
			height:325px;
			padding:auto;
			text-align:center;
			background-color:black;
			color:white;
			 

		}

		.image:hover
		{
			width:100%;
			height:auto;
		}
		div.img:hover
		{
			border: 1px solid #777;
			
		}

		div.img img
		{
			width: 90%;
			height: auto;
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
		
		.buny
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
		.buny:hover 
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
		
		.menu2
		{
			margin:50;
			color:white;
			color:#fff!important;
			list-style-type:none;margin-left:110px;padding:0;
		}
		.mom
		{
			width:500px;
			height:400px;
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 40px;
			
			margin:50;
			margin-left:200;
		}
		.ScrollStyle
		{
			
			overflow-y: scroll;
		}
		</style>
		<script>
		
		function fun(price,name,id)
		{
		var parameters="price="+price+"&name="+name+"&id="+id;
		
		var x = new XMLHttpRequest();
		x.open("POST","add.php",true);
		
		x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		x.send(parameters);
		
			
		x.onreadystatechange = function(){
			if(x.status == 200 && x.readyState == 4)			
		document.getElementById("num").innerHTML = x.responseText;
		};
		
		}
		</script>
		<script>
		$(document).ready(function(){
			$("#bu").click(function(){
				var name=$("#name").val();
				var price=$("#price").val();
				var filename=$("#filename").val().replace(/.*(\/|\\)/, '');
				$.post({
					type:"POST",
					url:"addgame.php",
					enctype:"multipart/form-data",
					data:
					{
						name:name,
						price:price,
						filename:filename
						
					},
					success:function(msg)
					{
						$("#in").html(msg);
					}
				});
				document.getElementById('id01').style.display='none';
			});
		});
		$(document).ready(function(){
			$(".buny").click(function(){  
           var id=$(this).data("id3");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"deletegame.php",  
                     method:"POST",  
                     data:{id:id},  
                       
                     success:function(msg){  
                          $("#in").html(msg);
                     }  
                });  
           }  
      });  
 });  
		</script>
	</head>
	<body>
		<div id="main">
		
				<div id="first">
				<div style="display: inline-block;"><img src="p.png" alt="The Fuel" class="w3-round-small logo">	<h1 style="display: inline-block;">THE FUEL</h1></div>
				<ul class="w3-navbar menu" style="display: inline-block;">
				<div style="display: inline-block;" class="menu-item">
					<li><a href="admin.php" class="menu-item2">Home</a></li>
				</div>
				<div style="display: inline-block;" class="menu-item">
					<li><a href="admingames.php" class="menu-item2">Games</a></li>
				</div>
				<div style="display: inline-block;">
					<li class="w3-dropdown-hover menu-item">
					<a href="admincsgo.php" class="menu-item2">Game items <i class="fa fa-caret-down "></i></a>
					<div class="w3-dropdown-content w3-black w3-card-4" >
					  <a href="admincsgo.php" class="sub-menu-item">CS:GO</a>
					  <a href="admindota2.php" class="sub-menu-item">Dota 2</a>
					</div>
				  </li></div>
				  <div style="display: inline-block;"><li class="w3-dropdown-hover menu-item">
					<a href="adminsteamcards.php" class="menu-item2">Gift Cards<i class="fa fa-caret-down"></i></a>
					<div class="w3-dropdown-content w3-black w3-card-4">
					  <a href="adminsteamcards.php" class="sub-menu-item">Steam Wallet Cards</a>
					  <a href="adminfacebookcards.php" class="sub-menu-item">Facebook cards</a>
					  
					</div>
				  </li></div>
				  
				</ul>
				
				
				</div>
				
					<div id="third">
						<h1>Admin<h1>
					</div>
					<div id="second" class="ScrollStyle">
						<input type='button' value='Add New' onclick="document.getElementById('id01').style.display='block'"  class='bun' ></br>
						
						<div id="id01" class="w3-modal">
						  <div class='w3-modal-content' style='background-color:black; width:500px;height:400px;'>
							<div class="w3-container" style="color:black;">
							  <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn">&times;</span>
							  <form  class="mom" enctype="multipart/form-data">
								Enter  name of game:<br/>
								<input type="text" id="name" name="name"/> <br><br>
								Enter  price of game:<br/>
								<input type="text" id="price"  name="price"<br><br>
								Select Image of game:<br/>
								<input type="file" id="filename"  name="filename" accept="image/*"/> <br><br>
								<input type='button'  id='bu' value='Insert' class='bun'/>
								</form>
							</div>
						  </div>
						</div>
						<span id="in">
						<ul class="menu2">
						<?php
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
						
					?>
					
					</ul>
					</span>
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
						  <a href='main.php' class='bun'>Logout</a>
						</div>
					</div>

						
					
		</div>
		

	</body>
</html>
