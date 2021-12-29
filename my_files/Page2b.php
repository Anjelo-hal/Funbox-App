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
		<!--<div class="login">
			SIGN UP
		</div>
		<div class="sp1">
			FunBox personal E-mail
		</div>
		<form class="lform">
			<input type="text" size="50" placeholder="Enter personal e-mail" required>
			<input type="submit">
		</form>
		<div class="sp2">
			CREATE Password
		</div>
		<form class="lform1">
			<input type="text" size="50" placeholder="Enter password" required>
			<input type="submit">
		</form>-->
		<br>
		<form class="form-horizontal" action="registration_code.php" method="POST">
	<h1>User Registration</h1>
	<div class="form-group">
    <label class="control-label col-sm-2" for="firstname">username:</label>
    <div class="col-sm-6">
      <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" /required>
    </div>
  </div>
	<div class="form-group">
    <label class="control-label col-sm-2" for="firstname">First Name:</label>
    <div class="col-sm-6">
      <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter Firstname" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Last Name:</label>
    <div class="col-sm-6">
      <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter Lastname" required>
    </div>
  </div>
  <div class="-group">
    <label class="control-label col-sm-2" for="gender">Gender:</label>
    <div class="col-sm-6">
      <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
	  <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-6"> 
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password" required>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
     <button id="ls1" type="submit" name="create" onclick="alert('Please log in now !')">CREATE</button>
    </div>
  </div>
</form>
		
		
		
		
		
		
		
		<div id="papi">
		<strong>Connect via : </strong>
		</div>
		</form>
		<ul class="smi">
			<li><img src="images/facebook.jpg"></li>
			<li><img src="images/playstation.png"></li>
			<li><img src="images/xbox.png"></li>
			<li><img src="images/switch.jpg"></li>
			<li><img src="images/google.png"></li>
		</ul>
		<button id="privacy" type="button" onclick="alert('We respect your privacy!')">Privacy policy</button>
	</div>
</body>
</html>