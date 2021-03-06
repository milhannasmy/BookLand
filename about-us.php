<?php session_start();?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Books - BookLand</title>
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
		<div class="row">
			<div class="col-2">
				<h1>Love Books?<br>We can help you!</h1>
				<p>As distributors it was our fantasy to open a bookshop that comprehended workmanship and showed books enough to commit a whole space to the class, to make an environment as excellent, tricking and smooth as the books it would house, and to start a development with regards to the energizing a wide margin the nation was making in plan. After eight years we believe we have succeeded.<br>
					<br>
				In these attempting times when books are vying for your consideration, cash and time, and when bookshops are surrendering to the extreme weight set on them,’Book Land’ has figured out how to develop to 8 looks around the nation, because of you, dear readers. We have manufactured vital associations to remove books from customary spaces, tied up with notorious way of life stores.<br>
					<br>
				In any case, at the center of ‘Book Land’ is a profound love for books, particularly craftsmanship and outlined books that are storehouses of legacy, style, structure, workmanship, cooking, way of life, photography thus substantially more.<br>
					<br>
				As we came and saw your eagerness for the books we were loading, we were urged to extend our vision, include eccentric extras, stationery and even furnishings <br><br>
					
				Today ‘Book Land’ is synonymous with a specific tasteful and has solidly settled itself as the home of workmanship and showed books in the nation. We presently add a virtual area to the bookstore – an online bookshop where you can purchase books. Much thanks to you for being a piece of this adventure.
					<br><br>
			</div>
			<div class="col-2">
				<img src="Images/Up Last.png">
			</div>
		</div>
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
	
		</body>
</html>