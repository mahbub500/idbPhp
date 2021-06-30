<?php 



echo "<br>";
function keep_track(){
	static $count = 0;
	$count++;
	echo $count;
	echo "<br>";
}
keep_track();
keep_track();
keep_track();

echo "<br>";

// foreach ($_SERVER as $var => $value) {
// 	echo " $var => $value <br/>";
// }

printf("Your IP Address is: %s",$_SERVER['REMOTE_ADDR']);

echo "<br>";








 ?>