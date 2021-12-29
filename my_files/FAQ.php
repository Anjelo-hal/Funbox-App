<?php
session_start();

	

?>
<!DCOTYPE html>
<html>
<head>
	<title>FunBox</title>
	<link rel="stylesheet" type="text/css" href="CSS.css">
	<link rel='icon' href='favicon.ico' type='image/x-icon'/>
</head>
<body id="bodyw">
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
	<div class="strong">
		<strong>FREQUENTLY ASKED QUESTIONS</strong>
	</div>
	<div class="1">
		<strong>What is FunBox?</strong><br><br>
					FunBox is the ultimate digital storefront platform for PC and Mac,
					designed with both players and developers in mind. It's build around
					the idea of providing great games for gamers and a fair deal for the
					creators. When you buy a game on Funbox 70% of the price goes directly
					to developers. This helps us on providing you the best gaming experience
					by building the biggest and greatest games!<br><br><br>
		<strong>Where can I download the Funbox Store?</strong><br><br>
					Visit the FunBox Games Store page at Funbox.com, go to the upper right corner, and click “Tools.”  This is the only place to safely download the installer for the FunBox Store. Do not trust other sources, as they are likely unsafe.
			<br><br><br>
		<strong>Which platforms does the Funbox store support?</strong><br><br>
					The Funbox Store currently offers PC and Mac support.<br><br><br>
		<strong>How do refunds work on the Funbox Store?</strong><br><br>
					All games are eligible for refund within 14 days of purchase for any reason, as long as you’ve had the game running for less than 2 hours. You will not be eligible for refunds for games from which you have been banned or for which you have otherwise violated the Terms of Service. 
		<br><br><br>
		<strong>How do I contact support?</strong><br><br>
					You can contact our support team <a href="contact.html">here</a>.
	</div>
</body>
</html>