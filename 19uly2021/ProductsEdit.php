<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Product</title>
</head>
<body>
	<?php 
	if ($_SERVER['REQUEST_METHOD']== 'GET') {
		$id = $_GET['id'];		
	require_once("Connection.php");
	$sql= "SELECT * FROM products WHERE id='$id'";
	$result = $mysqli->query($sql);
	$row = $result->fetch_assoc();
}

if (isset($_POST['submit'])) {
		 extract($_POST);
		var_dump($_POST);
	require_once("Connection.php");
	$sql= "UPDATE products SET name=$name, price=$price WHERE ID= $id ";
	$mysqli->query($sql);
	// header("Location:products.php");
	}

	 ?>
	<h3>Product Entery Form</h3>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" >
		<label for="sku"> Enter Product sku </label> 
		<input type="text" value="<?php echo $row['sku'] ?>" name="sku"> <br>
		<label for="product"> Enter Product name </label> 
		<input type="text"  value="<?php echo $row['name'] ?>" name="product"><br>
		<label for="Price"> Enter Product Price </label> 
		<input type="number"  value="<?php echo $row['price'] ?>" name="Price"><br>
		<input type="submit"  name="submit" value=" Update">
	</form>
</body>
</html>