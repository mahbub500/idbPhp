<?php
echo "<h3>Array Unshift</h3>";
echo "<pre>";
$array = array("mahbub(1)","Rahman(2)","Korim(3)","Sofique(4)");
 array_unshift($array,"Rifat","Nuzrul");
 print_r($array);
echo "<h3>Array Push</h3>";
echo "<pre>";
$array = array("mahbub(1)","Rahman(2)","Korim(3)","Sofique(4)");
 array_push($array,"Maruf","Sahad");
 print_r($array);
 echo "<h3>Array Pop</h3>";
echo "<pre>";
$array = array("mahbub(1)","Rahman(2)","Korim(3)","Sofique(4)");
// $array2 =  array_pop($array);
 print_r($array);
 ?>