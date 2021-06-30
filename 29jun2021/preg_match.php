<?php 


$line = "vim is the greatest word processor ever created! Oh vim, how I
love thee!";
if (preg_match("/\bthe\b/i", $line, $match)){

print "Match found!";
}else{
print "Not Match found!";

} 

 ?>