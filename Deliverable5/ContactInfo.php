<?php
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$msgtitle=$_POST['msgtitle'];
	$purpose=$_POST['purpose'];
	$message=$_POST['message'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title> RockCreek Gym </title>
	<link rel="stylesheet" href="RockCreek.css" type="text/css">
</head>

<body>
	<div class="background">
		
		<div class="top">
			<img class="banner" src="RockCreekLogo.JPG" alt="Logo" >
			<table class="tabletop" border= "1">
				<tr>
					<th><a href="RockCreekHome.html" title="homepage">Home</a></th>
					<th><a href="RockCreekAppointment.html" title="appointments">Make an Appointment</a></th>
					<th><a href="RockCreekAbout.html" title="About">About Us</a></th>
					<th><a href="RockCreekLogin.html" title="Appointment">Log In/Sign Up</a></th>
					<th><a href="RockCreekContactUs.html" title="Contact Us">Contact Us</a></th>
				</tr>
			</table>
		</div>

		<div class="main" >

			<div class="leftside">
				<input id="DTsearch" class="search" type="text" name="search" />
				
			</div>
			<div class="mainsub" >
				<div class="centerpiece">
					<h1>CONFIRMATION:</h1>
					<br><br>
					<h2>Name:</h2><?=$name?>
					<Br>
					<h2>Email:</h2> <?=$email?>
					
					<Br>
					<h2>Message Title:</h2> <?=$msgtitle?>
					
					<Br>
					<h2>Purpose: </h2> <?=$purpose?>
					
					<Br>
					<h2>Message: </h2> <Br>
					<Br>
					&nbsp &nbsp &nbsp &nbsp &nbsp <?=$message?>
					<Br>
					
					
					
					
					
				</div>
				

				<div class="rightside">
					
						
					
				</div>
			</div>
		</div>
		<div class="footer">

			<table border= "0" class="tablebottom">
				<tr>
					<th><img src="googleplus.png" height="50px" width="50px" alt="Google Plus Icon"></th>
					<th><img src="snapchat.png" height="50px" width="50px" alt="Snapchat Icon"></th>
					<th>Copyright 2018   All Rights Reserved</th>
					<th><img src="fbicon.png" height="50px" width="50px" alt="Facebook Icon"></th>
					<th><img src="twittericon.jpg" height="50px" width="50px" alt="Twitter Icon"></th>
				</tr>
			</table>
		
		
		</div>

	</div>


</body>
</html>
