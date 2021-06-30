<?php

 class overloding
 {
    private $data = array();
    public function __set($name, $value){
        echo " Setting '$name' Property to value" ."<br>";
        $this->data[$name]= $value;
    }
    public function __get($name)
    {
        echo "Getting '$name' Property with Value : " ."<br>";
        if (array_key_exists($name, $this->data)){
            return $this->data[$name];
        }
    }

 }
 $obj = new overloding;
 $obj->a = "Mahbub Alam "."<br>";
 echo $obj->a ."<br>" ;
 echo "<pre>";
 print_r($obj);
?>