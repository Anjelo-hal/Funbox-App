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
<body id="body4">
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
		<div class="tools1">
		<p>Click on the Funbox logo to download the Funbox Studio<p>
		
		<a href="images/logo.png" download>
		<img src="images/logo.png" alt="Funbox" width="80" height="auto">
		</a>
		</div>
	</header>
	<?php
include("Config.php");

if(isset($_POST['but_upload'])){
 
  $name = $_FILES['file']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 
  $extensions_arr = array("jpg","jpeg","png","gif");

  
  if( in_array($imageFileType,$extensions_arr) ){
 
     
     $query = "insert into images(name) values('".$name."')";
     mysqli_query($conn,$query);
  
    
     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

  }
 
}
?>
<br>
<div id="upload">
<form method="post" action="" enctype='multipart/form-data'>
	<h2> Upload your Image here! </h2>
  <input type='file' name='file' />
  <input type='submit' value='Save' name='but_upload'>
  </div>
</form>
</body>
</html>