<?php 

echo("<pre>");
session_start();
$_SESSION['userid'] = "Mahbub";
$_SESSION['pass'] = "12345";


print_r($_SESSION);
?>