<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Product</title>
</head>
<body>
	<?php 
	if (isset($_POST['submit'])) {
		 extract($_POST);
		
	require_once("Connection.php");
	$sql= "INSERT INTO products VALUES ('','$sku', '$product', '$Price')";
	$mysqli->query($sql);
	header("Location:products.php");
	}

	 ?>
	<h3>Product Entery Form</h3>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" >
		<label for="sku"> Enter Product sku </label> 
		<input type="text" name="sku"> <br>
		<label for="product"> Enter Product name </label> 
		<input type="text" name="product"><br>
		<label for="Price"> Enter Product Price </label> 
		<input type="number" name="Price"><br>
		<input type="submit" name="submit" value=" Submit">
	</form>
</body>
</html>