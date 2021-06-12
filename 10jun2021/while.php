<?php 
	$x= 0;
	while ($x  <= 10) {
		echo "$x <br> ";
	$x++;
	}

echo "Outside of loop the value of X is : " .$x;
 ?>
 <br>

 <?php 
 $fruits = ["Mango","Bana","JackFruit","licu"," SugerCan"];
 $x =0;
 ?>
<ol>
 <?php 
 while ($x <count($fruits) ) {
  ?>
  <li>  <?php	echo $fruits[$x]; $x++ ?> </li>
 <?php 
 }
  ?>
</ol>
 <br>
 <?php 
	$s = ["Mango","Bana","JackFruit","licu"," SugerCan"];
	$arrlength= count($s);
	echo "<ul>";
	for ($i=0; $i<$arrlength; $i++){
	echo "<li>". "$s[$i]"."</li>";
	}
	echo "</ul>";
	// echo count($s);
 ?>
