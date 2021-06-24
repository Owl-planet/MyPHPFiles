<?php 
$name = "Onur";
$newName = &$name;
echo $newName;
// & : Referans al


$name2 = "Jhon";
$newName2 = &$name2;
$name2 = "Steve";
echo $newName2;

$name3 = "Jesse";
$newName3 = $name3;
$name3 = "Micheal";
echo $newName3;

$name4 = "Jesse";
$newName4 = $name3;
$nawName4 = "Micheal";
echo $newName4;
?>