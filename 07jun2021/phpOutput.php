<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	$season = " Rainy ";
	$city =" Noakhali"; 
	$man = " Mahbub"; 
	?>
	<h1> PHP output Function: print, ehco printf, sprintf </h1>
	<?php
	echo " <p> This is by echo </p>";
	print "<p>This is by echo </p>";


	echo "<p> Now the <b> $season </b> season is going on </p> ";
	print "<p> We love $season season </p>";


	print "<p> We love $city season and the name is $man </p>";

	printf("<p> The man %s came from %s city </p>",$man,$city);
	$cost2 = printf("<p> $%.2f </p>",43.25141);
	$cost = sprintf("<p> $%.3f </p>",43.25141);

	echo $cost;


	 ?>

	
	
</body>
</html>