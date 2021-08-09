<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "classicmodels";

$connection = @mysqli_connect($host,$user,$pass ) or die ("Faild To connet with MySql Server");

mysqli_select_db($connection,$db) or die ("Failed to select database");

// $query = mysqli_query($connection,"SELECT * FROM employees");
$query = mysqli_query($connection,"SELECT customername,country,creditLimit FROM customers
WHERE(country = 'USA'OR country = 'France')  AND creditlimit > 100000;");

echo "<pre>";
print_r($query);
$data = mysqli_fetch_array($query);
// print_r ($connection);
print_r ($data);

// while ($data = mysqli_fetch_array($query)){
	// echo "Hello ".$data['lastName']."Your Name is ".$data['email']."<br>";

// }

 ?>