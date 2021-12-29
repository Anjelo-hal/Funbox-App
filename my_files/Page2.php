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
<body id="body2">
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
	<div class="card">
	<img id="hgt" src="images/logo.png">
		<!--<div class="login">
			SIGN IN
		</div>
		<div class="sp1">
			FunBox personal name
		</div>
		<form class="lform">
			<input type="text" size="50" placeholder="Enter personal name" required>
			<input type="submit">
		</form>
		<div class="sp2">
			Password
		</div>
		<form class="lform1">
			<input type="text" size="50" placeholder="Enter password" required>
			<input type="submit">
		</form>
		<form class="checkbox">
			<input type="checkbox" checked="checked" name="remember">
		</form>
		<div class="remember">
			Remember me
		</div>
		<button id="rbut" type="button" onclick="alert('An altered password corresponding to your name has been sent to your personal email')">Forgot your password?</button>
		<form method="get" action="Page1.html">
		<button id="ls" type="submit" onclick="alert('you have successfully logged in')">Log in now</button>
		</form>-->
		
		<form action="process.php" method="POST">
			<p>
				<label id="sp1">Username:</label>
				<input type="text" id="user" placeholder="Enter username" name="user" /required>
			</p>
			<p>
				<label id="sp2">Password:</label>
				<input type="password" id="pass" placeholder="Enter password" name="pass" /required>
			</p>
			<p>
				<input name="login" type="submit" id="ls" value="Login" />
			</p>
		
		
		
		
		
		
		</form>
		 
	
		
		
	<!--	<ul class="smi">
			<li><img src="facebook.jpg"></li>
			<li><img src="playstation.png"></li>
			<li><img src="xbox.png"></li>
			<li><img src="switch.jpg"></li>
			<li><img src="google.png"></li>
		</ul> -->
		<button id="privacy" type="button" onclick="alert('We respect your privacy!')">Privacy policy</button><br>
		<a href="Page2b.php"><button type="submit" id="ante">You don't have a FunBox Account?</button></a>
	</div>
	
	
</body>
</html>