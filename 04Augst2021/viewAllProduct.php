<?php 


$mysqli = @new mysqli("localhost", "root", "", "wdp_company");

if($mysqli->connect_errno){
  echo "Database Connection Problem<br>";
  echo $mysqli->connect_error;
  exit();
}

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Manufacturers </title>
  </head>
  <body>
    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $id = $_POST['company'];
       
     
      $sql = "DELETE FROM `manufacture` WHERE `manufacture`.`ID` = '$id'";
      $result = $mysqli->query($sql);
  if ($mysqli->affected_rows) {
    echo " Manufacture Deleted Success Fully ";
  }
      
      
      
    }

     ?>
    <div class="container">
      <div class="row">
        
          <h1>List of All Product those are between 200 and 400 </h1>
        <div class="col-md-6">
          <table class="table">
      <?php 
      $sql = "SELECT * FROM `sproduct`";
      $products = $mysqli->query($sql);
      // $products = $result->fetch_assoc();      
      // var_dump($products);
        ?>
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      
    </tr>
  </thead>
  <tbody>
    <?php $sl= 1; ?>
    <?php foreach ( $products as  $product) { ?>
    <tr>                      
      <th scope="row"> <?php echo $product['ID']; ?> </th>
      <th scope="row"> <?php echo $product['name']; ?> </th>
      <th scope="row"> <?php echo $product['price']; ?> </th>
      
    </tr>
    <?php } ?>
  </tbody>
</table>

        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>