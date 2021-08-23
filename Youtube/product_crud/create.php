<?php 

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=product','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

<<<<<<< HEAD
// echo "<pre>";
// var_dump ($_FILES['image']);
// echo "</pre>";

=======
echo "<pre>";
var_dump ($_FILES['image']);
echo "</pre>";
>>>>>>> 8eca87354798a4ea7bce39927ce485445e17c855
// $statement = $pdo->prepare('SELECT * FROM `product_crud` ORDER BY `crate_date` DESC');
// $statement->execute();
// $products = $statement->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// var_dump($_GET);
$errors=[];
<<<<<<< HEAD
$title = '';
$price = '';
$descriptiion = '';



if ($_SERVER['REQUEST_METHOD']=='POST') {
=======
$title = [];
$price = [];
$descriptiion = [];
if ($_SERVER['REQUEST_METHOD']=='POST') {
	
>>>>>>> 8eca87354798a4ea7bce39927ce485445e17c855

$title = $_POST['title'];
$descriptiion = $_POST['descriptiion'];
$price = $_POST['price'];
// $date = date("d-m-y h:i:s");
$date = $_POST['date'];
<<<<<<< HEAD
=======


>>>>>>> 8eca87354798a4ea7bce39927ce485445e17c855
if (!$title) {
	$errors[] = 'Title Required<br>';
}
if (!$price) {
	$errors[] = 'Price Required<br>';
}
<<<<<<< HEAD
// make images directory
if (!is_dir('images')) {
	mkdir('images');
}
if (empty($errors)) {
 $image = $_FILES['image'] ?? null;
 $imagePath='';
 if($image && $image['tmp_name']){
 	$imagePath = 'images/'.randomString(8).'/'.$image['name'];
 	mkdir(dirname($imagePath));
 	move_uploaded_file($image['tmp_name'],$imagePath);
 }
  
=======
if (empty($errors)) {
>>>>>>> 8eca87354798a4ea7bce39927ce485445e17c855


$statement =$pdo->prepare("INSERT INTO `product_crud` ( `Title`, `descriptiion`, `image`, `price`, `crate_date`) VALUES (:title,:descriptiion,:image,:price,:date)");
$statement->bindValue(':title',$title);
<<<<<<< HEAD
$statement->bindValue(':image',$imagePath);
=======
$statement->bindValue(':image','');
>>>>>>> 8eca87354798a4ea7bce39927ce485445e17c855
$statement->bindValue(':descriptiion',$descriptiion);
$statement->bindValue(':price',$price);
$statement->bindValue(':date',$date);
$statement->execute();
<<<<<<< HEAD
header('location: product.php');
}
}


function randomString($n){
	$characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$str = '';
	for ($i= 0; $i<$n; $i++){
		$index = rand(0,strlen($characters)-1);
		$str .= $characters[$index];
	}
	return $str;
}
 ?>

=======
}
}
 ?>


>>>>>>> 8eca87354798a4ea7bce39927ce485445e17c855
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">  
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
	<title>Crate Product</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
=======
	<title>Create Product </title>
>>>>>>> 8eca87354798a4ea7bce39927ce485445e17c855
</head>
<body>
<?php if (!empty($errors)):?>
	<?php foreach ($errors as  $error):?>
		<?php echo $error ?>
	<?php endforeach; ?>
<?php endif; ?>

<<<<<<< HEAD
	


<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h3>Create Product </h3>
			<form action="" method="post" enctype="multipart/form-data">
			<div class="form-floating mb-3">
  				<input type="text" name="title" value="<?php echo $title ?>" placeholder="title here" class="form-control" >
  				<label >Enter Your Product Title</label>
			</div>
			<div class="form-floating mb-3">
			  <textarea class="form-control" name="descriptiion" placeholder="Leave a comment here" id="floatingTextarea"> <?php echo $descriptiion; ?> </textarea>
			  <label for="floatingTextarea">Product Description</label>
			</div>
			<div class="mb-3">
			  <label for="formFile" class="form-label">Upload Your Image </label>
			  <input class="form-control" name="image" type="file" id="formFile">
			</div>

			<div class="form-floating mb-3">
				  <input type="number" name="price" step=".01" class="form-control"  placeholder="Price Please">
				  <label >Product Price</label>
			</div>
			<div class="form-floating mb-3">
				  <input type="date"  class="form-control" name="date"  >
			</div>
			<div class="form-floating mb-3">
				  <input type="submit"  class="form-control btn btn-outline-primary text-center" value="SUBMIT"  >
			</div>
			</form>
		</div>
	</div>
</div>
=======
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
>>>>>>> 8eca87354798a4ea7bce39927ce485445e17c855
	
</body>
</html>