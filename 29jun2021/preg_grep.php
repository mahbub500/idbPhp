<?php
$foods = array("pasta", "steak", "fish", "potatoes","shop");
$food = preg_grep("/^P/i", $foods);
echo"<pre>";
print_r($food);
?>