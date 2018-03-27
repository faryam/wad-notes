<?php
			session_start();
			$_SESSION["user"] = $_POST["fname"]. " ". $_POST["lname"];
			$_SESSION["count"]=0;
			if(empty($_SESSION["chart"]))
			{
				$_SESSION["chart"]=array();
			}
			setcookie("fname",$_POST["fname"],time()+60*60*24*30 );
			setcookie("lname",$_POST["lname"],time()+60*60*24*30 );
			header("location:shop.php");
?>