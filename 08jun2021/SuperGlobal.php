<?php 

echo "<pre>";

// print_r($_GET);
echo $_GET['name'];



 ?>
 <a href="SuperGlobal.php?name='Mahbub'&age='20'"> Click Here</a>


 <form action="" method="POST">
 	<label for="country"> Enter Your Country</label>
 	<input type="text" name="country" placeholder="Country" > <br>
 	<label for="city"> Enter Your City</label>
 	<input type="text" name="city" placeholder="City" > <br>
 	<input type="submit" value="SUBMIT">
 </form>