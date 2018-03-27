<!DOCTYPE html>
<html lang="en">
<head>
  <title>MusicJuke</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="my_client_code.js"></script>
<script>

$(document).ready(function(){
	
	$('#home').click(function(){
		$("#div_sort").show();
		$("#div_search").hide();
		$("#div_upload").hide();
	});
	$('#search').click(function(){
		$("#div_search").show();
		$("#div_sort").hide();
		$("#div_upload").hide();
	});
	$('#upload').click(function(){
		$("#div_upload").show();
		$("#div_search").hide();
		$("#div_sort").hide();
	});
	
});
function upload_file()
{
	alert();
	var file = $('#file').prop('files')[0];
	var name_info = $('#nameinfo').val();
	var auther_info = $('#autherinfo').val();
    var form_data = new FormData();
    form_data.append('nameinfo', name_info);
	form_data.append('autherinfo', auther_info);
    form_data.append('file', file);
	form_data.append('submit', true);   	
    $.ajax({
                url: 'upload.php',
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(data){
                    alert(data);
                }
     });
}

function showHint(str)
{
//alert(str);
	if (str.length==0)
	  { 
	  //document.getElementById("txtHint").innerHTML="";
	  return;
	  }
	  
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  
	xmlhttp.onreadystatechange=function()
	  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			document.getElementById("output").innerHTML=xmlhttp.responseText;
			}
	  }
	  
	xmlhttp.open("GET","search.php?q="+str,true);
	xmlhttp.send();
}


  function play(id){
	  
	  var parameters="id="+id;
	  var x = new XMLHttpRequest();
	x.open("POST","play.php",true);
	
	x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	x.send(parameters);
	
		
	x.onreadystatechange = function(){
		if(x.status == 200 && x.readyState == 4)			
document.getElementById("output").innerHTML = x.responseText;
	};
       var audio = document.getElementById("audio");
       audio.play();
                 }
   </script>

</script>

</head>
<body style="background-color: #f2f2f2">
	<div class="jumbotron" style="background-color: #ff8533;">
		<div class="container text-center">
			<h1>Music Juke</h1>      
			<h3>Dance to the rhythm of your heart.</h3>
			<marquee behaviour='alternate'><h3 id='song'></h3></marquee>
			<h3>Volume: <span id='volume'>100%</span></h3>
			<h3>Controls</h3>
			<button onclick='play()'><span class='glyphicon glyphicon-play'></span></button>
			<button onclick='pause()'><span class='glyphicon glyphicon-pause'></span></button>
			<button onclick='volume_up()'><span class='glyphicon glyphicon-volume-up'></span></button>
			<button onclick='volume_down()'><span class='glyphicon glyphicon-volume-down'></span></button>
			<button onclick='toggle_mute()'><span class='glyphicon glyphicon-volume-off'></span></button>
		</div>
	</div> 

	<div class="btn-group btn-group-justified">
	  <div class="btn-group">
	    <button type="button" class="btn btn-warning btn-lg" id = "home" style="background-color: #ff8533">Home</button>
	  </div>
	  <div class="btn-group">
	    <button type="button" class="btn btn-warning btn-lg" id = "search" style="background-color: #ff8533">Search</button>
	  </div>
	  <div class="btn-group">
	    <button type="button" class="btn btn-warning btn-lg" id = "upload" style="background-color: #ff8533">Upload</button>
	  </div>
	</div>

	<div id="div_sort">
	Sort BY</br></br>
	<select>
		<option value="Most Popular">Most Popular</option>
		<option value="Most Recent">Most Recent</option>
		<option value="Oldest">Oldest</option>
</select>
	
	</div>

	<div id="div_search" hidden>
	<p><b>Search with keyword:</b></p>
	<input type="text" onkeyup="showHint(this.value)" size="20" />
	
	</div>

	<div id="div_upload" hidden>
	<label>Song Name:</br><input type='text' id='nameinfo' /></br>
	<label>Auther Name:</br><input type='text' id='autherinfo' /></br>
<label>Select Song File:</br><input type='file' id='file' /></br>
<button onclick='upload_file()'>Upload File</button>
	
	</div>


<div class="container-fluid"><br>
<div id="song_list">
<?php
			$servername = "127.0.0.1";
			$dbusername = "root";	
			$dbpassword = "";
			$dbname = "exam";
			$con = new mysqli($servername,$dbusername ,$dbpassword ,$dbname );
			$q = "select * from songs";
			$rs = $con->query($q);
			echo "<span id='output' >";
			echo "<table border=1 id='output' class='container-fluid text-center table-hover table-condensed'>";
			echo "<tr>";
					echo "<th>ID</th>"; 
					echo "<th>Play</th>";
					echo "<th>Song Name</th>";
					echo "<th>Song Auther</th>";
				echo "</tr>";
			while( $r = $rs->fetch_assoc())
			{
				echo "<tr>";
					echo "<td >" . $r["id"] . "</td>"; 
					echo "<td><a href='#'   onclick='play(". $r["id"] . ");'> PLAY</a>  </td>";
					echo "<td>" . $r["name"] . "</td>";
					echo "<td>" . $r["author"] . "</td>";
					
					
				echo "</tr>";	
			}	
			echo "</table>";
			echo "</span>";
			$con->close();
?>

</div>
</div>

</body>
</html>
