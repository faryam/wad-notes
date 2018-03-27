<?php
			session_start();
			if(empty($_SESSION["cart"]))
			{
				$_SESSION["Total"] =0;
				$_SESSION["count"]="";
				$_SESSION["cart"]=array();
				$_SESSION["cartname"]=array();
			}
			array_push($_SESSION["cart"],$_POST["id"]);
			array_push($_SESSION["cartname"],$_POST["name"]);
			$_SESSION["count"]=$_SESSION["count"]+1;
			$_SESSION["Total"]=$_SESSION["Total"]+$_POST["price"];
			echo $_SESSION["count"];
?>