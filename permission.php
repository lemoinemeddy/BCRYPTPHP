<?php
class permission{
public __constructor($user,$mdp){
$this->user = $user;
$this->mdp = $mdp;
}
public function try_signin($this->user, $this->mdp){
  if($mdp <= 72){
    $hash = password_hash($this->mdp, PASSWORD_BCRYPT);
    $hashbdd = '';
    $response = password_verify($hash_bdd, $hash); // return TRUE or FALSE
    $payload = $user + time();
    $token = password_hash($payload, PASSWORD_BCRYPT)
    return '{
    "auth":"'.$response.'",
    "token":"'.$token.'",
    "message":"that right"
}';
}else{
     return '{
    "auth":"err",
    "token":"empty",
    "message":"ERROR 72"
}';
  }
}
}

?>

