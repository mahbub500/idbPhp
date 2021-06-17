<?php 

$states = array("florida");
$state ="Ohio";
// echo("$states is an array" (is_array($states)?"TRUE" :"FALSE"));
echo"\$states is an array", (is_array($states)?" TRUE" :" FALSE")."<br>";
echo'$state is an array', (is_array($state)?" TRUE" :" FALSE");


echo "<h3> Outputting an array  </h3>";
	$customers = array();
	$customers[] = array("Jason Gilmore", "jason@example.com", "614-999-9999");
	$customers[] = array("Jesse James", "jesse@example.net", "818-999-9999");
	$customers[] = array("Donald Duck", "donald@example.org", "212-999-9999","Hello");
	foreach ($customers AS $customer) {
	// vprintf("<p>Name: %s<br>E-mail: %s<br>Phone: %s </p>", $customer);

		list($name, $email, $number) = $customer;
		echo "Name is : <b>  $name </b> , And The Email is <b>$email </b> , and the Mobile number is <b>$number </b>" ."<br>";
		// echo " $email" ."<br>";
		// echo " $number" ."<br>";


	}
 ?>

