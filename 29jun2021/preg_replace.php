<?php
// $text = "This is a link to http://www.wjgilmore.com/.";
// echo preg_replace("/http:\/\/(.*)\//", "<a href=\"\${0}\">\${0}</a>",
// $text);
?>

<?php
$draft = "In 2010 the company faced plummeting revenues and scandal tumi.";
$keywords = array("/faced/", "/plummeting/", "/scandal/","/tumi/");
$replacements = array("celebrated", "skyrocketing", "expansion","----");
echo preg_replace($keywords, $replacements, $draft);
?>