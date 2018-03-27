<?php
	
	include 'dbconnection.php';
	
//	$server = connectDBServer("localhost", "root", "");
	//connectBD("chatbox",$server);
	$server = new mysqli("localhost", "root", "", "chatbox");
	$query = "INSERT INTO `chat`(`name`,`message`) values('".$_POST['name']."','".$_POST['message']."')";
	if(!$server->query($query))
		exit( "Insertion failed");
	
?>
