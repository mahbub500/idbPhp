<?php 
 class student
 {     
   private $data;
   public function __construct($file){
     
     $data = file($file);
     $this->data = $data;
      // return $this->$data;

   }

   public function result($stid){
      foreach($this->data as $item){

         list($id, $name, $batch, $result)= explode(",", $item);

         if ($id == $stid) {
         echo $id. $name. $batch . $result;
         break;
         }
      }
       
   }
 }
$stobj =  new student("result.txt");
$stobj->result(1);
 ?>