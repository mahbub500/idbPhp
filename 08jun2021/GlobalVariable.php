<?php 

	$somevar = 15;
function addit(){
	global $somevar;
	$somevar++;
	echo" Somevar is $somevar";

}
addit();
echo "<br>";
$somevar = 15;
function additt(){
	$GLOBALS["somevar"]++;
}
additt();
echo" Somevar is".$GLOBALS["somevar"];

echo "<br>";
print_r($GLOBALS);
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



echo "<br>";









 ?>