<html>
	<head>
		<title>Admin Mode</title>
		
		<script>
			function fun1()
			{
				var x = new XMLHttpRequest();
				x.open("GET","delete.php",true);
				x.send();	
				x.onreadystatechange = function(){
					if(x.status == 200 && x.readyState == 4)			
					{
						document.getElementById("msg").innerHTML = x.responseText;
					}
				};
				
			}
		
		</script>
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
		
		#second
		{
			width:1000px;
			height:650px;
			text-align:center;
			background-image: url("re.jpg");
			border-style: solid;
			border-color:rgb(206,161, 128);
			margin:auto;
			
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
			margin: 8px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			text-decoration:none;
		}
		
		table 
		{
			border-collapse: collapse;
			width: 70%;
			margin:50;
			margin-left:150;
		}

		th, td 
		{
			text-align: left;
			padding: 8px;
		}

		tr
		{
			background-color: #f2f2f2;
		}

		th
		{
			background-color: #4CAF50;
			color: white;
		}
		</style>
	</head>
	<body>
		<div id="main">
		
				<div id="first">
				
				<img src="ac.jpg">
				
				</div>
				<div id="second">
					<br/><br/>
					<a href="add.php" class="bun">ADD RECORD</a><br/><br/>
					<span id="msg"></span>
					<?php
						$con = new mysqli("localhost", "root", "", "mydb");
						$q = "select * from library";
						$rs = $con->query($q);
						echo "<table border=1>";
						echo "<th> ID </th>";
						echo "<th> Title </th>";
						echo "<th> Author </th>";
						echo "<th> ISBN </th>";
						echo "<th> Publisher </th>";
						echo "<th> File Name </th>";
						echo "<th> Action </th>";
						while ( $r = $rs->fetch_assoc())
						{
							echo "<tr>";
							echo "<td>" . $r["id"] . "</td>";
							echo "<td>" . $r["title"] . "</td>";
							echo "<td>" . $r["author"] . "</td>";
							echo "<td>" . $r["ISBN"] . "</td>";
							echo "<td>" . $r["Publisher"] . "</td>";
							echo "<td>" . $r["name"] . "</td>";
							echo "<td><a href='delete.php?id=". $r["id"] ."' onclick='fun1();'> Delete</a>  <a href='update.php?id=". $r["id"] ."'>Update</a> <a href='adminread.php?id=". $r["id"] ."' > Read</a></td>";
							echo "</tr>";
									
						}
						echo "</table>";
						$con->close();
						
					?>
					<a href="main.hml" class="bun">BACK</a>
					
				
					
			
				</div>
				
				<div id="fourth">
				</br>
					Created by:Frayyam Asif
				</div>
			
		</div>

	</body>
</html>
