<?php 
$numberOfAttempts = 0;
$pinNumber = 1234;
$validatePinNumber = false;

$pinArr = [1111,2222,333,1234];

do{
    echo 'Lütfen PIN giriniz.<br>';
    if($pinNumber = $pinArr[$numberOfAttempts]){
        $validatePinNumber = true;
        break;
    }
    echo 'Pin Hatalı<br><br>';
    $numberOfAttempts++;
} while ($validatePinNumber==false && $numberOfAttempts < 3);
if($validatePinNumber==true)
    echo 'Hoşgeldiniz';
else
    echo 'Kart Kitlendi';
?>