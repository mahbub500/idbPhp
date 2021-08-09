
<?php

// connection to db
$db = new PDO('mysql:host=localhost;dbname=student;charset=utf8mb4', 'root', '');
// $db = require_once ("dbConfig.php");

//build query
$query = "DELETE FROM `students` WHERE `id` = ".$_GET['id'];

//echo $query;

//execute
$result = $db->exec($query);

?>

<?php 
require_once ("dbConfig.php");

$id = $_GET['id'];

$sql = "DELETE FROM students WHERE id='$id'";
$mysqli->query($sql);

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

</head>
<body style="padding-top: 100px">



<!-- message ========================================================-->
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-danger text-center">
                <?php
                if($result){
                    header("Location: students_view.php");
                }else{
                    echo "Sorry !";
                    echo "<br>";
                    echo "There is an error. Please try again later.";
                }
                ?>
            </div>

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
