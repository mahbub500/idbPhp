<?php 

$path ='C:\xampp\php\icudt68.dll';
echo "<pre>";
 $bytes = filesize($path);
 $kb = round($bytes/1024,3);
 echo $mb = round($kb/1024,2)." MB" ;

echo"<br>";

 ?>
 