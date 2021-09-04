<?php 
require_once "AnimalClass.php";
require_once "MammalsClass.php";
require_once "DogClass.php";

try{
    $aDog = new DogClass();
    $aDog -> makeNoise();
    $aDog -> sleep();
    echo "Köpekler ".$aDog->getFamily().' familyasındandır. '.$aDog->getFamily().' familyası '.$aDog->getReproduction().' ile ürer.<br>';
    echo "benim adım : ".$aDog -> getName();
    var_dump($aDog);
} catch(Exception $e){
    echo $e -> getMessage();
}
?>