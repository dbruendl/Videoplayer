<?php
// setup the autoloading
require_once './vendor/autoload.php';

// setup Propel
require_once './generated-conf/config.php';






class videoplayerKlasse(){
	$username;
	$email;
	$passwort;
	
	public function __construct($username,$email,$passwort) {
		$this->username = $username;
		$this->email = $email;
		$this->passwort = $passwort;
	}
	
	public function createUser($username,$email,$passwort){
		$u = new User();
		
		
		$u->setUsername($username);
		$u->setEmail($email);
		$u->setPasswort($passwort);
		$u->save();
	}
	
	public function logIn($username,$passwort){
		$u = UserQuery::create()->find($username);
		if($passwort == $u->getPasswort){
			include 'videoplayer.php';
		}else{
			echo 'Das Passwort stimmt nicht mit dem Usernamen ueberein';
		}
	}
}
?>