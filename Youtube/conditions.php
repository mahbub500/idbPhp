<?php 
$age = 20;
 echo "<h3>This is by ternarry </h3>";
 echo $age <= 20 ? "Young ":"Child";
 echo "<h3>This is by short ternarry </h3>";
 echo "<br>";
echo $age ?: 18;
echo "<pre>";

$person =[
'name'=> ' mahbub',
'age'=> 20,
'media'=>["cycling","computer programing "],
];

foreach($person as $key => $value){

    if (is_array($value)) {
    echo $key." ". implode(', ',$value)."<br>";
    
    }else{
    echo $key." ". $value."<br>";

    }
}
// var_dump($person);

// function sum(...$num){
//     var_dump($num);

// }
//  sum(1,3,6,5,4,7,6,321);

function sum(...$numbers){
   $sum = 0 ;
   foreach ($numbers as $key => $num) {

       $sum +=$key;
   }
       return $sum;
       
       echo "$sum";
}

echo sum(1,2,3,4,5,6,7,8);

echo "<br>";
echo date('d-m-y h:i:s');
echo "<br>";
echo date('d-m-y h:i:s',time()-60*60*24) ;
$people = ['Mahbub(1)','korim(2)','Rohim(3)','Ratul(4)'];
var_dump($people);
rsort($people);
var_dump($people);

$current_time = urlEncode(date("Y-m-d")."T".date("H:i:s")."Z");
echo "$current_time";
 ?>