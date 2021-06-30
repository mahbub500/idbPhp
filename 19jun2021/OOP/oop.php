<?php 
class employ{
	private $name;
	public $email;
	public $number;

	public function setName($userName){
		$this->name = $userName;
	}
	public function getName(){
		return $this->name ;
	}
	public function sayHello(){
		echo "Hello, My name is {$this->getName()} <br>"	;
	}
}
echo "<pre>";
$employ1 = new employ;

$employ1->setName("Mahbubur Rahman");
$employ1->email = "mahbubmr500@gmail.com";
$employ1->number = "01829493782";
print_r($employ1);
$employ1->sayHello();

$employ2 = new employ;

$employ2->setName("Maruf Rahman");
$employ2->email = "maruf@gmail.com";
$employ2->number = "01715641187";
echo "<pre>";
print_r($employ2);
print_r($employ2->getName()."<br>");
$employ2->sayHello();
print_r($employ2->email."<br>");
print_r($employ2->number."<br>");

 ?>