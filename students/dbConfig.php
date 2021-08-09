<?php 

$host = "localhost";
$user = "root";
$root = '';
$mysqli = new mysqli($host, $user, $root, 'student');

if ($mysqli->connect_errno) {
	echo"Database connection Problem<br>";
	echo $mysqli->connect_error;
}
 ?>