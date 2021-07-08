<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Malti Lnaguage </title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
	 extract($_POST);
	echo $name. "<br>"; 
	echo $email. "<br>";
	foreach($languages as $language){
	echo $language . "<br>";
	} 
	if (isset($database)) {
		print_r($database);
	}
}
?>
<form action="uploadmanager.html" enctype="multipart/form-data"
method="post">
<label form="name">Name:</label><br>
<input type="text" name="name" value=""><br>
<label form="email">Email:</label><br>
<input type="text" name="email" value=""><br>
<label form="homework">Class notes:</label>
<input type="file" name="homework" value=""><br>
<input type="submit" name="submit" value="Submit Homework">
</form>
</body>
</html>

