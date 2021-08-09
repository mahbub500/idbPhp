<?php
   if(isset($_FILES['Doc'])){
      $errors= array();
      $file_name = $_FILES['Doc']['name'];
      $file_size =$_FILES['Doc']['size'];
      $file_tmp =$_FILES['Doc']['tmp_name'];
      $file_type=$_FILES['Doc']['type'];

      $arr = explode('.',$file_name);
      // var_dump($arr);
      $log = strtolower(end($arr));
      // $file_ext = strtolower($log);
      // $file_ext=strtolower(end(explode('.',$_FILES['Doc']['name'])));
      

      $extensions= array("jpeg","jpg","png");
      
      if(in_array($log,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
      	echo "<ul>";
      	foreach($errors as $error){
      		echo "<li> $error </lt> ";
         // print_r($errors);
      	}
      	echo "</ul>";
      }
   }
?>
<html>
   <body>
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="Doc" />
         <input type="submit"/>
      </form>
      
   </body>
</html>