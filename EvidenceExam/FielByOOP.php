<?php 
 class fileread
 {
   public function abc(){
      $fh = fopen("result.txt",'r');
      while(!feof($fh)){
         $data = fgets($fh);
         echo $data. "<br>";
      }
   }
 }
 $obj1 = new fileread();
 $obj1->abc();

 ?>