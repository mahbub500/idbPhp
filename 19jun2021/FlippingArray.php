<?php 

  
echo "<h3>Flipping Array</h3>";
 $cities = array("Dhaka(1)"=>'100',"Sylet(2)"=>"70","Sylet(3)"=>"90","Barishal(4)"=>"150","CTG(5)"=>"320","Barishal(6)"=>"1000");
 $citiesCount=  array_flip($cities);
 echo "<pre>";
 print_r($citiesCount);
 ?>