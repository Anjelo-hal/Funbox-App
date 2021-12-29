<?php 

    
    session_start();
    require_once 'Config.php';

  

    if (isset($_POST['MsgBtn'])) {

        $message = $_POST['message'];


        if (empty($message)) {
            $error = true;
            $messageError = "Please enter your message";
        }

        if (!$error) {
            $errTyp = "success";
            $errMSG = "Message sent sucessfully!";
            unset($message);
        } else {
            $errTyp = "danger";
            $errMSG = "Something went wrong, look at the error messages."; 
        }

    }

?>
<!DCOTYPE html>
<html>
<head>
	<title>FunBox</title>
	<link rel="stylesheet" type="text/css" href="CSS.css">
	<link rel='icon' href='favicon.ico' type='image/x-icon'/>
</head>
<body id="cont">
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
	<div class="cont1">
	<p>Contact Us</p>
	</div>
	<div class="ep">
	<p>E-mail: Gaming@funbox.com</p>
	<p> Tel: 0123456789</p>
	</div>
	
	<form class="form-contact" method="post">
                    <h2 class="form-contact-heading">Send Message Here</h2>
                    <div class="input_group">

                        <label for="name">Name:</label>
                        <input type="text" name="name" id="inputName" class="form-control" placeholder="<?php echo $userRow['name']; ?>" disabled><br>

                        <label for="inputSurname">Surname:</label>
                        <input type="text" name="surname" id="inputSurname" class="form-control" placeholder="<?php echo $userRow['surname']; ?>" disabled><br>

                        <label for="inputEmail">Email address:</label>
                        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="<?php echo $userRow['email']; ?>" disabled><br>

                        <label for="inputMessage">Message:</label>
                        <textarea id="inputMessage" name="message" placeholder="Type your message.." style="height:200px"></textarea>
                        <span class="text-danger"><?php if (isset($messageError)) echo $messageError; ?></span>

                        <br>
                        <button class="btn btn-lg btn-primary btn-block" type="submit" name='MsgBtn'>Send</button>
                    </div>
                </form>
				
</body>
</html>