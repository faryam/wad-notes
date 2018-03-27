<html>
	<head>
		<title>Welcome to Shopping</title>
	</head>
	<body>
		<form action="login_action.php" method="POST">
			Enter you name <br>
			<input type="text" name="fname" value="<?php if(isset($_COOKIE["fname"]))echo $_COOKIE["fname"] ?>"/> <br>
			Enter your Last name <br>
			<input type="text" name="lname" value="<?php if(isset($_COOKIE["lname"]))echo $_COOKIE["lname"] ?>"/> <br>
			<input type="submit" value="Login" />
		</form>
	</body>
<html>