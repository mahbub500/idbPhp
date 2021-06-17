<?php 
$capitals = array("Ohio" => "Columbus", "Iowa" => "Des Moines");
echo "<p>Can you name the capitals of these states?</p>";
echo "<h3> This is by while </h3>";
while ($key = key($capitals)) {
	echo "$key<br>";
	next($capitals);
}
echo "<h3> This is by foreach </h3>";
foreach ($capitals as $key => $value) {
	echo "$value<br>";
	
}
echo "<h3> This is by while </h3>";
while ($key = key($capitals)) {
	echo "$key<br>";
	next($capitals);
}
echo "<h3> This is by while </h3>";
while ($key = key($capitals)) {
	echo "$key<br>";
	next($capitals);
}

 ?>