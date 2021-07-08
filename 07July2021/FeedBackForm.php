<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Feed Back Form</title>
</head>
<body>
	<?php 
if (isset($_POST['submit'])) {
	$name =$_POST['FullName'];
	$email =$_POST['email'];
	$message =$_POST['message'];
	$message = htmlentities($message,ENT_QUOTES);
	$email = strip_tags($email);

	if (empty($name)) {
	echo die("Name Must Be Need <br>");
	}else{
	echo "Your Nmae is $name <br>";

	}
	if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		echo " Your Email is invalid <br>";
	}else{
		echo " Your Email is $email <br>";

	}
	
	echo "Your message is : $message <br>";
}
 ?>
	<form action=" <?php echo $_SERVER['PHP_SELF'] ?>" method="post" >
		<label for="FullName">Emter your Name</label>
		<input type="text" name="FullName"><br>
		<label for="email">Emter your Email</label>
		<input type="text" name="email"><br>
		<label for="message">Emter your FeedBack</label>
		<textarea name="message" cols="30" rows="10"></textarea><br>
		<input type="submit" name="submit" value="Send">
	</form>
</body>
</html>

