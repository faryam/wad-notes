<html>
	<head>
		<title>Read Book</title>
		<style>
			
		#main
		{
			width:1000px;
			height:945px;
			position:relative;
			margin-left:auto;
			margin-right:auto;
			left:0px;
			top:0px;
		}
		#first
		{
			width:1000px;
			height:250px;
			text-align:center;
			border-style: solid;
			border-color:rgb(206,161, 128);
						
		}
		#third
		{
			width:1000px;
			height:600px;
			text-align:center;
			background-image: url("re.jpg");
			border-style: solid;
			border-color:rgb(206,161, 128);
			
		}
		#fourth
		{
			width:1000px;
			height:45px;
			background-color:rgb(206,161, 128);
			text-align:center;
			color:white;
			border-style: solid;
			border-color:rgb(206,161, 128);
		}
		.bun 
		{
			width: 50%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			text-decoration:none;
		}
		.mom
		{
			width:500px;
			height:400px;
			border-radius: 5px;
			padding: 40px;
			margin:20;
			margin-left:50;
		}
		</style>
	</head>
	<?php
		$con = new mysqli("localhost","root","","mydb");
		$q = "select * from library where id=" . $_GET["id"];
		$rs = $con->query($q);
		$r = $rs->fetch_assoc();
	?>
	<body>
		<div id="main">
		
				<div id="first">
				
				<img src="ac.jpg">
				
				</div>
				
				
			
				<div id="third">
					<object data="<?php echo $r["name"]; ?>" type="application/pdf" class="mom"> </object>
					<br/>
					<a href="user.php" class="bun">BACK</a>
					
				
				
				</div>
				
				<div id="fourth">
				</br>
					Created by:Frayyam Asif
				</div>
			
		</div>

	</body>
</html>
