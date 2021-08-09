<?php 
require_once('Connection.php');

$sku = $_GET['id'];

$sql = "DELETE FROM products WHERE sku='$sku'";
$mysqli->query($sql);
header("Location:products.php");
 ?>



