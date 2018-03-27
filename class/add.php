<?php
			session_start();
			array_push($_SESSION["chart"],$_GET["id"]);
			$_SESSION["count"]=$_SESSION["count"]+1;
			header("location:shop.php");
?>