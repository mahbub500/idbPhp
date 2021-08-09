<?php
require_once("db_con.php");
echo $id= $_REQUEST['id'];

$sql= "SELECT * FROM students WHERE id='$id'";
 $result= $mysqli->query($sql);
	$row= $result->fetch_assoc();

  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Students' Information Entry</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<style >
	#forms{
		width: 500px;
		margin: 0 auto;
	}
</style>

</head>
<body>



<div class="container">
	<div class="row">
		<div class="col-lg-12">
			
		<div id="forms">

<div class="panel panel-default box">
	<div class="panel-heading"><h2>Data Edit Form</h2></div>

	<div class="panel-body">
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="form">
	
<table>
		<tr>
		<th>ID:</th>
		<td> <input type="hidden" name="id" value="<?php echo $row['id']; ?>" class="form-control" style="margin: 5px;" ></tr>

<tr>
		<th>Name:</th>
		<td><input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" style="margin: 5px;"></td>
	</tr>

<tr>
		<th>Gender:</th>
		<td><div style="margin: 5px;">
			<div class="radio-inline">
			<input type="radio" name="gender" value="Male" value="<?php echo $row['gender'] ?>">Male</div> <div class="radio-inline">
			<input type="radio" name="gender" value="Female" value="<?php echo $row['gender'] ?>">Female</div>
			</div>
		</td>
	</tr>

<tr>
		<th>District:</th>
		<td>
			<select name="district"  class="form-control" style="margin: 5px;">
				<option value=""></option>
				<option value="Dhaka">Dhaka</option>
				<option value="Cumilla">Cumilla</option>
				<option value="Barishal">Barishal</option>
				<option value="Gaibandha">Gaibandha</option>
				<option value="Chandpur">Chandpur</option>
				<option value="B. Baria">B. Baria</option>
				<option value="Narayan ganj">Narayan Ganj</option>
				<option value="Noakhali">Noakhali</option>
				<option value="Laxmipur">Laxmipur</option>
				</select>
		</td>
	</tr>

<tr>
		<th>Profile</th>
		<td><textarea name="profile" cols="10" rows="10" class="form-control" style="margin: 5px;"></textarea></td>
	</tr>
	<tr>
		<th>Education</th>
		<td>
			<div class="radio-inline"><input type="checkbox" name="education[]" value="SSC">SSC</div>
			<div class="radio-inline"><input type="checkbox" name="education[]" value="HSC">HSC</div>
			<div class="radio-inline"><input type="checkbox" name="education[]" value="Honors">Honors</div>
			<div class="radio-inline"><input type="checkbox" name="education[]" value="Masters">Masters</div>
		</td>
	</tr>
<tr><th></th>
		<td>
			<input style="margin: 5px;" type="submit" class="btn btn-danger btn-block active" name="submit" value="Submit">
		</td>
	</tr>
</table>
</form>
</div>
</div>
</div>
</div>
	</div>
</div>






<?php 


require_once("db_con.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
	
extract($_POST);
echo "<pre>";
var_dump($_POST);
echo "</pre>";

// $sql = UPDATE `students` SET `name` = 'Mahbub update' WHERE `students`.`id` = 158;

$sql= "UPDATE students SET name= $_POST['name']   WHERE id ='$id'";


 $result= $mysqli->query($sql);
var_dump($sql);

$data= $mysqli->affected_rows;
if($data){
	echo "Successfully Updated";
}

}




 ?>







<div style="width: 200px; background-color: lightblue;  border: 2px solid black;  font-weight: bold;"><a style="color: #000; text-decoration: none;" href="student.php">Students' Form</a></div>

</body>
</html>