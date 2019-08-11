<?php
//Im using sha1 for the first time, but you can use BCRYPT too
//For question 57450675 of stackoverflow

$key = 'm0WWicy0pw'; // im store my key here bot & php
$salt = '3CmvomiaW1'; // im store my salt here bot & php
$datas=68; //only bot


$myarraybot = sha1(array($key, $salt,$datas)); // only bot 

$request=@file( "https://example.com/checkhash.php?id=".$myarraybot."&datas=68"); //only bot

So now you are a sha1 hash and the datas parameter in you php application, you need to compare  it, if it's com from autorised machine.

//only php application
$frombot = $_GET['id'];
if($frombot == sha1(array($key, $salt,$_GET['datas']))){
echo 'acces autorised';
$myarray = array($key, $salt,$_GET['datas']);
//PART BCRYPT
$myhash = password_hash($myarray, PASSWORD_BCRYPT);// Now im want to get the hash by using password_hash function of php.

//Now im need to store  $myhash, and $_GET['datas'] in json file for example
$json = '{$myhash: $myarray[2]}';

echo $storehash; //response for the bot
}

Now, when im receive a hash by $_GET method, for example, im need to compare this :)

//for decrypt im use password_verify function of php.
$decrypt = password_verify($storedhash, $_GET['id']);

// $decrypt return TRUE or FALSE

if($decrypt == 'TRUE')
{
$request  = json_decode($json);
print $request->{$_GET['id']}; its my data
}
//only php application end

?>
