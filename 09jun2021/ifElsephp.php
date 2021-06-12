<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>If Elase</title>
</head>
<body>
	<?php
	// print_r($_POST); 

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

	if ($_POST['MCQ'] >= 80 && $_POST ['EVD'] >= 20) {
		echo "Congratulations ";
	}else{
		echo "You Are Fail ";
	}
}
	 ?>
	<form action="" method="post">
		<input type="text" name="MCQ" placeholder="Enter Your MCQ Marks"> <br>
		<input type="text" name="EVD" placeholder="Enter Your EVIDENCEW Marks"> <br>
		<input type="submit" value="CHECK">
	</form>
</body>
</html>