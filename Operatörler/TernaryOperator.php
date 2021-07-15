<?php 
$a = 5;
$isGreaterThanTwo = ($a > 2 ? true : false);
var_dump($isGreaterThanTwo);

$isLoggedIn = true;
$message = "Merhaba ".($isLoggedIn ? 'Kullanıcı' : 'Ziyaretçi');
echo $message;
?>
