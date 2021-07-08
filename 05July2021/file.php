<?php
// Read the file into an array
$users = file('myfile.txt');
// echo "<pre>";
// var_dump( $users);

foreach ($users as $user) {

list($name,$email,$mobile) = explode(",", $user);
  echo "<p>Hello: $name Your Email is : $email and your mobile No is: $mobile  </p>";
}


?>