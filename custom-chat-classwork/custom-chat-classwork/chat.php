<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Chat - Customer Module</title>
<link type="text/css" rel="stylesheet" href="style.css" />
<script type="text/javascript" src="ajax.js" defer="defer"></script>
</head>
<body>
<?php
	session_start();
	$_SESSION['name'] = $_POST['name'];
	
	include 'dbconnection.php';
		$server = new mysqli("localhost", "root", "", "chatbox");
//	$server = connectDBServer("localhost", "root", "");
//	connectBD("chatbox",$server);
	
	$query = "INSERT INTO `online-user`(`name`) values('".$_SESSION['name']."')";
	if(!$server->query($query))
		exit( "Insertion failed");
	
	echo $_SESSION['name'];
	//insertUser($_SESSION['name'],$server);
	
?>
	<div id="wrapper">
    <div id="menu">
        <p class="welcome" >Welcome,<span id="user"> <b><?php echo $_SESSION["name"]?></b></span></p>
        <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
        <div style="clear:both"></div>
    </div>
     
    <div id="chatbox"></div>
     
    <input name="usermsg" type="text" id="usermsg" size="63" />
    <input name="submitmsg" type="button"  id="submitmsg" value="Send" onclick="sendMessage()" />

	</div>

</body>
</html>