<?php 

class Student{

	private $name;
	private $email;
	private $number;

	public function setInfo($name,$email,$number){
		$this->name = $name;
		$this->email = $email;
		$this->number = $number;
	}
	public function getInfo(){
		$x= $this->name ;
		$y= $this->email;
		$z= $this->number;

		echo "<h3> Here is all of information </h3>";
		echo "Name: $x <br>";
		echo "Name: $y <br>";
		echo "Name: $z <br>";
	}
}

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Form by php</title>
  </head>
  <body>

  	<?php if($_SERVER['REQUEST_METHOD']=='POST'){

  	$name = $_POST['name'];
  	$email = $_POST['email'];
  	$number = $_POST['number'];

  	$st   = new Student;

  	$st->setInfo($name,$email,$number);
  	$st->getInfo();


  	} 

  	?>
    <h1>Form by php</h1>
    <div class="container-fluid">
    	<div class="row"> 
  <form action="" method="post">
  <div class="col-md-2">
    <label class="form-label">Full Name</label>
    <input type="text" name="name" class="form-control" >
  </div>
   <div class="col-md-2">
    <label class="form-label">Email address</label>
    <input type="email"name="email" class="form-control" >
  </div>
   <div class="col-md-2">
    <label class="form-label">Mobile Number</label>
    <input type="number" name="number" class="form-control" >
  </div>

  <button type="submit" class="btn btn-sm mt-1 btn-primary">Submit</button>


  </form>
	</div>
    </div>
    
  </body>
</html>


