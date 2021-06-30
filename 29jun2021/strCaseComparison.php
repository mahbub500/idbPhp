<?php
$email1 = "admin@example.com";
$email2 = "ADMIN@example.com";
echo strcasecmp($email1, $email2);

if (strcasecmp($email1, $email2 != 0)){
echo "The Email id is invalid ";
}else{
echo "The email addresses are identical!";
}
?>