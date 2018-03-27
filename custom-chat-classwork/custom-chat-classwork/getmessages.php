<?php
	
	include 'dbconnection.php';
	$server = new mysqli("localhost", "root", "", "chatbox");
	//$server = connectDBServer("localhost", "root", "");
	//connectBD("chatbox",$server);
	
	//Now, let's create a script to output the information found within our 		table.
	if ($aquery = $server->query ("SELECT * FROM chat")){
		//We can loop through the rows in the table, outputting as we go.
		while ($adata = mysqli_fetch_array ($aquery)){
			echo "<div id='".$adata["id"]."'>".$adata["name"].": ".$adata["message"]."</div>";
					}
	} else {
		echo mysql_error();
	}
	
?>
