<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Subscribe</title>
</head>
<body>
	<?php
	echo "<pre>";
	print_r($_FILES); 

	 ?>
	
	<h2>File Upload</h2>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" style="margin-top: 10px;" name="MyFile" placeholder="Enter Full Name"> <br>
		<input type="submit" style="margin-top: 10px;" name="submit" value="Upload" > <br>

 	</form>
</body>
</html>