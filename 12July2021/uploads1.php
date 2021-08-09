<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		if(isset($_POST['submit'])){

		$path = "uploads/";
		$errors = array();
		  $name = $_FILES['myfile']['name'];
		  $tmp= $_FILES['myfile']['tmp_name'];
		  $size= $_FILES['myfile']['size'];
		
		  if($size>50){
		  	$errors[] = "You are not allowed to upload more than 50KB";
		  }	

		  if(count($errors)>0){
				foreach($errors as $error){
					echo $error . "<br>";
				}

			} else {
				if(move_uploaded_file($tmp, $path.$name)){
					echo "Uploaded successfully";
				}
			}

		}

	 ?>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="myfile"><br>
		<input type="submit" name="submit" value="UPLOAD">
	</form>
	
</body>
</html>