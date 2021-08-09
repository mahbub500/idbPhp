<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Entry Form</title>
</head>
<body>
	<h2>Entry Form</h2>
<?php  
	if(isset($_POST['submit'])){
		extract($_POST);
		require_once ("db_config.php");

		$sql = "INSERT INTO products (`id`, `name`, `father_name`, `mother_name`, `gender`, `nid`, `email`, `ssc`, `hsc`, `honours`, `masters`)  VALUES('$sku', '$pr_name', '$pr_price')";
		$result = $mysqli->query($sql);
		$data = $mysqli->affected_rows;
		if($data){
			echo "Successfully Product inserted<br>";
		}
	}

?>


	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		<input type="text" name="sku" placeholder="Enter SKU"><br>
		<input type="text" name="pr_name" placeholder="Enter Product name"><br>
		<input type="text" name="pr_price" placeholder="Price"><br>
		<input type="submit" name="submit" value="SEND">
		
	</form>
	<br><br>
	<a href="products.php">Product List</a>
	
</body>
</html>