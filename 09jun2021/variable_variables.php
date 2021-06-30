<?php 

echo("<pre>");
$recipe = " spaghetti ";
$$recipe = "& meatballs";
$$recipe = "& chicken ";

echo $recipe ;
echo ${$recipe};
echo ${$recipe};



?>