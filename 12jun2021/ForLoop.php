	<h1> Numbaric Index array</h1>
<?php 
$sites = array("www.google.com"," www.facebook.com","www.gmail.com");
foreach (  $sites as $site) { ?>
	
 <a href="http:// <?php echo $site   ?>; "  > <?php echo $site  ?> <br> </a>

<?php 
} ?>
	<h1> Associative array</h1>
	<?php 
	$resources = array("PHP"=>"www.php.net", "mysql"=>"www.syql.com","Php Resources"=>"www.phpresources.com");
	foreach ($resources as $res => $val) {?>
		<a href=" <?php echo $val ?> "> <?php echo $res ?> <br> </a>
		
	<?php 
	}
	 ?>	
