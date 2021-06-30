<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Syntax </title>
</head>
<body>
	
	<?php

	echo"<pre>";
	$arr=getenv();
	foreach ($arr as $k => $v) {
		
	echo "$k = $v <br>";	
	}

	 ?>
</body>
</html>