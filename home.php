<?php

session_start();


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Martial Artswork - Home</title>
	<link rel="shortcut icon" HREF="./image/logo.png">
	<link rel="stylesheet" type="text/css" href="./style/style.css">
	<link rel="stylesheet" type="text/css" href="./style/navbc.css">
</head>
<body>
	<div class="wrapper">
	<div class="bgimage">
		<div class="menu">
			<nav>
			    <div class="hamburger">
			    	<div class="line"></div>
			    	<div class="line"></div>
			    	<div class="line"></div>
			    </div>

			    <div class="logod" onclick="home()">
			    </div>
					<script type="text/javascript">
			       function home(){
			         location.href="index.php"
					 
			       }
				   </script>
			    

			    <ul class="nav-links">
					<li><a href="home.php" id="onlink"> HOME </a></li>
					<li><a href="Training.php"> TRAINING </a></li>
					<li><a href="self-def.php"> self-def </a></li>
					<li><a href="aboutus.php"> About US </a></li>
					<li><a href="logout.php"> Logout </a></li>
			    </ul>
   			</nav>

		</div>
		<div class="text">
		  <h1> FIGHT | TRAIN | DEFEND </h1>
		  <h4> Push harder than yesterday to make a different tomorrow</h4>
			<div class="ibotton">
		  <a href="Training.php"><button a href="#" target="_blank" id="buttonone"> Learn</button></a>
		 <a href="https://www.facebook.com/groups/141563409300741/"><button id="buttontwo"> Follow Us </button></a>
	 </div>
		</div>
	</div>
	</div>
	<div class="footer">
		<div class="footer-content">
			<div class="footer-sectionone">
				<h1><br>Feel free to ask us anything</br></h1>
				 <h2>If you do like our website submit your feedback in the contact form below</h2>
				<div class="fcontact">
					<span><i/> &nbsp;+91-7208391418</span>
					<span><i/> &nbsp;martialarts487@gmail.com</span>
					<a href="contact.php" style="text-decoration: none">Contact form</a>
				</div>
			</div>
			<div class="footer-sectiontwo">
			<div class="media">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.8915502615664!2d72.85360841538571!3d19.24355765168371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b13affffffff%3A0xfd071f1d3a7844ef!2sSt.%20Francis%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1606153180486!5m2!1sen!2sin" align="right" width="400" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
			</div>
	  </div>
		<div class="fdown">
			Made by Clane | Varian | Gladstone | Rickie
		</div>

		</div>

	<script src="./jss/nav.js"></script>
	

</body>
</html>
