<?php 
$fullName = "Albus Percival Wulfric Brain Dumbledore";
$nameArr = explode(' ', $fullName);
var_dump($nameArr);

$fullName = "Albus Percival Wulfric Brain Dumbledore";
$nameArr = explode(' ', $fullName,4);
var_dump($nameArr);

$fullName = ["Albus","Percival","Wulfric","Brain","Dumbledore"];
$nameArr = implode('-', $fullName);
var_dump($nameArr);
?>