<?php 
 $array = array("mahbub","Maruf","Raohim",array("Tanjila","korim","Hasan"),"Sofique",array("Tanjila","korim","Hasan"));
 echo count($array,1);
 echo "<br>";
 echo sizeof($array,1);
 
echo "<h3>Array Unique</h3>";
 $cities = array("Dhaka","Sylet","Sylet","Barishal","CTG","Barishal");
 $citiesCount=  array_unique($cities);
 echo "<pre>";
 print_r($citiesCount);
 ?>