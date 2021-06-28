<?php
class Member{
	public $username = "";
	private $loggedIn = false;
	public function login(){
		$this->loggedIn = true;
	}
	public function logout(){
		$this->loggedIn = false;
	}
	public function isLoggedIn(){
		return $this->loggedIn;
	}
}
$mem1= new Member;
$mem1->username= "Abu Sayed Rana";
$mem1->login();
// $mem1->logout();
$mem1->isLoggedIn();

if ($mem1->isLoggedIn()) {
	echo " Hello ";
} else{
	echo "Good Bay";
}



 
?>	