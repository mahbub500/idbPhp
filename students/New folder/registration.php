<?php 
    require_once ("dbConfig.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TCLD Database Management</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords"
          content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
    <!-- bootstrap  Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    
</head>
<body style="padding-top: 90px">
<!--  form-->

<?php  
if(isset($_POST['submit'])){
    extract($_POST);
    $db = require_once ("dbConfig.php");
      
    //   echo "<pre>";
    // var_dump($_POST);
    //   echo "</pre>";
      $checkbox1=$_POST['education'];  
        $chk="";  
        foreach($checkbox1 as $chk1)  
        {  
      $chk .= $chk1.",";  
        }  
    
    $sql = "INSERT INTO students ( `id`, `name`, `father_name`, `mother_name`, `gender`,`nid`,`email`,`education`,`BirthDate` ) VALUES ('','$name', '$father_name', '$mother_name','$gender','$nid','$email','$chk','$BirthDate')";
    $result = $mysqli->query($sql);
    // var_dump($sql);
    $data = $mysqli->affected_rows;
        if($result){
            echo "Successfully Product inserted<br>";

        }
        header("Location: students_view.php");

}

?>
<div class="container">
    <div class="row">
        <a style="padding-right: 26px;padding-left: 25px;"
           class="btn btn-green"href="students_view.php">View All Student </a>
        <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
           <br>
            <fieldset style="border: solid #19807e 2px"><h3>Student Registration Form</h3>
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name: </label>
                    <div class="col-md-8">
                        <input type="text" class="form-control"  name="name" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="father_name" class="col-sm-2 control-label">Father Name: </label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control"name="father_name"
                               placeholder="Father's Name" >
                    </div>
                    <label for="mother_name" class="col-sm-2 control-label">Mother Name: </label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="mother_name"
                               placeholder="Mother's Name" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender" class="col-sm-2 control-label">Gender: </label>
                    <div class="col-sm-3">
                        <select class="form-control" name="gender">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <label for="nid" class="col-sm-2 control-label">NID Number: </label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="nid"
                               placeholder="1234567890">
                    </div>
                </div>

                 <div class="form-group">
                    <label for="mother_name" class="col-sm-2 control-label">Date of Birth: </label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" name="BirthDate">
                    </div>
                </div>

                
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Check your Education: </label>
                <div class="form-check form-switch mt-2">
                
                <label style="margin-top: 9px;" class="form-check-label " for="exampleCheck1">S.Sc </label>
                <input type="checkbox" value="ssc" name="education[]" class="form-check-input " id="exampleCheck1">  &nbsp;               
             
                <label style="margin-top: 9px;" class="form-check-label " for="exampleCheck1">H.Sc </label>
                <input type="checkbox" value="hsc" name="education[]" class="form-check-input " id="exampleCheck1"> &nbsp; 
                <label style="margin-top: 9px;" class="form-check-label " for="exampleCheck1">honours </label>
                <input type="checkbox" value="honours" name="education[]" class="form-check-input " id="exampleCheck1"> &nbsp;
                 <label style="margin-top: 9px;" class="form-check-label " for="exampleCheck1">masters </label>
                <input type="checkbox" value="masters" name="education[]" class="form-check-input " id="exampleCheck1">&nbsp;
                
                </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Enter Email Address: </label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="email" name="email" placeholder="abc@example.com">
                    </div>
                </div>
            </fieldset>
            <br>
            <button type="reset" class="btn btn-primary">Reset</button>
            <input type="submit" name="submit"  class="btn btn-green">
            
        </form>
        <br>
    </div>
</div>

<!--Footer-->
<footer id="footer" class="footer">
    <div class="container text-center">
       
         @2021 TCLD_DATABASE Management. All rights reserved
        <div class="credits">
            Designed by <a href="">Mahbubur Rahman</a>
        </div>
    </div>
</footer>

<!-- Latest compiled and minified JavaScript -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>
