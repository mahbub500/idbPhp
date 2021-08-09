<?php 
require_once("db_con.php");
 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Studens' Data</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<style >
	.page2{
		border: 3px solid black;
		width: 200px;
		height: 50px;
		padding: 15px;
		font-weight: bold;
		float: right;
		
	}
	.page2 a{
		color: red;

	}
	.page2 a:hover{
		color: white;
		background-color: blue;
		text-decoration: none;
	}
	#tabe a{
		text-decoration: none;
		color: #000;
	}
	#tabe a:hover{
		background-color: white;
		color: red;
		font-weight: bold;

	}
</style>
</head>
<body>

<?php 

$sql= "SELECT * FROM students";
$result= $mysqli->query($sql);
?>
<div class="container"><div class="row"><div class="col-lg-12">
	<div style="margin-left: 500px;">	<h2 >Information Table</h2></div>
<table border="1" class="table hover bg-danger" id="tabe"><tr>
	<th>ID</th>
	<th>Name</th>
	<th>Gender</th>
	<th>District</th>
	<th>Profile</th>
	<th>Education</th>
	<th>Action</th>
</tr>

<?php
while(list($id,$name,$gender,$district,$profile, $education)=$result->fetch_row()){  ?>

	

	<tr>
		<td><?php echo $id ?></td>
		<td><?php echo $name ?></td>
		<td><?php echo $gender ?></td>
		<td><?php echo $district ?></td>
		<td><?php echo $profile ?></td>
		<td><?php echo $education ?></td>
		<td><a href="delete.php?id= <?php echo $id ?>" onclick="return confirm('Are you sure want to delete?')">Delete</a>
			<a href="info_edit.php?id=<?php echo $id?>">Edit</a>
			<!-- <a href="info_edit.php">Edit</a> -->
		</td>
	</tr>
<?php
}
?>

</table>

</div></div>

</div>
<br>

<div class="page2"><a href="info_entry.php">Information Entry</a></div>
<br>

</body>
</html>