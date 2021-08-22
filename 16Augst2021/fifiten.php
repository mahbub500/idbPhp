<?php 
$mysqli = @new mysqli("localhost", "root", "", "fifteenaug");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Manufacture entry </title>
  </head>
  <body>
    <?php 
    if (isset($_POST['submit'])) {
     extract($_POST);
     $sql = "CALL insert_procedure('$name','$adress','$contact_no')" ;
      
      // $sql = "INSERT INTO manufacture (ID, name, adress, contact_no, create_at) VALUES (NULL, '$name', '$adress', '$contact_no', current_timestamp()) ";   
      $mysqli->query($sql);
      
      $final = $mysqli->affected_rows;
      if ($final == 1) {
            echo " Ok ";
      }else{
      echo " Good Bye ";
    }      
    }
     ?>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
    <h1>Hello, world!</h1>
   <form action=" <?php echo $_SERVER['PHP_SELF'] ?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Company Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name"  placeholder="Enter your Company Nmae">    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Company Adress</label>
    <textarea name="adress" class="form-control" id="" cols="20" rows="5"></textarea>
    
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Company Mobile Number</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="contact_no"  placeholder="Enter your Company Mobile Number">    
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit Data</button>
</form>
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