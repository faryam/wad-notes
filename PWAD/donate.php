<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #f4511e;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
  <script>
  function checkEmail()
	{
		var em = document.getElementById('email').value;
		var re = /^[A-Za-z0-9]{3,30}[\@][A-Za-z0-9]{3,30}[\.][A-Za-z0-9]{3,5}$/;
		if(!(re.test(em)))
		{
			document.getElementById("vem").innerHTML="INCORRECT EMAIL";
			document.getElementById("vem").style.color="red";
		}
		else
		{
			document.getElementById("vem").innerHTML="CORRECT EMAIL";
			document.getElementById("vem").style.color="blue";
		}
	}
	function checkpassword()
	{
		var cn = document.getElementById('Password').value;
		var re = /^[A-Za-z0-9]{6,8}$/;
		if(!(re.test(cn)))
		{
			document.getElementById("cni").innerHTML="INCORRECT password";
			document.getElementById("cni").style.color="red";
		}
		else
		{
			document.getElementById("cni").innerHTML="CORRECT password";
			document.getElementById("cni").style.color="blue";
		}
	}
	function fun1(f1,e1,l1,c1,x1,y1,z1)
{	var nid=document.getElementById("nid").value;

	var parameters="f="+f1+"&e="+e1+"&l="+l1+"&c="+c1+"&x="+x1+"&y="+y1+"&z="+z1+"  &nid="+nid;

	var x = new XMLHttpRequest();
	x.open("POST","myweb.php",true);
	
	x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	x.send(parameters);
	
		
	x.onreadystatechange = function(){
		if(x.status == 200 && x.readyState == 4)			
document.getElementById("output").innerHTML = x.responseText;
	};
	
}
function fun(id)
{
	document.getElementById("nid").value=id;

	
}

  </script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  
     <a class="navbar-brand" href="#myPage"><img class="img-responsive" src="d.png" width="200" height="100"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
	     <li><a href="index.php">HOME</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">CONTACT US<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" type="text" style="bold"><font color="red"> 0331-4773676 </font></a></li>
          </ul>
        </li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
		
		<!--<li class="dropdown">
		  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Select City<span class="caret"></span></a>
          
		  <ul class="dropdown-menu">
		    <li><a href="#" type="text" style="bold"><font color="red">LAHORE</font></a></li>
            <li><a href="#" type="text" style="bold"><font color="red">KARACHI</font></a></li>
            <li><a href="#" type="text" style="bold"><font color="red">ISLAMABAD</font></a></li>
          </ul>
        </li>-->
        <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> SIGN IN</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="jumbotron text-center">
  <h1>Dowry</h1> 
  <p>We Can Donate for GOODS</p> 
  <form>
    </div>
  </form>
</div>
<div class="container">
  
  <!-- Trigger the modal with a button -->
  
  <!-- Modal For LOGIN -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Admin LOGIN</h4>
        </div>
        <div class="modal-body">
			<form>
				<div class="form-group">
					<label for="email">Email</label>
					<input typ="text" class="form-control" id="email" onblur="checkEmail()">
				</div>
				<p id="vem"></p>
				<div class="form-group">
					<label for="CNIC">Password</label>
					<input type="text" class="form-control" id="Password" placeholder="6-8 Combination (A-Za-z0-9)" onblur="checkpassword()">
				</div>
				<p id="cni"></p>
				<input type="button" value="SUBMIT" class="btn btn-primary" onclick="window.location.href='file:///C:/Users/Admin/Desktop/MY%20website/ResponsiveTutorial/bootstrap-3.3.7-dist/index.html'">
			</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- Modal For POST request -->
  <div class="modal fade" id="newModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
		<!-- Form for Post Request -->
			<form class="modal-body"  action = "myweb.php" method = "Post" >
				<fieldset id="pd">
				  <input type="hidden" id="nid">
				  <h2>Personal Details</h2><br>
				  <Label> First Name </Label> <input type="text" id="f" name="f" placeholder = " Your First Name"><br></br>
				  <Label> Last Name </Label> <input type="text"  id="l" name="l" placeholder = " Your Last Name" ><br></br>
				  <Label> Email ID </Label> <input type="text"  id="e" name="e" placeholder = " ******@gmail.com" ><br></br>
				  <Label> Cell Number </Label> <input type="number"  id="c" name="c" placeholder = " 0335-4083943" ><br></br>
				  <h2>ENTER AMOUNT HOW MUCH YOU DONATE</h2><br>
				  <Label> ITEM ONE </Label> <input type="text" id="x" name="x" placeholder = "ITEM ID = ABC132"><br></br>
				  <Label> ITEM SECOND </Label> <input type="text"  id="y" name="y" placeholder = "ITEM ID = ABC133" ><br></br>
				  <Label> ITEM THIRD </Label> <input type="text"  id="z" name="z" placeholder = "ITEM ID = ABC134" ><br></br> 
				  <input type="button" data-dismiss="modal" class="btn btn-info btn-lg" id="nbtn" onClick="fun1(document.getElementById('f').value,document.getElementById('l').value,document.getElementById('e').value,document.getElementById('c').value,document.getElementById('x').value,document.getElementById('y').value,document.getElementById('z').value);" value="Submit" />
				  
			
				</fieldset>
			</form>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
 
<div class="container">
	<h2 class="container-fluid text-center">DONATION RECIVERS</h2>
	<?php
			$servername = "127.0.0.1";
			$dbusername = "root";	
			$dbpassword = "";
			$dbname = "final";
			$con = new mysqli($servername,$dbusername ,$dbpassword ,$dbname );
			$q = "select * from needy";
			$rs = $con->query($q);
			echo "<span id='output' >";
			echo "<table border=1 id='output' class='container-fluid text-center table-hover table-condensed'>";
			echo "<tr>";
					echo "<th>ID</th>"; 
					echo "<th>FNAME</th>";
					echo "<th>LNAME</th>";
					echo "<th>E-MAIL</th>";
					echo "<th>ADDRESS</th>";
					echo "<th>NUMBER</th>";
					echo "<th>ACTION</th>";
				echo "</tr>";
			while( $r = $rs->fetch_assoc())
			{
				echo "<tr>";
					echo "<td >" . $r["nid"] . "</td>"; 
					echo "<td>" . $r["fname"] . "</td>";
					echo "<td>" . $r["lname"] . "</td>";
					echo "<td>" . $r["email"] . "</td>";
					echo "<td>" . $r["address"] . "</td>";
					echo "<td>" . $r["number"] . "</td>";
					echo "<td><a href='#'  onclick='fun(". $r["nid"] . ");' data-toggle='modal' data-target='#newModal'   class='btn btn-info btn-lg'> Donate</a>  </td>";
				echo "</tr>";	
			}	
			echo "</table>";
			echo "</span>";
			$con->close();
?>
</div>


<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>POWER</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOVE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
</div>
<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="Nd2.jpg" alt="Paris" width="400" height="300">
        <p><strong>Dowry Makers</strong></p>
        <p>Yes, we built WEBSITE for DOWRY</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="Nd1.jpg" alt="New York" width="400" height="300">
        <p><strong>DOWRY</strong></p>
        <p>Now Days , Parents Responsibility</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="ND3.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>DOWRY</strong></p>
        <p>Give to Daugther on his Wedding</p>
      </div>
    </div>
  </div><br>
  
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Bootstrap Edit By <a href="https://www.w3schools.com" title="Visit w3schools">Salman</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
    
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
