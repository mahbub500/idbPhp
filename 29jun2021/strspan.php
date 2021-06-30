<?php
$password = "Hello";
echo strspn($password, "1234567890Hello");
if (strspn($password, "1234567890") == strlen($password))
echo "The password cannot consist solely of numbers!";
?>