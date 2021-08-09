<?php 

define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DB", "wdpf47");

 $mysqli= @new mysqli(HOST, USER, PASS, DB);



if($mysqli->connect_errno){
	echo "Database Connection Problems <br>";
	echo $mysqli->connect_error;
	exit();
}






 ?>