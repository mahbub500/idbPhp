<?php

 $x = (double)35;
	print gettype($x );
echo "<br>";
	var_dump($x);
echo "<br>";
 echo $x;
echo "<br>";

settype($x, "float");
var_dump($x);
echo "<br>";

$score = 1114;
$obj = (object) $score;
printf($obj->scalar);
echo "<br>";
$total = "5";
$count = 10;
$total /=$count;
echo "$total";
echo "<br>";
$total = " 1.0";
if($total) echo "We are in positive territory";




?>


