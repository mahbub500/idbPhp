<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style >
	li{
		font-weight: bold;
		color: red;
	}
	div	{
		padding: 15px;
		border: 1px red solid black;
		margin-top: 5px;
		width: 300px;
	}
	  </style>
</head>
<body>
	<?php 
		if(isset($_POST['submit'])){
		  	$n = $_POST['name'];
			$e = $_POST['email'];
			$m = $_POST['message'];
			$m = strip_tags($m);
			$m = htmlentities($m, ENT_QUOTES);
			
			$errors = array();
			if($n==NULL){
				$errors[] = "You have to enter a name first<br>";
			} 

			if(empty($e)){
				$errors[] = "You have to enter an email<br>";
			} else {
					if(!filter_var($e, FILTER_VALIDATE_EMAIL)){
					$errors[] = "Your Email is invalid<br>";
				} 
			}

			if($m==""){
				$errors[] = "You have to enter message<br>";
			} 
			if(count($errors)>0){
				// all errors display
				echo "<ul>";
				foreach($errors as $error){
					echo "<li><b>$error</b></li>" ;
				}echo "</ul>";
			} else {
				echo "Name : $n<br>";
				echo "Email : $e<br>";
				echo "Messege : $m<br>";
			}	

		}
	 ?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="text" name="name" value="<?php if(isset($_POST['name'])){ echo $_POST['name']; } ?>"><br>
		<input type="text" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>"><br>
		<textarea name="message" cols="30" rows="10"><?php if(isset($_POST['message'])){ echo $_POST['message']; } ?></textarea><br>
		<input type="submit" name="submit" value="SEND">
	</form>
	
</body>
</html>