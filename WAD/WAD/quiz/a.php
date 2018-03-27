<html>
	<head> 
		<title> Survey Form </title>
		
	</head>
	
	<body>
		It is a general survey form
		<form action = "myform_action.php" method="POST" onSubmit="return myFunc();">
			what is your name <br>
			<input type="text" name="name" id="a" /> <br>
			<span id="msg"> </span>
			What is your mother language <br>
			Punjabi <input type="radio" name="gender" value="male" /> 
			Pashto <input type="radio" name="gender" value="female" /> <br>
			Sindhi <input type="radio" name="gender" value="male" /> 
			Balochi <input type="radio" name="gender" value="female" /> <br>
			Do you feel proud on your mother language </br>
			<select>
			    <option>yes</option>
				<option>No</option>
				<option>never thought about it</option>
			</select>
			what is your age in numbers <br>
			<input type="text" name="dob" /> <br>
			Where do your ancestors hail from? write few lines <br>
			<input type="text" name="country" /> <br> <br>
			<input type="submit" value="submit the form" />
		</form>
	</body>
</html>