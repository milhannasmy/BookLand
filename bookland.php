<?php session_start();?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BookLand</title>
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
				<h1>Books Are A Uniquely<br>Portable Magic!</h1>
				<p>To acquire the habit of reading is to construct for yourself a refuge<br>from almost all the miseries of life.</p>
				<a href="books.php" class="btn">Explore Now &#8594;</a>
			</div>
			<div class="col-2">
				<img src="Images/Up Last.png">
			</div>
		</div>
	</div>
</div>
	

<!------------------featured categories-------------------->
	
	<div class="categories">
		<div class="small-container">
			<div class="row">
				<?php
	    
	        
			 $con=mysqli_connect("localhost","root","","bookland");
			 
			 if(!$con)    
			 {
				 die("Sorry ,Technical error ");
			 }
			 
			 $sql="SELECT * FROM `book` limit 3" ;
	
	         $result = mysqli_query($con,$sql);
	
	         if(mysqli_num_rows($result)>0)
			 {
				 while($row=mysqli_fetch_assoc($result))
				 {
					
					 ?>
			
		
				<div class="col-3">
					<a href="book-details.php?id=<?php echo $row['bookId']?>"><img src="<?php echo $row['imagePath']; ?>"></a>
				</div>
					<?php
					 
					 
					}
				}
				
					  mysqli_close($con);
	   
					 ?>
			
			</div>
		</div>

	</div>
	
<!-----------------------offer------------------------->

	<div class="offer">
		<div class="small-container">
			<div class="row">
				<?php
	    
	        
			 $con=mysqli_connect("localhost","root","","bookland");
			 
			 if(!$con)    
			 {
				 die("Sorry ,Technical error ");
			 }
			 
			 $sql="SELECT * FROM `book` WHERE bookName = 'Oxford Dictionary'" ;
	
	         $result = mysqli_query($con,$sql);
	
	         if(mysqli_num_rows($result)>0)
			 {
				 while($row=mysqli_fetch_assoc($result))
				 {
					
					 ?>
			
				<div class="col-2">
					<img src="<?php echo $row['imagePath'] ?>" class="offer-img">
				</div>
				<div class="col-2">
					<p>Exclusively avaible on Book Land</p>
					<h1>Oxford Dictionary</h1>
					<small>The new 8th edition of Oxford Dictionary comes up with the 
					new style and look with the compatible design.<br></small>
					<a href="book-details.php?id=<?php echo $row['bookId'] ?>" class="btn">Buy Now &#8594;</a>
				</div>
			</div>
		</div>
	</div>
		<?php
					 
					 
					}
				}
				
					  mysqli_close($con);
	   
					 ?>
<!--------------------featured products---------------------->
	
	<div class="small-container"><br>
		<h2 class="title">Featured Products</h2>
		<div class="row">
			<div class="col-4">
				<a href="book-details.html"><img src="Images/Book Cover.jpg"></a>
				<a href="book-details.html"><h4>Sherlock Holmes</h4></a>
				<p>$50.00</p>
			</div>
			
			<div class="col-4">
				<img src="Images/Book Cover.jpg">
				<h4>Sherlock Holmes</h4>
				<p>$50.00</p>
			</div>
			
			<div class="col-4">
				<img src="Images/Book Cover.jpg">
				<h4>Sherlock Holmes</h4>
				<p>$50.00</p>
			</div>
			
			<div class="col-4">
				<img src="Images/Book Cover.jpg">
				<h4>Sherlock Holmes</h4>
				<p>$50.00</p>
			</div>
		</div>
		
	
		<h2 class="title">Latest Products</h2>
			<div class="row">
			<div class="col-4">
				<img src="Images/Book Cover.jpg">
				<h4>Sherlock Holmes</h4>
				<p>$50.00</p>
			</div>
			
			<div class="col-4">
				<img src="Images/Book Cover.jpg">
				<h4>Sherlock Holmes</h4>
				<p>$50.00</p>
			</div>
			
			<div class="col-4">
				<img src="Images/Book Cover.jpg">
				<h4>Sherlock Holmes</h4>
				<p>$50.00</p>
			</div>
			
			<div class="col-4">
				<img src="Images/Book Cover.jpg">
				<h4>Sherlock Holmes</h4>
				<p>$50.00</p>
			</div>
		</div>
			<div class="row">
			<div class="col-4">
				<img src="Images/Book Cover.jpg">
				<h4>Sherlock Holmes</h4>
				<p>$50.00</p>
			</div>
			
			<div class="col-4">
				<img src="Images/Book Cover.jpg">
				<h4>Sherlock Holmes</h4>
				<p>$50.00</p>
			</div>
			
			<div class="col-4">
				<img src="Images/Book Cover.jpg">
				<h4>Sherlock Holmes</h4>
				<p>$50.00</p>
			</div>
			
			<div class="col-4">
				<img src="Images/Book Cover.jpg">
				<h4>Sherlock Holmes</h4>
				<p>$50.00</p>
			</div>
		</div>
	</div>
	
	
	
<!-----------------------brands--------------------------->
	
	<div class="brands">
		<div class="small-container">
			<div class="row">
				<div class="col-5">
					
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
