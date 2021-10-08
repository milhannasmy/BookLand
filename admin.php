<!DOCTYPE html>
<html>
<body>
	
	<style>
	body{
		background-color: #edeae5;
	}
	form{
		margin-left: 35%;
		border:solid #1f6521 2px;
		width: 25%;
		padding: 2%;
		margin-top: 80px;
		
	}
	input[type="text"]{
	font-family:Calibri, "Calibri Light";
	width: 70%;
	height: 40px;
	border: groove 0.5px;
	border-radius: 0;
	border-color: #1f6521;
}
	label{
		font-size: 15pt
	}
	h2{
		margin-left: 100px;
		font-size:30px;
	}
	table{
	margin-left: 10%;
	min-width: 35%;
	height: 30%;
	padding: 2px;
	border: solid #1f6521 2px;
	flex-basis: 50%;
	margin-top: 6%;
	
	}
	body{
		
	}
	.add{
		flex-basis: 70%;
	}
		
	.tables{
		display: flex;
	}
		#order-table{
			flex-basis: 50%;
			margin-right: 10%;
		}
</style>	
	
	
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
</head>
	<body>
		<div class="add">
<h2>Add Product</h2>

 <form action="admin.php" method="post" enctype="multipart/form-data">
  <label for="p-name">Book Name :</label><br>
  <input type="text" id="p-name" name="bname" ><br>
  <label for="brand">Stock :</label><br>
  <input type="text" id="brand" name="stock" ><br><br>
<label for="category">Genre :</label><br>
<input type="text" id="brand" name="type" ><br><br>
	  <label for="brand">Author Name :</label><br><br>
  <input type="text" id="brand" name="author" ><br><br>
	  <label for="brand">Description :</label><br>
  <input type="text" id="brand" name="description" ><br><br>
  <label for="brand">Price :</label><br>
  <input type="text" id="brand" name="price" ><br><br>
	<label for="image">Image :</label><br>
  <input type="file" name="fileImage" id="multiImage_file"  />
 <br><br>
  <input type="submit" name="btnSubmit" class="button" id="btnSubmit" value="Submit">
</form>  
</div>
	<?php 
	if(isset($_POST["btnSubmit"]))
	{
		$bName = $_POST["bname"];
		$stock = $_POST["stock"];
		$price = $_POST["price"];
		
		$genre = $_POST["type"];
		$price = $_POST["price"];
		$author = $_POST["author"];
		$description = $_POST["description"];
		
		
		
		$image = "uploads/".basename($_FILES["fileImage"]["name"]);
		move_uploaded_file($_FILES["fileImage"]["tmp_name"],$image);
		$con = 
			mysqli_connect("localhost","root","","bookland");
		if(!$con)
		{
			die("Sorry, Server is returning timeout");
		}
		
		$sql = "INSERT INTO `book` (`bookId`, `bookName`, `stock`, `author`, `genre`, `imagePath`, `price`, `description`) VALUES
		 (NULL, '".$bName."', '".$stock."', '".$author."', '".$genre."', '".$image."', '".$price."', '".$description."');";
		
			 
			mysqli_query($con,$sql);
		mysqli_close($con);
	header('Location:admin.php');
	
	}
	
	
	?>

<div class="tables">
		<table id="table" >
  <tr>
    <th>Name</th>
    
    <th>ID</th>
	<th>Stock</th>
	<th>Price</th>
	<th>Image</th>
	 <th>Actions</th
	
  </tr>
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
		
	
  <tr>
	 <td><?php echo $row['bookName']; ?></td>
    <td><?php echo $row['stock']; ?></td>
    <td><?php echo $row['author']; ?></td>
    <td><?php echo $row['genre']; ?></td>
	 <td><img src="<?php echo $row['imagePath']; ?> " width="50" height="50"></td>
	 
	 
  </tr><br>
 

		
					 
	                
	                <?php
					 
					 
				 }
			 }
	         
	               mysqli_close($con);
	
	              ?>
</table>
		
<table id="order-table" >
  <tr>
    <th>Order Id </th>
    
    <th>Payment</th>
	<th>Customer Email</th>
	<th>Book Id</th>
	<th>quantity</th>
	 
	
  </tr>
			<?php
	    
	        
			 $con=mysqli_connect("localhost","root","","bookland");
			 
			 if(!$con)    
			 {
				 die("Sorry ,Technical error ");
			 }
			 
			 $sql="SELECT * FROM `order`" ;
	
	         $result = mysqli_query($con,$sql);
	
	         if(mysqli_num_rows($result)>0)
			 {
				 while($row=mysqli_fetch_assoc($result))
				 {
					
					 ?>
		
	
  <tr>
	 <td><?php echo $row['orderId']; ?></td>
    <td><?php echo $row['payment']; ?></td>
    <td><?php echo $row['customerEmail']; ?></td>
    <td><?php echo $row['bookId']; ?></td>
	<td><?php echo $row['quantity']; ?></td>
	 
	 
	 
  </tr><br>
 

		
					 
	                
	                <?php
					 
					 
				 }
			 }
	         
	               mysqli_close($con);
	
	              ?>
</table>
			</div>
</body>
</html>
