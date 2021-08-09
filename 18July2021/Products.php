<?php 
require_once('Connection.php');

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Product List</title>
 </head>
 <body>
 	<?php 
 	$sql =	"SELECT sku, name, price FROM products";
 	$result =	$mysqli->query($sql);
 	echo "<pre>";
 	print_r($result);
 	print_r($result->fetch_array());
 	print_r($result->fetch_assoc());
 	print_r($result->fetch_row());
 	?>
 	<table border="1">
 		<tr>
 			<th>SKU</th>
 			<th>Name</th>
 			<th>Price</th>
 			<th colspan="2">Action Button</th>
 		</tr>
 	
<?php
foreach ($result as  $value) {?>
<tr>
	<td> <?php echo $value['sku'] ?></td>
	<td> <?php echo $value['name'] ?></td>
	<td> <?php echo $value['price'] ?></td>
	<td> <a href="ProductsDelete.php?sku=<?php echo$value['sku']?>"> <button> Delete</button></a> </td>
	<td> <button> Edit</button> </td>
	
</tr>
	
<?php }
?>
</table>
 <?php	 $mysqli->close();
 	 ?>

			
		
 </body>
 </html>
