<?php
session_start();
echo "We are getting value from session <br>";
if(isset($_SESSION["user"]))
	echo "Hello " . $_SESSION["user"];
else
	echo "your session expired, please login again"	;

if(isset($_COOKIE["country"]))
	echo "<br>you country as in cookies is " . $_COOKIE["country"];
else
	echo "<br>cookie expired";	
	
?>