
 <?php 
 	for($i=0;$i<=10; $i++){
 		echo $i. "<br>";
 	}

	$s = ["Mango","Bana","JackFruit","licu"," SugerCan"];
	$arrlength= count($s);
	echo "<ul>";
	for ($i=0; $i<$arrlength; $i++){
	echo "<li>". "$s[$i]"."</li>";
	}
	echo "</ul>";
	// echo count($s);
 ?>
