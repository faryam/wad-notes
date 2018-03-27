<html>
	<head>
		<title>Update Book INFo</title>
		
		<script>
			function myFunc()
			{
				var re = /^[0-9]{3}-[0-9]{1}-[0-9]{2}-[0-9]{6}-[0-9]{1}$/;
				if (document.getElementById("a").value.search(re) == -1)
				{
					document.getElementById("msg").innerHTML = "<font color=red> Invalid ISBN Number </font>";
					return false;
				}
				return true;
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
			height:150px;
			text-align:center;
			
		}
		#third
		{
			width:1000px;
			height:700px;
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
		input[type=text]
		{
			width: 130px;
			box-sizing: border-box;
			border: 2px solid #ccc;
			border-radius: 4px;
			font-size: 16px;
			background-color: white;
			background-image: url('searchicon.png');
			background-position: 10px 10px; 
			background-repeat: no-repeat;
			padding: 12px 20px 12px 40px;
			-webkit-transition: width 0.4s ease-in-out;
			transition: width 0.4s ease-in-out;
		}

		input[type=text]:focus 
		{
			width: 50%;
		}
		input[type=submit] 
		{
			width: 50%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
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
			height:550px;
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 40px;
			
			margin:50;
			margin-left:200;
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
				<form action = "update_action.php" method="POST" onSubmit="return myFunc();" class="mom">
					Enter  Title of Book:<br/>
					<input type="text" name="title" placeholder="OOP" value="<?php echo $r["title"]; ?>"/> <br><br>
					Enter  Name of Author of Book:<br/>
					<input type="text" name="author" placeholder="Kamran" value="<?php echo $r["author"]; ?>"/> <br><br>
					Enter  ISBN of Book:<br/>
					<input type="text" name="ISBN"  id="a" placeholder="123-1-12-123456-1" value="<?php echo $r["ISBN"]; ?>"/> <br><br>
					<span id="msg"> </span><br/>
					Enter  Publisher Name of Book:<br/>
					<input type="text" name="publisher" placeholder="ILMI" value="<?php echo $r["Publisher"]; ?>"/> <br><br>
					Select Softcopy of Book:<br/>
					<input type="file" name="name" accept="application/pdf" placeholder="oop.pdf" value="<?php echo $r["name"]; ?>"/> <br><br>
					<input type="submit"  value="UPDATE" /><br>
					<span id="msg"> </span><br/><br/>
					<input type="hidden" name="id" value="<?php echo $r["id"]; ?>"/>
					<input type="hidden" name="nam" value="<?php echo $r["name"]; ?>"/>
					<a href="admin.php" class="bun">BACK</a>
					</form>
					
				
				
				</div>
				
				<div id="fourth">
				</br>
					Created by:Frayyam Asif
				</div>
			
		</div>

	</body>
</html>
