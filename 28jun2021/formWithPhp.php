<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head> 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['FullName'];
  $email = $_REQUEST['Email'];
  $gender = $_REQUEST['Gender'];
  $dis = $_REQUEST['district'];
  echo "Hello ". $name . "<br>". "Your Email is ". $email ."<br>"."and you are " .$gender ."<br>"." and you are form ".$dis;
 
}

?>



<body>
	<form action="" method="post">
		<label for="FullName"> Enter your Full name</label>
		<input type="text" name="FullName"> <br>
		<label for="Email"> Enter your Email</label>
		<input type="Email" name="Email"> <br>
		<input type="radio" value="male" name="Gender"> Male <br>
		<input type="radio" value="Female" name="Gender"> Female <br>
		<select name="district" id="">
	 <?php    
        $products = array("Dhaka", "Noakhali", "Khulna", "Barishal", "Ctg");
       // Iterating through the product array
        foreach($products as $item){
            echo "<option value=$item>$item</option>";
        }
        ?>
		</select>
		<input type="submit" name="submit">
	</form>
</body>
</html>
