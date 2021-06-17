<?php 
echo "<h3> Range between Two</h3>";

$numbers = range(1,10);
echo "<pre>";
echo count($numbers)."<br>";
print_r($numbers);

echo "<h3> Range between Two With diffrence </h3>";
$numbers = range(0,20,2);
echo "<pre>";
echo count($numbers)."<br>";
print_r($numbers);
echo "<h3> Show Charectar </h3>";
$numbers = range("A","Z");
echo "<pre>";
echo count($numbers)."<br>";
print_r($numbers)."<br>";
$true=  is_array($numbers);

if ( $true == 1) {
	echo "This is an array"."<br>";
}else{
	echo "This is Not an array"."<br>";

};


 ?>

