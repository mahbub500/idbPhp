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
    <style>
      .valid{
            height: 52px;
          border: 3px solid green;
          width: 220px;
          font-size: xx-large;
          color: black;  
         }
          .invalid{
            height: 52px;
          border: 3px solid red;
          width: 220px;
          font-size: xx-large;
          color: black; 
          margin: 0 auto; 
         }
    </style>
    <title>Hello, world!</title>
  </head>
  <body>
  	<?php 
  	if (isset($_POST['LOGIN'])) {
  		$data = extract($_POST);
  		$sql= " SELECT * FROM users WHERE user='$userName' AND  users_password ='$password' ";
  		$result = $mysqli->query($sql);
  		$final = $result->num_rows;

  		if ($final == 1) { 
  		  echo" <div class=\"container\">
       <div class=\"row\">
         <div class=\"col-md-6\">
           <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
  <strong>Congratulations!  </strong> All of your your credentials are match
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
         </div>
       </div>
     </div> ";

  		}else{
  
    echo" <div class=\"container\">
       <div class=\"row\">
         <div class=\"col-md-6\">
           <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
  <strong>User or password </strong> You should check check your unser name of password.
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
         </div>
       </div>
     </div> ";


  	}
  		
  	}

  	 ?>

     
    <div class="container">
    	<div class="row">
    		<div class="col-md-6">
         

    <h1>Hello, world!</h1>
   <form action=" <?php echo $_SERVER['PHP_SELF'] ?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Users name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="userName"  placeholder="Enter your User name">
    <small id="emailHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" name="LOGIN" class="btn btn-primary">Submit</button>
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