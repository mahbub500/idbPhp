<?php 
ini_set("display_errors","off");
try { 
	$file  = fopen("myTestFile.txt","r");
	if(!$file){
	throw new Exception("File dosn't Exiest");
	}
	
} catch (Exception $e) {
	$e->getMessage();
}

 ?>