<?php session_start();?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Account</title>
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


<!-----------------------account-page--------------------------->
	
	
	
	<div class="account-page">
		<div class="container">
			<div class="row">
				<div class="col-2">
					<img src="Images/Up Last.png" width="100%">
				</div>
				<div class="col-2">
					<div class="form-container">
						<div class="form-btn">
							<span onclick="login()">Login</span>
							<span onclick="register()">Register</span>
							<hr id="Indicator">
						</div>
						
						<form action="account.php" method="POST" id="LoginForm">
							<input type="text" placeholder="Email" name="email1">
							<input type="password" placeholder="Password" name="password1">
							<button type="submit" class="btn" name="loginSubmit">Login</button>
							<a href="">Forgot Password</a>
						</form>
						
						<form action="account.php" method="POST" id="RegForm">
							<input type="text" placeholder="Username" name="username">
							<input type="email" placeholder="Email" name="email">
							<input type="password" placeholder="Password" name="password">
							<button type="submit" class="btn" name="regSubmit">Register</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	
	</div>
    <?php 
	if(isset($_POST["regSubmit"]))
	{
		$userName = $_POST["username"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		
		$con = 
			mysqli_connect("localhost","root","","bookland");
		if(!$con)
		{
			die("Sorry, Technical Issue");
		}
		$sql = "INSERT INTO `customer` (`customerId`, `username`, `email`, `password`) VALUES (NULL, '".$userName."', '".$email."', '".$password."');";
			mysqli_query($con,$sql);
            header('Location:account.php');
		mysqli_close($con);
	
	
	
	}
	
	?>
	<?php
	if(isset($_POST["loginSubmit"]))
	{
		$userName1 = $_POST["email1"];
		$password1 = $_POST["password1"];
		
		$con = 
			mysqli_connect("localhost","root","","bookland");
		if(!$con){
			die("Sorry Error");
		}
		$sql="SELECT * FROM `customer` WHERE `email` = '".$userName1."' and `password` = '".$password1."';";
		$results = mysqli_query($con,$sql);
		
		if(mysqli_num_rows($results)>0)
		  
		{
			$_SESSION["userName"] = $userName1;	
			
			header('Location:bookland.php');
		
		}
		else{
			echo "Please enter correct password";  
		}
		
			
		mysqli_close($con);
	
	}
	?>
	


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
	
<!-----------------------js for toggle form--------------------------->
	
	<script>
		var LoginForm = document.getElementById("LoginForm");
		var RegForm = document.getElementById("RegForm");
		var Indicator = document.getElementById("Indicator");
		
			function register(){
				RegForm.style.transform = "translateX(0px)";
				LoginForm.style.transform = "translateX(0px)";
				Indicator.style.transform = "translateX(100px)";
			}
		
			function login(){
				RegForm.style.transform = "translateX(300px)";
				LoginForm.style.transform = "translateX(300px)";
				Indicator.style.transform = "translateX(0px)";
			}
	</script>


</body>
</html>
