<?php
$datas = file_get_contents('myfile.txt');
$person  = explode("\n", $datas);
echo"<pre>";
print_r($person);
// var_dump($person);
$i=1;
foreach($person as $people){
	list($name,$email,$mobile)=explode(",",$people);
	echo $i++ ." Hi $name Your Email is : $email and mobile number is $mobile";
}

// echo ($person);
?>