<html>
<head>
<script>
function fun(id)
{
		var parameters="id="+id;

	var x = new XMLHttpRequest();
	x.open("POST","delete.php",true);
	x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	x.send(parameters);	
	x.onreadystatechange = function(){
		if(x.status == 200 && x.readyState == 4)			
document.getElementById("output").innerHTML = x.responseText;
	};
	
}
function fun2(id)
{ 
        var parameters="id="+id;

	var x = new XMLHttpRequest();
	x.open("POST","update.php",true);
	
	x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	x.send(parameters);
	
		
	x.onreadystatechange = function(){
		if(x.status == 200 && x.readyState == 4)			
document.getElementById("out1").innerHTML = x.responseText;
	};
		
	
}
function fun1(x1,y1)
{
	var parameters="x="+x1+"&y="+y1;

	var x = new XMLHttpRequest();
	x.open("POST","myform_action.php",true);
	
	x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	x.send(parameters);
	
		
	x.onreadystatechange = function(){
		if(x.status == 200 && x.readyState == 4)			
document.getElementById("output").innerHTML = x.responseText;
	};
	
}

function fun3(x1,y1,id)
{
	var parameters="x="+x1+"&y="+y1+"&id="+id;

	var x = new XMLHttpRequest();
	x.open("POST","update_action.php",true);
	
	x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	x.send(parameters);
	
		
	x.onreadystatechange = function(){
		if(x.status == 200 && x.readyState == 4)			
document.getElementById("output").innerHTML = x.responseText;
	};
	
}
</script>
</head>
<body>
<div id="out1">
<form action="myform_action.php" method="POST">
Enter you name <br>
<input type="text" id="x1" name="x" /> <br>
Enter you Email <br>
<input type="text" id="y1" name="y" /> <br>
<input type="hidden" id="id" value=""/>

<input type="button" onClick="fun3(document.getElementById('x1').value,document.getElementById('y1').value,document.getElementById('id').value);" value="update" />
<br>
<br>
<input type="button" onClick="fun1(document.getElementById('x1').value,document.getElementById('y1').value);" value="insert" />
&nbsp;
</form>
</div>
<?php
$con = new mysqli("localhost","root","","db");
$q = "select * from mytable";
$rs = $con->query($q);
echo "<span id='output'>";
echo "<table border=1 id='output'>";
echo "<tr>";
		echo "<th>ID</th>"; 
		echo "<th>NAME</th>";
		echo "<th>E-MAIL</th>";
		echo "<th>ACTION</th>";
	echo "</tr>";
while( $r = $rs->fetch_assoc())
{
	echo "<tr>";
		echo "<td>" . $r["id"] . "</td>"; 
		echo "<td>" . $r["name"] . "</td>";
		echo "<td>" . $r["email"] . "</td>";
		echo "<td><a href='#' onclick='fun(". $r["id"] . ");'> Delete</a> / <a href='#' class='updte'  onclick='fun2(". $r["id"] . ");'>View</a></td>";
	echo "</tr>";	
}	
echo "</table>";
echo "</span>";
$con->close();
?>
</body>
<html>