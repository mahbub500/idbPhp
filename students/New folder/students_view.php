<?php
//connection to database
  $db = require_once ("dbConfig.php");

//building query
$query = "SELECT * FROM `students` ORDER BY id ASC";
$result = $mysqli->query($query);

//execution
//$stmt = $db->query($query);
//$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
$Sl_No = 1;
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
<body style="padding-top: 40px">
<!--Navigation bar start =================================================-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header pt-5">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
             <a style="padding-right: 26px;  padding-top: 5px; padding-left: 25px;"
               class="btn btn-green" href=registration.php>Add Student </a>
        </div>
        
    </div>
</nav>
<!--table start =========================================================-->
<section id ="feature" class="section-padding">
    <div class="container-fluid">
        <div class="row">
            <div class=" col-md-12">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Father's Name</th>
                        <th>Mother's Name</th>
                        <th>Gender</th>
                        <th>Date Of Birth </th>
                        <th>NID</th>
                        <th>Email</th>
                        <th>Education</th>
                        <th >Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                        
                    <?php foreach ($result as $student):  ?>
                        
                        <tr>
                            <td><?= $Sl_No++ ?></td>
                            <td><?= $student['name'] ?> </td>
                            <td><?= $student['father_name'] ?></td>
                            <td><?= $student['mother_name'] ?></td>
                            <td><?= $student['gender'] ?></td>
                            <td><?= $student['BirthDate'] ?></td>
                            <td><?= $student['nid'] ?></td>
                            <td><?= $student['email'] ?></td>

                            <td><?= $student['education'] ?></td>

                            <td>
                                <a 
                                   class="btn btn-primary"
                                   href="students_edit.php?id=<?php echo $student['id'];?>">Edit</a>

                                <a class="btn btn-danger"
                                   href="students_delete.php?id=<?php echo $student['id'];?>">Delete</a>

                            </td>
                        </tr>
                        <?php
                    endforeach;                    
                   

                    ?>


                    </tbody>
                </table>

            </div>
        </div>
    </div>
</section>
<!--/  end =========================================================-->

<!-- Latest compiled and minified JavaScript -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!--<script src="js/custom.js"></script>-->

</body>
</html>
