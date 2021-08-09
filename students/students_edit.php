<?php


// connection to db
$db = new PDO('mysql:host=localhost;dbname=student;charset=utf8mb4', 'root', '');

//build query
$query = "SELECT * FROM `students` WHERE id = ".$_GET['id'];

//execute the query using php
foreach ($db->query($query) as $row){
    $students = $row;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEIP Database Management</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes,
    free template, free bootstrap, free website template">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <!-- bootstrap  Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- =======================================================
        Theme Name: Code_Finder
        Author: Code_Finder
    ======================================================= -->
</head>
<body style="padding-top: 90px">


<!-- edit form begin =========================================================-->
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <form action="students_edit_done.php" method="post">
                <fieldset>
                    <legend>Student's Information</legend>

                    <input type="hidden" class="form-control" id="id" name="id" placeholder="ID"
                           value="<?=$students['id'];?>">

                   <div class="form-group">
                        <label for="name">Name :</label>
                        <input type="text" class="form-control" id="name" name="name"
                               placeholder="Enter Name" value="<?=$students['name'];?>">
                    </div>

                    <div class="form-group">
                        <label for="father_name">Father's Name :</label>
                        <input type="text" class="form-control" id="father_name" name="father_name"
                               placeholder="Enter Father's Name" value="<?=$students['father_name'];?>">
                    </div>

                    <div class="form-group">
                        <label for="mother_name">Mother's Name :</label>
                        <input type="text" class="form-control" id="mother_name" name="mother_name"
                               placeholder="Enter Mother's Name" value="<?=$students['mother_name'];?>">
                    </div>

                    <div class="form-group">
                    <label for="mother_name" class="col-sm-2 control-label">Date of Birth: </label>
                    <div class="col-sm-3">
                        <input type="date" value="<?=$students['BirthDate'];?>" class="form-control" name="BirthDate">
                    </div>
                </div>

                     <div class="form-group">
                    <label for="gender" class="col-sm-2 control-label">Gender: </label>
                    <div class="col-sm-3">
                        <select class="form-control" name="gender">
                            <option  >Male</option>
                            <option >Female</option>
                        </select>
                    </div>
                   
                </div>


                    <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Check your Education: </label>
                <div class="form-check form-switch mt-2">
                
                <label style="margin-top: 9px;" class="form-check-label " for="exampleCheck1">S.Sc </label>
                <input type="checkbox" value=" <?php $students['education'] ?>" name="education[]" class="form-check-input " id="exampleCheck1">  &nbsp;               
             
                <label style="margin-top: 9px;" class="form-check-label " for="exampleCheck1">H.Sc </label>
                <input type="checkbox" value="hsc" name="education[]" class="form-check-input " id="exampleCheck1"> &nbsp; 
                <label style="margin-top: 9px;" class="form-check-label " for="exampleCheck1">honours </label>
                <input type="checkbox" value="honours" name="education[]" class="form-check-input " id="exampleCheck1"> &nbsp;
                 <label style="margin-top: 9px;" class="form-check-label " for="exampleCheck1">masters </label>
                <input type="checkbox" value="masters" name="education[]" class="form-check-input " id="exampleCheck1">&nbsp;
                
                </div>
                </div>

                    <div class="form-group">
                        <label for="email">Email Address :</label>
                        <input type="email" class="form-control" id="email" name="email"
                               placeholder="Enter Email" value="<?=$students['email'];?>">
                    </div>

                    <div class="form-group">
                        <label for="nid">NID:</label>
                        <input type="number" class="form-control" id="nid" name="nid"
                               placeholder="Enter NID " value="<?=$students['nid'];?>">
                    </div>

                    <button type="submit" class="btn btn-green">Submit</button>
                </fieldset>
                <br>
                <hr>
            </form>
            <br>

        </div>
    </div>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!--<script src="js/custom.js"></script>-->

</body>
</html>
