<?php

class Secure{

public $mdp;
public $hash;


public function getHash($mdp){
  if($mdp <= 72){
    return password_hash($mdp, PASSWORD_BCRYPT);
  }
  else{
    return false;
  }
}
public function getCompare($mdp, $hash){
  return password_verify($mdp, $hash); // return TRUE or FALSE
}
}
$senha = 'bomdia'; //Mon mot de passe
$secure = new Secure();// J'instancie ma class
$hash = $secure->getHash($senha);//Je souhaite le hash de "bomdia" soumis par l'utilisateur
$response = $secure->getCompare($senha, $hash);// Maintenant je veux comparer mon mot de passe et son hash avec par ex  une bdd
echo 'hash is ' .$hash. ' and response is ' .$response;


?>
