<?php 
	require_once ("db_config.php");
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
 <?php 
 		$sql = "SELECT sku, name, price FROM products";
 		$result = $mysqli->query($sql);

 		//print_r($result);
 		//echo "<pre>";
 		//print_r($result->fetch_assoc());
 		
 		// while($row = $result->fetch_assoc()){
 		// 	echo $row['sku']. "<br>";

 		// }

 		// while(list($sku, $name, $price) = $result->fetch_row()){
 		// 	echo "SKU: ". $sku. " Name: " . $name . " Price: " . $price . "<br>";
 		// }
 		?>


 		<table border="1">
 			<tr>
 				<th>SKU</th>
 				<th>Product Name</th>
 				<th>Price</th>
 				<th>Action</th>
 			</tr>
 <?php		
 		while($row = $result->fetch_object()){ ?>
 			<tr>
 				<td><?php echo  $row->sku; ?></td>
 				<td><?php echo  $row->name; ?></td>
 				<td><?php echo  $row->price; ?></td>
 				<td>
 				<a onclick="return confirm('Are you sure to delete')" href="product_delete.php?sku=<?php echo  $row->sku; ?>"><img src="bin.jpg" alt="" height="30" width="30"></a> | <a href="product_edit.php?sku=<?php echo  $row->sku; ?>"><img src="pencil.jpg" alt="" height="30" width="30"></a>	</td>
 			</tr>
<?php } ?>
 		</table>
 		<?php echo "Total ".  $result->num_rows . " products available"; ?>

<?php
 		$mysqli->close();
  ?>
<br><br>
  <a href="product_entry.php">New Product</a>
 	
 </body>
 </html>