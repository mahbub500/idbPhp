<?php 
// require_once "oop.php";

class student extends person{
   public function __construct($name, $surname,$gender)
    {
        // echo $name.' '.$surname;
        $this->name = $name;
        $this->surname = $surname;  
        $this->gender = $gender;  
           

    }   
}


 ?>