<?php 
$number= 1235654142121.12541;

echo number_format($number,2,".",",") ."<br>";



$str = "hello this is mahbub
iam27
and i unmarid

";
echo nl2br($str);


echo "<pre>";


$fruits = array("Mango(1)","Banana(2)");

var_dump($fruits);

echo (isset($fruits[5]));

echo array_push($fruits,'mahbub');


echo array_unshift($fruits, 'Rohim');
echo array_unshift($fruits, 'z');

// ksort($fruits);
asort($fruits);
var_dump($fruits);
 ?>