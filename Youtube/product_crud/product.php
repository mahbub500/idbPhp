<?php 

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=product','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement = $pdo->prepare('SELECT * FROM `product_crud` ORDER BY `crate_date` DESC');
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
// var_dump($products);
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">  
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<table border="1">
	
	<tr >
		<th>ID </th>
		<th>Title </th>
		<th>Description </th>
		<th>Image </th>
		<th>Price </th>
		<th>Crete Date </th>
		<th colspan="3">Create or Edit or Delete </th>
	</tr>
	

	<?php 
	foreach($products as $i => $product ){ ?>
	<tr>
	<td> <?php echo $i + 1 ; ?> </td>
	<td> <?php echo $product['Title']; ?> </td>
	<td> <?php echo $product['descriptiion']; ?> </td>
	<td> <?php echo $product['image']; ?> </td>
	<td> <?php echo $product['price']; ?> </td>
	<td> <?php echo $product['crate_date']; ?> </td>
	<td>
		<a href="create.php"> <button>Create Product</button></a>
		
		<button>Edit</button>
		<button>Delete</button>
	</td>
	
	</tr>

<?php  	}
?>
	
</table>


<hr> <br>
 <br>
 <br>
<br>


	<form action="">
	<input type="text" name="title" placeholder="title here"><br>
	<input type="text" placeholder="description here" name="descriptiion"><br>
	<input type="file" name="image"><br>
	<input type="text" placeholder="price here" name="price"><br>
	<input type="date"  name="date"><br>
	<input type="submit"  name="date" value="SUBMIT"><br>
	</form>
	
</body>
</html>