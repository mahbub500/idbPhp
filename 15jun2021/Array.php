<?php 
$states = [
"Ohio" => array("population" => "11,353,140", "capital" => "Columbus"),
"Nebraska" => array("population" => "1,711,263", "capital" => "Omaha")
];

// echo $states['Ohio']['capital'];
echo $states["Ohio"]["population" ]."<br>";
echo $states["Ohio"]["capital"]."<br>";
echo $states["Nebraska"]["population" ]."<br>";
echo $states["Nebraska"]["capital"]."<br>";


 ?>
<?php 
$city = array();

$city[]="Dhaka";
$city["SY"]="Sylet";
$city[]="Rangpur";
$city[]="Ghaibanda";
echo "<pre>";
print_r($city);
$cities = [
"Dhaka"=>array('Male'=>5000,"Female"=>5000),
"Rangpur"=>array('Male'=>5000,"Female"=>5000),
"Noakhali"=>array('Male'=>5000,"Female"=>5000),
];
 print_r($cities['Dhaka']);

 function person(){
 	$details = ['Mahbub',"mahbubmr500@gmail.com","Mirpur"];
 	return $details;
 }
 // $person = person()[1];
 $person = person();
 // var_dump($person);
 // echo $person. "<br>";

 list($name, $email, $address) = $person;
 echo "Name : $name <br>";
 echo "E-mail : $email <br>";
 echo "Adress : $address <br>";
 ?>