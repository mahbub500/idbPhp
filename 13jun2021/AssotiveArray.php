	

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	$StudentResult = array ("Sahed"=>"89","Maruf"=>"78","Korim"=>"85","Rohim"=>"79","Maruf"=>"80"); 
	
echo "<table border='1' ";
 echo "<tr>";  
    echo "<td> Name </td>";
    echo "<td> Result </td>";
    echo "</tr>";
foreach($StudentResult as $key=>$makrs) {
    echo "<tr>";
    echo "<td>" . $key . "</td>";
    echo "<td>" . $makrs . "</td>";
    echo "</tr>";    
}
echo "</table>";
	?>


	 

</body>
</html>