<?php

	function connectDBServer($server,$user,$pass)
	{
		
		if($db_server = mysqli_connect($server,$user,$pass))
		{
			echo "Connected to Database Server</br>";
			return $db_server;
		}
		else
		{
			exit( "Connected failed to Database Server</br>");
		}
	}
	
	/*function connectBD($db_name,$db_server){
	
		if(mysqli_select_db($db_name,$db_server))
			echo "Connected to Database</br>";
		else
			exit( "Connection failed to Database</br>");
	}*/
	
	
	function closeDB($db_server)
	{
		mysqli_close($db_server);
	}
?>
