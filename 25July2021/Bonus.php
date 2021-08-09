
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bonus Calculation</title>
</head>
<body>
<?php 

if (isset($_POST['SUBMIT'])) {
 require_once('db_config.php');
  $id = $_POST['emp_id'];
  // echo $id; 
  $sql = " SELECT calculate_bonus($id)";
  $result = $mysqli->query($sql);
  $row = $result->fetch_array();
	echo $row[0];

// SELECT calculate_bonus



}
 ?>
	<h2>Employee list</h2>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		
		<select name="emp_id" id="">
			
			<option value="1"> Rohim </option>
			<option value="2"> Mahbub </option>
			<option value="3"> Maruf </option>
		</select> <br><br>
		<input type="submit" name="SUBMIT" value="Calculate Bonus">
	</form>
	
</body>
</html>
