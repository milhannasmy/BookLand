<?php session_start();

if(!isset($_SESSION["userName"]))
{
	header('Location:account.php');
}?>
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
	
	</div>

	


	
	<div class="small-container">
		
		<div class="row row-2">
			<h2>All Books</h2>
			<select>
				<option>Default sorting</option>
				<option>Sort by price</option>
				<option>Sort by popularity</option>
				<option>Sort by rating</option>
				<option>Sort by sale</option>
			</select>
		</div>
		
		<div class="row">
		<?php
	    
	        
			 $con=mysqli_connect("localhost","root","","bookland");
			 
			 if(!$con)    
			 {
				 die("Sorry ,Technical error ");
			 }
			 
			 $sql="SELECT * FROM `book`" ;
	
	         $result = mysqli_query($con,$sql);
	
	         if(mysqli_num_rows($result)>0)
			 {
				 while($row=mysqli_fetch_assoc($result))
				 {
					
					 ?>
			<div class="col-4">
				<a href="book-details.php?id=<?php echo $row['bookId'];?>"><img src="<?php echo $row['imagePath']; ?>"></a>
				<h4><?php echo $row['bookName']; ?></h4>
				<p><?php echo $row['price']; ?> Rs</p>
			</div>
			<?php
					 
					 
					}
				}
				
					  mysqli_close($con);
	   
					 ?>
			
	
		</div>
		
		<div class="page-btn">
			<span>1</span>
			<span>2</span>
			<span>3</span>
			<span>4</span>
			<span>&#8594;</span>
		</div>
		
		<br>
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
