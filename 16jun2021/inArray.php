<?php
$cities = array('Dhaka','Noakahlai','Basurhart','Comillah');
$city = 'CU';

if (in_array($city,$cities)) {
	echo "Yes, <b> $city </b> is in these list";
}else{

	echo "No,<b> $city </b> is not in these list";
}
 ?>