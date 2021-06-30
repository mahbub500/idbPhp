<form action="" method="post">
	<label for="FullName">Enter Your Name</label>
	<input type="text" name="FullName"> <br>
	<label for="">Enter Your Gender</label>
	<input type="radio" value="Male" checked="" name="Gender"> Male  
	<input type="radio" value="Female" name="Gender"> Female  <br>
	<label for="adress">Enter Your Adress</label>
	<textarea name="adress" id="" cols="10" rows="10"></textarea> <br>
	<label for="Dis">Enter Your Adress</label>
	<select name="Dis" id="cars">
		  <option value="">Select One</option>
		  <option value="Noakhali">Noakhali</option>
		  <option value="Dhaka">Dhaka</option>
		  <option value="Feni">Feni</option>
		  <option value="Ctg">Ctg</option>
	</select> <br>
	<input type="submit" value="SUBMIT">
</form>
  
<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
echo "<h3>";
 echo "Your Name is ". $_POST ['FullName'] . "<br>"; 
 echo "Your Adress is ". $_POST ['adress']. "<br>";
 echo "Your Distric is ". $_POST ['Dis']. "<br>";
 echo "Your Gender is ". $_POST ['Gender'] . "<br>";
	
}
echo "</h3>";

?>