<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
	.valid{
		color: green;
		text-align: center;

	}
	</style>
<body>
	
</body>
</html>
<?php
    $a = array(1, 44, 5, 6, 68, 9);
   $result=  implode(', ', $a);
    $res = 0;

    foreach($a as $v) {

        if($res < $v){
        	  $res = $v;
        }

    }

    // echo  "The largest number is :".$res;
    echo "<h3 class='valid'>The largest number of this $result is : $res</h3>";  

?>
