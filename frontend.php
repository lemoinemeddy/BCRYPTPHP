<?php
require 'secure.php';
$user = new permission();

if(isset($_POST['user']) && isset($_POST['mdp']) && $_POST['params'] == "login"){
$user->try_signin($_POST['user'], $_POST['mdp']);
echo $user;
}
?>
