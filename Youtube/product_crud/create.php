<?php 

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=product','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "<pre>";
var_dump ($_FILES['image']);
echo "</pre>";
// $statement = $pdo->prepare('SELECT * FROM `product_crud` ORDER BY `crate_date` DESC');
// $statement->execute();
// $products = $statement->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// var_dump($_GET);
$errors=[];
$title = [];
$price = [];
$descriptiion = [];
if ($_SERVER['REQUEST_METHOD']=='POST') {
	

$title = $_POST['title'];
$descriptiion = $_POST['descriptiion'];
$price = $_POST['price'];
// $date = date("d-m-y h:i:s");
$date = $_POST['date'];


if (!$title) {
	$errors[] = 'Title Required<br>';
}
if (!$price) {
	$errors[] = 'Price Required<br>';
}
if (empty($errors)) {


$statement =$pdo->prepare("INSERT INTO `product_crud` ( `Title`, `descriptiion`, `image`, `price`, `crate_date`) VALUES (:title,:descriptiion,:image,:price,:date)");
$statement->bindValue(':title',$title);
$statement->bindValue(':image','');
$statement->bindValue(':descriptiion',$descriptiion);
$statement->bindValue(':price',$price);
$statement->bindValue(':date',$date);
$statement->execute();
}
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">  
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create Product </title>
</head>
<body>
<?php if (!empty($errors)):?>
	<?php foreach ($errors as  $error):?>
		<?php echo $error ?>
	<?php endforeach; ?>
<?php endif; ?>

	<h3>Create Product </h3>

<form action="" method="post" enctype="multipart/form-data">
	<input type="text" name="title" value="<?php echo $title ?>" placeholder="title here"><br>
	<textarea name="descriptiion"  id="" cols="10" rows="10"><?php echo $descriptiion ?></textarea> <br>
	<!-- <input type="text" placeholder="description here" name="descriptiion"><br> -->
	<input type="file" name="image"><br>
	<input type="text" step=".01" value="<?php echo $price ?>" placeholder="price here" name="price"><br>
	<input type="date"  name="date"><br>
	<input type="submit"  > <br>
</form>
	
</body>
</html>