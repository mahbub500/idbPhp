<?php

$PreviesTime = mktime(20,35,00,1,22,2020);

echo "<br>";
$current_time=  time();
echo "<pre>";

$Result =  $current_time- $PreviesTime;
// print_r (getdate($Result));
echo floor($Result/(60*60*24))." Days";
?>