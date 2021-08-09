<?php  ?>
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
	<div class="panel-heading"><h2>Data Entry Form</h2></div>

	<div class="panel-body">
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="form">
	
<table>
	<tr>
		<th>ID:</th>
		<td><input type="text" name="id"  class="form-control" style="margin: 5px;"></td>
	</tr>

<tr>
		<th>Name:</th>
		<td><input type="text" name="name" class="form-control" style="margin: 5px;"></td>
	</tr>

<tr>
		<th>Gender:</th>
		<td><div style="margin: 5px;">
			<div class="radio-inline">
			<input type="radio" name="gender" value="Male">Male</div> <div class="radio-inline">
			<input type="radio" name="gender" value="Female">Female</div>
			</div>
		</td>
	</tr>

<tr>
		<th>District:</th>
		<td>
			<select name="district" class="form-control" style="margin: 5px;">
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
<tr>
		<th></th>
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
if(isset($_POST['submit'])){
extract($_POST);


$chk="";  
foreach($education as $chk1)  
   {  
      $chk .= $chk1.",";  
   } 
    
$sql= "INSERT INTO students VALUES('$id','$name','$gender','$district','$profile','$chk')";
$result= $mysqli->query($sql);
if($result){?>
<div style="width: 200px; background-color: green; color: white; border: 2px solid black; margin: 0 auto; font-weight: bold;">	 <?php echo "Successfully inserted"; ?></div>
<?php
}
	

}




 ?>








<div style="width: 200px; background-color: lightblue;  border: 2px solid black;  font-weight: bold;"><a style="color: #000; text-decoration: none;" href="student.php">Students' Form</a></div>

</body>
</html>