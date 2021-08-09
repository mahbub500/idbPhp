<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Entry Form</title>
</head>
<body>
	<h2>Product Edit Form</h2>
<?php  
	
		$sku = $_REQUEST['sku'];
		require_once ("db_config.php");
		$sql = "SELECT * FROM products WHERE sku='$sku'";
		$result = $mysqli->query($sql);
		$row = $result->fetch_assoc();

	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		extract($_POST);

		 $sql = "UPDATE products SET name='$pr_name', price='$pr_price' WHERE sku='$sku'";
		 $result = $mysqli->query($sql);
		 $data = $mysqli->affected_rows;
		 var_dump($data);
		 if($data){
			echo "Successfully Product UPdated<br>";
		}
	}

?>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		<input type="text" name="sku" value="<?php echo $row['sku'] ?>" placeholder="Enter SKU"><br>
		<input type="text" name="pr_name" value="<?php echo $row['name'] ?>" placeholder="Enter Product name"><br>
		<input type="text" name="pr_price" value="<?php 
			if(isset($_POST['pr_price'])){echo $_POST['pr_price'];} else { 
					echo $row['price'];} 
		?>" 
		placeholder="Price"><br>
		<input type="submit" name="update" value="UPDATE">
		
	</form>
	<br><br>
	<a href="products.php">Product List</a>
	
</body>
</html>