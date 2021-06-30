<?php 
$example = function() {
echo "Closure";
};
$example();


function MyEcho() {
echo "Closure";
};
echo "<br>";
$example = "MyEcho";

$example();
echo "<br>";


 ?>

 <?php 
 // With out use
  /*$a = 15;
 $example = function (){
 	global $a; $a += 100;
 	echo $a . "<br>";
 };

 $example();
 echo $a;*/

 // with use 
  	$a = 15;
	$example = function() use (&$a) {
		$a += 100;
		echo $a . "\n";
		};

	$example();
	echo $a . "<br>";
	$a = 20;

	echo $a . "<br>";
 
  ?>

