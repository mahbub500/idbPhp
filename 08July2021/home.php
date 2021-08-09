<?php 
session_start();
if (!$_SESSION['email'] ) {
	header("LOcation:login.php");
}
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	echo " Your email is ". $_SESSION['email'];
	 ?>
	<h1> Welcome To home page</h1>
	<a href= 'login.php'> Go To Home</a>
	
	<a href= 'logOut.php'> Log Out</a>
</body>
</html>