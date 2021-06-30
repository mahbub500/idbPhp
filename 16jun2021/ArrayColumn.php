<?php
$students = [
	['name'=>'mahbub','age'=>20,'email'=>'mahbub@gmail.com'],
	['name'=>'maruf','age'=>21,'email'=>'maruf@gmail.com'],
	['name'=>'Sahed','age'=>22,'email'=>'Sahed@gmail.com'],
	['name'=>'Rofique','age'=>23,'email'=>'Rofique@gmail.com'],
	];

 $names = array_column($students,'name');
 $age = array_column($students,'age');
 echo "<pre>";
 print_r($names)."<br>";	
 print_r($age)."<br>";
 // print_r('$name' ." Birth day is ". '$age')."<br>";


 ?>