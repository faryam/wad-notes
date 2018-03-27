
<?php
$con = new mysqli("localhost","root","","db");
$q = "select * from mytable where id=" . $_POST["id"];
$rs = $con->query($q);
$r = $rs->fetch_assoc();
?>
<html>
<head></head>

<body>
<div id="out1">
<form>
Enter you name <br>
<input type="text" id="x1" value="<?php echo $r["name"]; ?>" /> <br>
Enter you Email <br>
<input type="text" id="y1" value="<?php echo $r["email"]; ?>" /> <br>
<input type="hidden" id="id" value="<?php echo $r["id"]; ?>"/>
<input type="button" onClick="fun3(document.getElementById('x1').value,document.getElementById('y1').value,document.getElementById('id').value);" value="update" />
<br>
<br>
<input type="button" onClick="fun1(document.getElementById('x1').value,document.getElementById('y1').value);" value="insert" />
&nbsp;
</div>

</body>
</html>