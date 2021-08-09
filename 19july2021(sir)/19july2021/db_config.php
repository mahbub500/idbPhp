<?php 

// $host = "localhost";
// $user = "root";
// $pass = "";
// $db = "wdpf47";

// new mysqli($host, $user, $pass, $db);

define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DB", "wdpf47");

$mysqli = @new mysqli(HOST, USER, PASS, DB);

if($mysqli->connect_errno){
	echo "Database Connection Problem<br>";
	echo $mysqli->connect_error;
	exit();
}


// All database related script

//$mysqli->close();


 ?>