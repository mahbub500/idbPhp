<?php
$delimitedText = "Jason+++Gilmore+++++++++++Columbus+++OH..";
$pattern = "/[\s.+]/";
$fields = preg_split($pattern, $delimitedText);
echo"<pre>";
// print_r($fields);
foreach($fields as $field) echo $field."<br />";
?>