<html>
	<head>
		<title>Search Result</title>
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
					<?php
						$con = new mysqli("localhost","root","","mydb");
						$e = $_POST["group"];
						$c=$_POST["vnum"];
						$q="";
						if($e=="title")
						{
							
							$q = "select * from library where title = '". $_POST["vnum"]."'";
						}
						else if($e=="author")
						{
							
							$q = "select * from library where author = '". $_POST["vnum"]."'";
						}
						else if($e=="ISBN")
						{
							
							$q = "select * from library where ISBN = '". $_POST["vnum"]."'";
						}
						else if($e=="Publisher")
						{
							
							$q = "select * from library where Publisher = '". $_POST["vnum"]."'";
						}
						$rs = $con->query($q);
						if($rs)
						{
							
						
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
								echo "<td><a href='read.php?id=". $r["id"] ."' > Read</a>";
								echo "</tr>";
										
							}
							echo "</table>";
						}
						else
							echo "No Result <br/>";
						$con->close();
						
					?>
					<br/><a href="user.php" class="bun">BACK</a>
				
					
			
				</div>
				
				<div id="fourth">
				</br>
					Created by:Frayyam Asif
				</div>
			
		</div>

	</body>
</html>
