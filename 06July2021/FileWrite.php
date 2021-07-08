<?php
$fh = fopen('file.txt', 'a+');

$names = "Al Amin \n Kawsar";

fwrite($fh, $names);

file_get_contents('file.txt');
fclose($fh);

?>