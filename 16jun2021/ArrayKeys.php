<?php
echo"<h3>Array key Exists</h3>";
$vaccin_date =[
	"Sylet"=>"1 July 2021",
	"Noakhali"=>"2 July 2021",
	"CTG"=>"3 July 2021",
	"Dhaka"=>"4 July 2021",
];
$key=count(array_keys($vaccin_date));
echo "$key<br>";


foreach ($vaccin_date as $key => $value) {
	echo " $value<br>";
}
foreach ($vaccin_date as $key => $value) {
	echo " $key<br>";
}
if (array_key_exists('Dhaka',$vaccin_date)) {
	echo "Yes";
}else{
	echo "No";

}
$a=  range(0,50);
echo "<pre>";
print_r($a);

$vaccin_date =array("a"=>2,"b"=>2);
$vaccin_date["c"]=2;


print_r($vaccin_date);

 ?>