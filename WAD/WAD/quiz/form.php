<html>
	<head> 
		<title> NADRA FORM </title>
		<script>
			function myFunc()
			{
				var re = /^[0-9]{5}-[0-9]{7}-[0-9]{1}$/;
				if (document.getElementById("a").value.search(re) == -1)
				{
					document.getElementById("msg").innerHTML = "<font color=red> Incorrect CNIC </font>";
					return false;
				}
				return true;
			}
		
		</script>
	</head>
	
	<body>
		<form action = "myform_action.php" method="POST" onSubmit="return myFunc();">
			Enter your CNIC <br>
			<input type="text" name="name" id="a" /> <br>
			<span id="msg"> </span>
			Enter your Father's name <br>
			<input type="text" name="fathername" /> <br>
			Enter your gender <br>
			Male <input type="radio" name="gender" value="male" /> 
			Female <input type="radio" name="gender" value="female" /> <br>
			Enter your DOB <br>
			<input type="text" name="dob" /> <br>
			Enter your Country <br>
			<input type="text" name="country" /> <br> <br>
			<input type="submit" value="submit the form" />
		</form>
	</body>
</html>