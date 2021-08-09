<?php 

require_once("db_con.php");

$id= $_REQUEST['id'];

$sql= "DELETE FROM students WHERE id='$id'";

$mysqli-> query($sql);

//echo $mysqli->affected_rows."Product deleted";
header("Location: student.php");



 ?>