<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Malti Lnaguage </title>
</head>
<body>
<?php
// if (isset($_FILES['homework'])) {
// }
	echo "<pre>";
	print_r($_FILES);
		$name = $_FILES['myfile']['name'];
		echo "<br>";
		$tmp = $_FILES['myfile']['tmp_name'];
		echo "<br>";
		$path = "Upload/";
		move_uploaded_file($tmp, $path.$name);
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data"method="post">
<label form="name">Name:</label><br>
<input type="text" name="name" value=""><br>
<label form="email">Email:</label><br>
<input type="text" name="email" value=""><br>
<label form="homework">Class notes:</label>
<input type="file" name="myfile" value=""><br>
<input type="submit" name="submit" value="Submit Homework">
</form>
</body>
</html>

