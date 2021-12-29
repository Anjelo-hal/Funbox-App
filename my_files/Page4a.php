<?php
session_start();
?>
<!DCOTYPE html>
<html>
<head>
	<title>FunBox</title>
	<link rel="stylesheet" type="text/css" href="CSS.css">
	<link rel='icon' href='favicon.ico' type='image/x-icon'/>
	<script src="store.js"></script>
</head>
<body id="body4" onload="updateCartTotal()">
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
	<!--<div class="str">
		STRATEGY GAMES
	</div>--><br>
	
	<?php
                        
						require_once 'Config.php';
						$query = "SELECT * FROM products where id = 1";
                        $result = $conn->query($query);
						$row = mysqli_fetch_row($result);
						
						$query1 = "SELECT * FROM products where id = 2";
						$result1 = $conn->query($query1);
						$row1 = mysqli_fetch_row($result1);
						
						$query2 = "SELECT * FROM products where id = 3";
						$result2 = $conn->query($query2);
						$row2 = mysqli_fetch_row($result2);
						
						$query3 = "SELECT * FROM products where id = 4";
						$result3 = $conn->query($query3);
						$row3 = mysqli_fetch_row($result3);
						
						$query4 = "SELECT * FROM products where id = 5";
						$result4 = $conn->query($query4);
						$row4 = mysqli_fetch_row($result4);
						
						$query5 = "SELECT * FROM products where id = 6";
						$result5 = $conn->query($query5);
						$row5 = mysqli_fetch_row($result5);
	?>
	
	<section class="container content-section" id="list-id">
            <h2 class="section-header">STRATEGY GAMES</h2>
			
            <div class="shop-items">
                <div class="shop-item">
				
                    <span class="shop-item-title"><?php echo $row[1] ?></span>
                    <img class="shop-item-image" src="<?php echo $row[2] ?>">">
                    <div class="shop-item-details">
                        <span class="shop-item-price"><?php echo $row[3] ?></span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title"><?php echo $row1[1] ?></span>
                    <img class="shop-item-image" src="<?php echo $row1[2] ?>">
                    <div class="shop-item-details">
                        <span class="shop-item-price"><?php echo $row1[3] ?></span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title"><?php echo $row2[1] ?></span>
                    <img class="shop-item-image" src="<?php echo $row2[2] ?>">
                    <div class="shop-item-details">
                        <span class="shop-item-price"><?php echo $row2[3] ?></span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title"><?php echo $row3[1] ?></span>
                    <img class="shop-item-image" src="<?php echo $row3[2] ?>">
                    <div class="shop-item-details">
                        <span class="shop-item-price"><?php echo $row3[3] ?></span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				 <div class="shop-item">
                    <span class="shop-item-title"><?php echo $row4[1] ?></span>
                    <img class="shop-item-image" src="<?php echo $row4[2] ?>">
                    <div class="shop-item-details">
                        <span class="shop-item-price"><?php echo $row4[3] ?></span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				<div class="shop-item">
                    <span class="shop-item-title"><?php echo $row5[1] ?></span>
                    <img class="shop-item-image" src="<?php echo $row5[2] ?>">
                    <div class="shop-item-details">
                        <span class="shop-item-price"><?php echo $row5[3] ?></span>
						
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section><br>
		<section class="container content-section" id="cart-id">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
               
            </div>
            <div class="cart-total" >
                <strong class="cart-total-title" id="kati">Total</strong>
                <span class="cart-total-price"></span>
				
            </div>
            <button class="btn btn-primary btn-purchase" onclick="myFunction()">NEXT</button>
			
			
        </section>
        <button class="btn btn-primary btn-purchase" onclick="window.location.href='Page4a.php'">PREVIOUS</button>
		
		<script>
		if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
    var removeCartItemButtons = document.getElementsByClassName('btn-danger')
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }

    var addToCartButtons = document.getElementsByClassName('shop-item-button')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }

    document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)
}

function purchaseClicked() {
    
    // var cartItems = document.getElementsByClassName('cart-items')[0]
    // while (cartItems.hasChildNodes()) {
    //     cartItems.removeChild(cartItems.firstChild)
    // }
    var childNodes = document.getElementById("list-id").getElementsByTagName('*');
        for (var node of childNodes) {
          node.disabled = true;
        }
        var childNodes = document.getElementById("cart-id").getElementsByTagName('*');
        for (var node of childNodes) {
          node.disabled = true;
        }
    updateCartTotal()
}

function previous() {
        var childNodes = document.getElementById("list-id").getElementsByTagName('*');
        for (var node of childNodes) {
          node.disabled = false;
        }
        var childNodes = document.getElementById("cart-id").getElementsByTagName('*');
        for (var node of childNodes) {
          node.disabled = false;
        }
}

function removeCartItem(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
}

function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
}

function addToCartClicked(event) {
    var button = event.target
    var shopItem = button.parentElement.parentElement
    var title = shopItem.getElementsByClassName('shop-item-title')[0].innerText
    var price = shopItem.getElementsByClassName('shop-item-price')[0].innerText
    var imageSrc = shopItem.getElementsByClassName('shop-item-image')[0].src
    addItemToCart(title, price, imageSrc)
    updateCartTotal()
}

function addItemToCart(title, price, imageSrc) {
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            alert('This item is already added to the cart')
            return
        }
    }
    var cartRowContents = `
        <div class="cart-item cart-column">
            <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column">${price}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1" min="1" max="5">
            <button class="btn btn-danger" type="button">REMOVE</button>
        </div>`
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('$', ''))
        var quantity = quantityElement.value
        total = total + (price * quantity) 
    }
        if (document.getElementById("delo").checked == true && total < 30 ) {
            total = (Math.round(total * 100) / 100) + 6
        }else{
            total = (Math.round(total * 100) / 100)
        }
    document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total
}

 

</script>
</script>
<br>
	<div id="myDIV" onload="myFunction()">
	<div class="ch">
		<form class="chf">
			<input type="text" size="20" placeholder="Address" onpaste="restrict(this);" onkeypress="restrict(this);" onkeyup="restrict(this);" required><br>
			<input class="input" maxlength="10" placeholder="Address number" id="text" type="text" autocomplete="off" required /><br>
			<input type="text" size="20" placeholder="Area" onpaste="restrict(this);" onkeypress="restrict(this);" onkeyup="restrict(this);" required><br>
			<input class="input" maxlength="5" placeholder="POSTCODE" id="post" type="text" autocomplete="off" required /><br><br>
			<input type="submit" id="cps">
		</form>
		<input id="delo" type="checkbox" onclick="updateCartTotal()">
			<label id="deli" for="vehicle1">For express delivery (plus 6$)</label>
			<br>
		<button class="lae"  onclick="myLel()">NEXT</button>
		<br>
	<div class="lol">
		<ul class="neadc">
			<li><p>ADDRESS:</p></li>
			<li><p>ADDR.NUM.:</p></li>
			<li><p>AREA:</p></li>
			<li><p>POSTCODE:</p></li>
		</ul>
		
	</div>
	
	
	</div>
		
	</div>	
	<script>
var restrict = function(tb) {
  tb.value = tb.value.replace(/[^a-zA-Z@]/g, '');
};
	</script>
	<script>
	function myFunction() {
      var x = document.getElementById("myDIV");
      if (x.style.display === "none") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }

</script>
	<script>
	var text = document.getElementById('text');
text.onkeypress = text.onpaste = checkInput;

function checkInput(e) {
    var e = e || event;
    var char = e.type == 'keypress' 
        ? String.fromCharCode(e.keyCode || e.which) 
        : (e.clipboardData || window.clipboardData).getData('Text');
    if (/[^\d]/gi.test(char)) {
        return false;
    }
}

var text = document.getElementById('post');
text.onkeypress = text.onpaste = checkInput;

function checkInput(e) {
    var e = e || event;
    var char = e.type == 'keypress' 
        ? String.fromCharCode(e.keyCode || e.which) 
        : (e.clipboardData || window.clipboardData).getData('Text');
    if (/[^\d]/gi.test(char)) {
        return false;
    }
}
</script>
	<br>
	
	
	<script>
	function myLel() {
      var x = document.getElementById("sakma");
      if (x.style.display === "none") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }

</script>
	<br>
	<div id="sakma">
	
		<form class="chf">
			<input type="text" size="20" placeholder="Owner Name" required><br>
			<input type="text" id="expmonth" name="expmonth" placeholder="Month"><br>
			<input type="text" id="expyear" name="expyear" placeholder="2020"><br>
			<input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444"><br>
			<input type="text" id="cvv" name="cvv" placeholder="352"><br><br>
			<input type="submit" id="cps" onclick="alert('Your order was successful!')">
		</form>
	
		<div class="lil">
		<ul class="fix">
			<li><p>OWNER:</p></li>
			<li><p>MONTH:</p></li>
			<li><p>YEAR:</p></li>
			<li><p>CARD NUM:</p></li>
			<li><p>CVV:</p></li>
		</ul>
	</div>
	<br>
	<br>
</body>
</html>
