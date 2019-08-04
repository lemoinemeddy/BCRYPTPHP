<?php
class member{
public __constructor($user,$mdp){
$this->try_connect($user, $mdp);
}
public function try_connect($user, $mdp){
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

