<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Log In </title>
</head>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        extract($_POST);
      
        if((strlen($UserName)>=4 && strlen($UserName)<=8)) {
           /* echo "<h3>Unser validated</h3>";*/
        } else {
            echo "<h3>User Name must be minimun 4 and maximum 8 character long </h3>";
        }
     
        if(filter_var($email, FILTER_VALIDATE_EMAIL)==true){
            // echo "<h3 class='valid'>$email valided</h3>";
            echo "<h3 >All Data Validated</h3>";
        } else {
            echo "<h3 class='invalid'>You have put an invalid Email address</h3>";    
        }
    }
?>  
<body>
	<form action="" method="post">
		<label for="User Name"> User Name </label>
		<input type="text" value=" " name="UserName"> <br>
		<label for="Email"> Enter Your Email </label>
		<input type="text" name="email">
		<input type="submit" value="Submit">
	</form>
</body>
</html>