<?php 
	class Student{
		   private $data;
		public function __construct($file){
				$data = file($file);
				$this->data = $data;
				//return $this->data;
		}
		public function result($stid){	 
			foreach($this->data as $item){
				list($id, $name, $batch, $result) = explode("," , $item);
				if($id == $stid){
					echo "ID: ". $id . " Name: ". $name. $batch . $result . "<br>";
					break;
				}
			}			
		 }
	}

	$stobj = new Student("result.txt");

 ?>
<?php 
	if(isset($_GET['submit'])){
		$id = $_GET['stid'];
		$stobj->result($id);
	}
 ?>
<br><br>
 <form action="">
 	<select name="stid">
 		<option value="1">Yearul</option>
 		<option value="2">Imran</option>
 		<option value="3">Noor</option>
 	</select>
 	<input type="submit" name="submit" value="SHOW RESULT">
 </form>