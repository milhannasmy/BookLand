<?php session_start();

if(!isset($_SESSION["userName"]))
{
	header('Location:account.php');
}

?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cart</title>
	<link rel="stylesheet" href="booklandstyle.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	
<div class="header">
	<div class="container">
	<div class="navbar">
		<div class="logo">
			<a href="bookland.php"><img src="Images/BookLand - Logo (Black).png" width="125px"></a>
		</div>
		
		<nav>
			<ul id="MenuItems">
				<li><a href="bookland.php">Home</a></li>
				<li><a href="books.php">Books</a></li>
				<li><a href="about-us.php">About</a></li>
				<li><a href="account.php">Account</a></li>
			<?php if(isset($_SESSION["userName"])){ ?><li><a href="logout.php">Logout</a></li> <?php } ?>
			</ul>
		</nav>
			<a href="cart.php"><img src="Images/cart.png" width="30px" height="30px"></a>
			<img src="Images/menu.png" class="menu-icon" onclick="menutoggle()">
		</div>
	
	</div>
</div>


<!-----------------------cart items details--------------------------->
	

<div class="small-container cart-page">
	<table>
		<tr>
			<th>Product</th>
			<th>Quantity</th>
			<th>Subtotal</th>
		</tr>
		<tr>
			<td>
				<div class="cart-info">
					<img src="Images/Book Cover.jpg">
					<div>
						<p>Sherlock Holmes</p>
						<small>Price: $50.00</small>
						<br>
						<a href="">Remove</a>
					</div>
				</div>	
			</td>
			<td><input type="number" value="1"></td>
			<td>$50.00</td>
		</tr>
		<tr>
			<td>
				<div class="cart-info">
					<img src="Images/Book Cover.jpg">
					<div>
						<p>Sherlock Holmes</p>
						<small>Price: $50.00</small>
						<br>
						<a href="">Remove</a>
					</div>
				</div>	
			</td>
			<td><input type="number" value="1"></td>
			<td>$50.00</td>
		</tr>
		<tr>
			<td>
				<div class="cart-info">
					<img src="Images/Book Cover.jpg">
					<div>
						<p>Sherlock Holmes</p>
						<small>Price: $50.00</small>
						<br>
						<a href="">Remove</a>
					</div>
				</div>	
			</td>
			<td><input type="number" value="1"></td>
			<td>$50.00</td>
		</tr>
	</table>	
	
	<div class="total-price">
		<table>
			<tr>
				<td>Subtotal</td>
				<td>$150.00</td>
			</tr>
			<tr>
				<td>Tax</td>
				<td>$25.00</td>
			</tr>
				<td>Total</td>
				<td>$175.00</td>
			<tr>
				
			</tr>
		</table>
	</div>
</div>
	

	


<!-----------------------footer--------------------------->
	
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-2">
					<img src="Images/BookLand - Logo (White).png">
					<p>Our Purpose Is To Sustainably Make the Pleasure and
						<br>Benifits of Books to the Many.</p>
				</div>
				
		
			</div>
			<hr>
			<p class="copyright">Copyright 2021 - Book Land</p>
		</div>
	</div>
	
	
<!-----------------------js for toggle menu--------------------------->
	
	<script>
		var MenuItems = document.getElementById("MenuItems");
		MenuItems.style.maxHeight= "0px";
		
			
		function menutoggle(){
			if(MenuItems.style.maxHeight == "0px")
				{
					MenuItems.style.maxHeight = "200px";
				}
			else
				{
					MenuItems.style.maxHeight = "0px";
				}
		} 
		
	</script>


</body>
</html>
