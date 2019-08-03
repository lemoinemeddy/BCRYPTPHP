<?php

class Secure{

public $mdp;
public $hash;

public function __construct($mdp){
  $this->mdp = $mdp;
}

public function getHash(){
  if($this->mdp <= 72){
    return password_hash($this->mdp, PASSWORD_BCRYPT);
  }
  else{
    return false;
  }
}
public function getCompare($hash){
  return password_verify($this->mdp, $hash); // return TRUE or FALSE
}
}
$secure = new Secure("password");
$hash = $secure->getHash();
$response = $secure->getCompare($hash);

echo 'hash is ' .$hash. ' and response is ' .$response;


?>
