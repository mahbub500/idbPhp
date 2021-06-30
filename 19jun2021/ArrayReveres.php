<?php 
 $array = array("mahbub","Maruf","Raohim",array("Tanjila","korim","Hasan"),"Sofique",array("Tanjila","korim","Hasan"));

  
echo "<h3>Array Reveres</h3>";
 $cities = array("Dhaka(1)","Sylet(2)","Sylet(3)","Barishal(4)","CTG(5)","Barishal(6)");
 $citiesCount=  array_reverse($cities);
 echo "<pre>";
 print_r($citiesCount);
 ?>