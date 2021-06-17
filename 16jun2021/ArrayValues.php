<?php
echo"<h3>Array Search </h3>";
$vaccin_date =[
	"Sylet"=>"1 July 2021",
	"Noakhali"=>"2 July 2021",
	"CTG"=>"3 July 2021",
	"Dhaka"=>"4 July 2021",
];
$dates = array_values($vaccin_date);

echo "<pre>";
print_r($dates);

 ?>