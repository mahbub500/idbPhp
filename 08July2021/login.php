

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		$email = "admin@gmail.com";
		$password = "123456";
		 extract($_POST);
		 if ($email == $yemail && $password == $ypass) {
		 	echo "You are log in ";
		 	session_start();
			 $_SESSION['email'] = $yemail;
			 echo "Your Email and password are matched <br>";
			 echo "<a href= 'home.php'> Go To Home</a>";
		
		 }else{

		 	echo "Wrong Email of PssWord";
		 }

	}
	 ?>
	<h2>Login form</h2>
	<form ction="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="text" name="yemail" placeholder="Email"><br>
		<input type="password" name="ypass" placeholder="password"><br>
		<input type="submit" name="SUBMIT" value="LOGIN"><br>
	</form>
</body>
</html>