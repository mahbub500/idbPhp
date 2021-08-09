<?php 

$secret = '12345';
 
// echo sha1($secret);
// echo "<br>";
// echo strlen(sha1($secret));

echo "<br>";
 echo md5($secret); echo "<br>";
 echo strlen(md5($secret));



// if (($_SERVER['PHP_AUTH_USER'] != 'client') ||
// (hash('sha1', $_SERVER['PHP_AUTH_PW']) != $secret)) {
// header('WWW-Authenticate: Basic Realm="Secret Stash"');
// header('HTTP/1.0 401 Unauthorized');
// print('You must provide the proper credentials!');
// exit;
// }
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
 	<h2>Welcome to Our site </h2>
 </body>
 </html>