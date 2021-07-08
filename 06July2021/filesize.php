<?php 

$file = 'file.txt';

// echo filesize($file);

$fh  = fopen($file,'r');

echo $userData = fread($fh, filesize($file));

fclose($fh);
 ?>