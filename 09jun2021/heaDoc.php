<?php
$website = "http://www.romatermini.it";
$abc =  <<<EXCERPT
<p>Rome's central train station, known as <a href = "$website">Roma Termini</a>,
was built in 1867. Because it had fallen into severe disrepair in the late 20th
century, the government knew that considerable resources were required to
rehabilitate the station prior to the 50-year <i>Giubileo</i>.</p>
EXCERPT;

echo $abc;

?>

<?php
$chocolate = 10;
$price = 10;

$table = <<<Mahbub
 <table border="1">
	<tr><th> Numbers</th>
		<th> Price</th>
</tr>
 <tr>
 	<td>$chocolate</td>
 	<td>$price</td>
 </tr>
</table>
Mahbub;
echo $table;

 ?>
