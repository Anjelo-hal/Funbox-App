<?php
session_start();

	

?>

<!DCOTYPE html>
<html>

<head>
	<title>FunBox</title>
	<link rel="stylesheet" type="text/css" href="CSS.css">
	<link rel='icon' href='favicon.ico' type='image/x-icon'/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<header>
		<div class="content">
		<div class="logo">
			<a href="page1.php">
				<img src="images/logo.png">
			</a>
		</div>
			<ul>
				<li><a><?php if (isset($_SESSION['id']) || (isset($_SESSION['user']))) {
					echo '<h5 style="color:white;">Logged in!</h5>';
				}
					?>
				<li><a><?php
		
		if (isset($_SESSION['id']) || (isset($_SESSION['user']))) {
			
			echo '<form action="logout.php" method="POST">
					<button type="submit" id="logout">Logout</button>
				</form>';

		}
				
		
		
		
		
		?></a></li>
				<li><a href="Page3.php">Store</a></li>
				<li><a href="Page2.php">Sign in</a></li>
				<li><a href="FAQ.php">FAQ</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="tools.php">Tools</a></li>
			</ul>
		</div>
	</header>
		<div class="welcome">
			Welcome to FunBox !
		</div>
<!--		<div class="description">
			<p>FunBox is the ultimate digital storefront platform for PC and Mac,
			   designed with both players and developers in mind. It's build around
			   the idea of providing great games for gamers and a fair deal for the
			   creators. When you buy a game on Funbox 70% of the price goes directly
			   to developers. This helps us on providing you the best gaming experience
			   by building the biggest and greatest games!</p>
		</div> -->
		<div class="offers">
			MIDWEEK SPECIAL OFFERS
		</div>
	
		
		
		<div class="slides">
			
		<div class="mySlides fade">
		  <img src="images/thewitcher.jpg" style="width:100%">
		  <div class="text">Get The Witcher Wild Hunt -50% here !</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext"></div>
		  <img src="images/nomanssky.jpg" style="width:100%">
		  <div class="text">Get No Man's sky -30% here !</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext"></div>
		  <img src="images/header.jpg" style="width:100%">
		  <div class="text">Get Farcry 5 -20% here !</div>
		</div>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	
		</div>
		
		
		
		<script>
			var slideIndex = 1;
			showSlides(slideIndex);

			function plusSlides(n) {
			  showSlides(slideIndex += n);
			}

			function currentSlide(n) {
			  showSlides(slideIndex = n);
			}

			function showSlides(n) {
			  var i;
			  var slides = document.getElementsByClassName("mySlides");
			  var dots = document.getElementsByClassName("dot");
			  if (n > slides.length) {slideIndex = 1}    
			  if (n < 1) {slideIndex = slides.length}
			  for (i = 0; i < slides.length; i++) {
				  slides[i].style.display = "none";  
			  }
			  for (i = 0; i < dots.length; i++) {
				  dots[i].className = dots[i].className.replace(" active", "");
			  }
			  slides[slideIndex-1].style.display = "block";  
			  dots[slideIndex-1].className += " active";
			}
		</script>
		<div id="youtube" >
		
		</div>
		<script>
  document.getElementById('youtube').innerHTML = "<iframe title='YouTube video player'   type=\'text/html\'  src='http://www.youtube.com/embed/dEwEC2MKgeQ' frameborder='0' allowFullScreen></iframe>"
</script>

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<div class="footer">
		&copy;
		<a href="Page1.html" target="_blank">2020 Gaming_DS@UNIPI</a>
		All rights reserved.
		</div>
</body>
</html>