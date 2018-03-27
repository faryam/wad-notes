<html>
	<head>
		<title>User Mode</title>
		
		<script>
			function myFunc()
			{
				var re = /^[0-9]{3}-[0-9]{1}-[0-9]{2}-[0-9]{6}-[0-9]{1}$/;
				if (document.getElementById("a").value.search(re) == -1 && document.getElementById("b").checked)
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
		
		#third
		{
			width:1000px;
			height:550px;
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
			height:400px;
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 40px;
			margin-left:100;
			margin:50;
			margin-left:200;
		}
		</style>
	</head>
	<body>
		<div id="main">
		
				<div id="first">
				
				<img src="ac.jpg">
				
				</div>
				
				
			
				<div id="third">
				<form action = "search.php" method="POST" onSubmit="return myFunc();" class="mom">
				 What do you want to search by<br/><br/><br/>
					
					<input type="radio" name="group" value="title" checked>Title 
					<input type="radio" name="group" value="author">Author 
					<input type="radio" name="group" id="b" value="ISBN">ISBN 
					<input type="radio" name="group" value="Publisher">Publisher <br/><br/><br/>
					Enter  Data:<br/><br/>
					<input type="text" name="vnum"  id="a"/> <br><br><br/>
					
					<input type="submit"  value="Search" /><br><br/>
					<span id="msg"> </span><br><br/>
					<a href="main.hml" class="bun">BACK</a>
					</form>
					<span id="msg"> </span>
				
				
				</div>
				
				<div id="fourth">
				</br>
					Created by:Frayyam Asif
				</div>
			
		</div>

	</body>
</html>
