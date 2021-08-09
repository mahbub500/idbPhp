<?php 

$students = array(

 'student' =>array(
	"name" => "Mahbub",
	"ID" => "1",
	"MCQ" => 40,
	"Desceptive" => 37,
	"Evidence" => 30,
	
),

'student' => array(
	"name" => "Maruf",
	"ID" => "2",
	"MCQ" => 28,
	"Desceptive" => 40,
	"Evidence" => 40,
	
),
);
echo "<pre>";
// var_dump($students[0]['name']);
$total_1 = $students['student']['MCQ'] ;
// $total_2 = $students[1]['MCQ'] + $students[0]['Desceptive'] ;
var_dump($total_1); 
 ?>