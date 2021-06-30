<?php 
  
echo "<h3>Array Sort</h3>";
 $cities = array("Dhaka(1)","Sylet(2)","Sylet(3)","barishal(4)","CTG(5)","Barishal(6)");
 sort($cities);
 echo "<pre>";
 print_r($cities);

 echo "<h3>Array A sort</h3>";
 $cities = array("Dhaka(1)","Sylet(2)","Sylet(3)","barishal(4)","CTG(5)","Barishal(6)");
 asort($cities);
 echo "<pre>";
 print_r($cities);

  echo "<h3>Array reverse sort With Out index </h3>";
 $cities = array("Dhaka(1)","Sylet(2)","Sylet(3)","barishal(4)","CTG(5)","Barishal(6)");
rsort($cities);
 echo "<pre>";
 print_r($cities);

   echo "<h3>Array reverse sort with index </h3>";
 $cities = array("Dhaka(1)","Sylet(2)","Sylet(3)","barishal(4)","CTG(5)","Barishal(6)");
arsort($cities);
 echo "<pre>";
 print_r($cities);

   echo "<h3> Array sort with sequentiol  </h3>";
 $cities = array("picture9.jpg","picture1.jpg","picture2.jpg","picture21.jpg","picture20.jpg","picture52.jpg","icture63.jpg");
natsort($cities);
 echo "<pre>";
 print_r($cities);
   echo "<h3> Array sort with Case-Insensitive Natural Sorting  </h3>";
 $cities = array("picture9.jpg","picture1.jpg","picture2.jpg","picture21.jpg","picture20.jpg","picture52.jpg","Picture63.jpg");
natcasesort($cities);
 echo "<pre>";
 print_r($cities);

echo "<h3> Array sort on Indexing   </h3>";
$cities = array("Dhaka(1)"=>'100',"Sylet(2)"=>"70","Sylet(3)"=>"90","Barishal(4)"=>"150","CTG(5)"=>"320","Barishal(6)"=>"1000");
 ksort($cities);
 echo "<pre>";
 print_r($cities);

 echo "<h3> Array sort on Indexing reverse  </h3>";
$cities = array("Dhaka(1)"=>'100',"Sylet(2)"=>"70","Sylet(3)"=>"90","Barishal(4)"=>"150","CTG(5)"=>"320","Barishal(6)"=>"1000");
 krsort($cities);
 echo "<pre>";
 print_r($cities);
 ?>