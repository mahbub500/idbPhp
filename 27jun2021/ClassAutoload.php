<?php
// require_once ("member.php");
// require_once ("topic.php");

function loadClass($class_name){
    include "$class_name.php";
}
spl_autoload_register("loadClass");

        $member = new member();
        $topic = new topic();
?>