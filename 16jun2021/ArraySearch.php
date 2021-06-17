<?php
echo"<h3>Array Search </h3>";
$vaccin_date =[
	"Sylet"=>"1 July 2021",
	"Noakhali"=>"2 July 2021",
	"CTG"=>"3 July 2021",
	"Dhaka"=>"4 July 2021",
];
$city = array_search('4 July 2021',$vaccin_date);

if ($city) {
echo "$city is scheduled for vaccination.";
	
}else{
echo "$city has no scheduled for vaccination.";
}
echo"<br>";
$capitals = array("Ohio" => "Columbus", "Iowa" => "Des Moines", "Dhaka" => "Dhaka mirpur");
echo "<p>Can you name the capitals of these states?</p>";
while($key = key($capitals)) {
// printf("%s <br />", $key);
echo "$key"."<br>";
next($capitals);
}
 ?>