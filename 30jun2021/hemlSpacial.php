<?php
$input = "I just can't get <<enough>> of PHP!";
echo $input;
echo "<br>";
echo htmlspecialchars($input,ENT_QUOTES);
?>