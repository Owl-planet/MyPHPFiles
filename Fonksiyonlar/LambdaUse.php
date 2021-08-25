<?php 
$currentHour = (int) date('H');
var_dump($currentHour);

$timeOfDay = '';
if ($currentHour < 5)
    $timeOfDay = 'İyi geceler';
elseif ($currentHour < 12)
    $timeOfDay = "Günaydın";
elseif ($currentHour < 16)
    $timeOfDay = "Tünaydın";
elseif ($currentHour < 24)
    $timeOfDay = 'İyi akşamlar';

$greet = function($name) use ($timeOfDay){
    return $timeOfDay.' '.$name;
};

echo $greet('Aybüke');
echo '<br>';
echo $greet('Ömer');
?>