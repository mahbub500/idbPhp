<?php 

   
// Magic Constant
echo __DIR__.'<br>';
echo __FILE__.'<br>';
echo __LINE__.'<br>';

// Create Directory
// mkdir('test');

// // Rename Directory
// rename('test', 'test2');

// // Delete Directory
// rmdir('test2');

// Create File 
touch('mahbub.txt');

// Scan  folder
$dir = scandir('./');
echo"<pre>";
var_dump ($dir);
// Read File and folder
echo file_get_contents('https://jsonplaceholder.typicode.com/users');

// Insert Content to File
file_put_contents('mahbub.txt', 'Hello this is by php');

 ?>