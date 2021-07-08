<?php 

$path ='c:';
echo "<pre>";
 $bytes = diskfreespace($path);
  $Total2 =disk_total_space($path);
// echo $bytes;

 $kb = round($bytes/1024,3);
 echo $mb ="Free Space ". round($kb/1024/1024,2)." GB" ;
echo"<br>";
 echo $mb2 ="Total ". round($Total2/1024/1024/1024,2)."GB" ;

 


 ?>
 