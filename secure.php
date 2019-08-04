<?php
class secure{
public __constructor($user,$mdp){
$this->connect($user, $mdp);
}
public function connect($mdp, $user){
  if($mdp <= 72){
    $hash = password_hash($mdp, PASSWORD_BCRYPT);
    $hashbdd = '';
    return password_verify($hash_bdd, $hash); // return TRUE or FALSE
  }
  else{
    return 'needed < 72';
  }
}
}

?>

