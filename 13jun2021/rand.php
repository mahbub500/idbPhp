 <?php 

 // echo $x = rand(1, 50);

  ?>
  <?php 
  $numbers = array(2,3,5,7,11,13,17,19,23,29,31,37,41,43,47 );
  for ($count = 1; $count++; $count <1000) {
  	$rand = rand(1,500);
  	if (in_array($rand,$numbers)) {

  		echo "The number Found is " .$rand;
  		break;
  	}else{
  		echo("No Match number Found <br> ");
  	}
  }

   ?>