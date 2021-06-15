<?php
 $string = file("MyText.txt");
// print_r($string);
// echo($string[0]);

  ?>
   <?php 

 echo " <table border='1'>";
  echo"	<tr>
  		<th>Name</th>
  		<th>Email</th>
  		<th>Age</th>
  	</tr>
  	"  	 
?>
<?php 
foreach ( $string as $data ) {
	
	  list($name, $email, $age) = explode(",",$data);  
	  echo "<tr>";
	 echo	"<td> $name </td>";
	 echo	"<td> $email </td>";
	 echo	"<td> $age </td>";
	  echo "</tr>";	  		
  		?>	
 
<?php 
 }
  	echo"
  </table>"
   ?>
 <table border="1"></table>
  		
  