<?php
class testStatic{
     
  public static $count = 0;
 
   
  public static function counter(){
      echo "Its Static Counter";
  }
  
}
 
//Accessing Static Property and Method Outside of the Class
testStatic::$count=5; // Assigning Value to static Property
echo testStatic::$count; // Calling Static Property with Updated Value
echo "<br>";
testStatic::counter(); // Calling Static Method with Updated Value
?>