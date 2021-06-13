<?php 

for ($count = 0; $count <10 ; $count++) {
	$rand = rand(1,50);
	if ($rand <10)
	goto less;
	else echo "Number grater than 10: $rand <br/> ";
}
less:
echo("Number less than 10 : $rand <br/> ");


?>