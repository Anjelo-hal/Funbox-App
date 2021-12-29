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
	<script type="text/javascript" src="store.js"></script>
</head>
<body id="body3">
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
		<!--<div class="recm">
			FEATURED AND RECOMMENDED
		</div>
		
		
		
		<div class="slides1">
			
		<div class="mySlides fade">
		  <img src="thewitcher.jpg" style="width:100%">
		  <div class="text">Get The Witcher Wild Hunt -50% here !</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext"></div>
		  <img src="nomanssky.jpg" style="width:100%">
		  <div class="text">Get No Man's sky -30% here !</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext"></div>
		  <img src="header.jpg" style="width:100%">
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
		</script>-->
		
		
		
		<div class="cat">
			<p>CATEGORIES</p>
		</div>
		<form method="post">
                        <select id="sev" name="category" onchange="this.form.submit(); ">
                            
                            <option value="all">Select a category</option>
                            <option value="rpg">RPG</option>
                            <option value="strategy">STRATEGY</option>
                            
                       </select>
                    </form>
					
					<!--<script>
						var element3 = document.getElementById('sev');
						var element4 = document.getElementById('t_id');
						
						if (element3.value === 'all' )
						{
							 document.getElementById('t_id').style.display = 'none';
							
						}
							
					
					</script>-->
					
					
					
					<?php
                        
						require_once 'Config.php';
						$query = "SELECT * FROM categories";
                        $result = $conn->query($query);
						$cat_flag = 0 ;
						
                        if(isset($_POST['category']))
							
                        {
							$cat_flag = 1 ;
							$category = $_POST['category'];
							if ($category == "rpg") {
                                $query = "SELECT * FROM categories WHERE type='rpg'";
                                $result = $conn->query($query);
                            } 
							 else if ($category == "strategy") {
                                $query = "SELECT * FROM categories WHERE type='strategy'";
                                $result = $conn->query($query);
                            } 
                        }
						else {
							$cat_flag = 0 ;
						}
                    ?>
					
					
					 <br>
					
					 <div id="t_id" class="tdiv">
                        <table id="table_hid">
                            <colgroup>
                                <col style="width: 30px;">
                            </colgroup>
                            <tr>
                                
                                <th style="color:white;">Image</th>
                               
                                
                                <th style="color:white;">Category</th>
								
								
								
                                
                            </tr>


                            <?php foreach ($result as $row): ?>

                            <tr>
                                
                                
                                <td>
								
                                    <a id="ach" href="Page4b.php"><img id="hiw" onmouseover="hidCat()" onmouseout="showCat()" style="cursor: pointer;
										height: 70px;
										width: 70px;
										margin: 0 2px;
										background-color: black;
										border-radius: 50%;
										display: inline-block;
										" 
									src="<?php echo $row['image'] ?>"></a>
									
                                </td>
                                
                                <td style="color:white;">
                                    <?php echo $row['type']; ?>
                                </td>
                                <td>
									<p id="showc">A role-playing game or RPG is a game in which players assume the roles of characters in a fictional setting. Strategy games! Decision-making skills have a high significance in determining the outcome.</p>
								</td>
                            </tr>

                            <?php endforeach; ?>
							
							
							
                        </table>
					</div>
					<script type="text/javascript">
					
					
					document.getElementById('sev').value = "<?php echo $row['type'];?>";
					
					</script>
					<script>
						var cat_flag = "<?php echo $cat_flag ?>";
						//document.getElementById("table_hid").style.display = "none";
						
						
						if (cat_flag == 0)
						{
							document.getElementById("t_id").style.display = "none";
						}
						
						
					</script>
					<script>
						var element = document.getElementById('ach');
						var element1 = document.getElementById('sev');
						
						if (element1.value === 'rpg') {
							elemment.href = "Page4b.php";
							
						}else 
						{
							element.href = "Page4a.php";
						}
						
						
					
					
					</script>
					<script>
						function showCat() {
							
								var element = document.getElementById('showc');
								if (element.style.display === 'none') {
									element.style.display = 'block'; 
								}
								else {
									element.style.display = 'none';
								}
						}
					
					
					</script>
					<script>
						function hidCat() {
							
								var element = document.getElementById('showc');
								if (element.style.display === 'block') {
									element.style.display = 'none'; 
								}
								else {
									element.style.display = 'block';
								}
						}
					
					
					</script>
					<!--<script>
					
						function selected(selectObject) {
						  var value = selectObject.value;
						  var x = document.getElementsByClassName("tdiv");
						  

						  if (value == "bro") {
							 x.style.display = "none";
												
						  }
					
					
					</script>-->
		<!--
		<div class="onClickTextOverImage"
			style="background-image:url(images/telder.jpg)">
		<div>A role-playing game or RPG is a game in which players assume the roles of characters in a fictional setting. Players take responsibility for acting out these roles within a narrative, either through literal acting, or through a process of structured decision-making regarding character development.<a href="Page4b.html" onclick="stopPropagation(event)">Download here!</a>
		</div>
		</div>
		
		<div class="onClickTextOverImage"
			style="background-image:url(images/chess.jpg)">
		<div>Strategy games! Decision-making skills have a high significance in determining the outcome. Almost all strategy games require internal decision tree style thinking, and typically very high situational awareness. <a  href="Page4a.html" onclick="stopPropagation(event)">Download Here!</a></div>
		</div>
	-->
		<!--<div class="onClickTextOverImage"
			style="background-image:url()">
		<div>Bananas are <a target="_blank" href="" onclick="stopPropagation(event)">Bananas</a></div>
		</div>-->
		<script>		
		var textOverImages = document.getElementsByClassName("onClickTextOverImage");
		var previousTextOverImage;
		for (var i = 0; i < textOverImages.length; i++) {
			textOverImages[i].onmouseenter = function() {
		var classes = this.classList;
		if (classes.contains("show")) {
			classes.remove("show");
		} else {
		if (previousTextOverImage != null)
			previousTextOverImage.classList.remove("show");
			previousTextOverImage = this;
			classes.add("show");
    }
  }
}

		function stopPropagation(event){
			event.stopPropagation();
}
	</script>	
		<br>
		<!--<input type="text" id="search" placeholder="Search..">-->
		
		<div class="plaisio">
		<p id="demo"></p>

<script>

	var countDownDate = new Date("Jul 15, 2020 15:37:25").getTime();


	var x = setInterval(function() {

	  
	  var now = new Date().getTime();
		
	  
	  var distance = countDownDate - now;
		
	  
	  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
		
	  
	  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
	  + minutes + "m " + seconds + "s ";
		
	   
	  if (distance < 0) {
		clearInterval(x);
		document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
		
	
		<p style="color: white;">Time is running out get it for free now!</p>
		<img src="images/gtav.jpg">
	
	
	</div>
		
</body>
</html>