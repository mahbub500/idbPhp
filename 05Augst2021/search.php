<?php $db = @new mysqli("localhost", "root", "", "idb_bisew"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search </title>
</head>
<body>
  <?php
// If the form has been submitted with a supplied last name
if (isset($_POST['lastname'])) {


// Query the employees table
$x = $_POST['lastname'];
$result = $db->query("SELECT name,url FROM bookmarks WHERE description LIKE '%$x%'");


// If records found, output them
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc())
echo $row['name'] ." <br> ". $row['url']  ." <br> ";
} else {
echo "No results found.";
}
}
?>
<p>
Search the employee database:<br />
<!-- <form action="<?php /*echo $_SERVER['PHP_SELF']*/ ?>" method="post"> -->
<form action="search.php" method="post">
Last name:<br>
<input type="text" name="lastname" size="20" maxlength="40" value=""><br>
<input type="submit" value="Search!">
</form>
</p>
</body>
</html>
