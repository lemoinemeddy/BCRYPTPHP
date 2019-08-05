<?php
require 'permission.php';

if(isset($_POST['user']) && isset($_POST['mdp']) && $_POST['params'] == "login"){

$user = new permission($_POST['user'], $_POST['mdp']);
$response = $user->try_signin();
echo $response;
}
?>
