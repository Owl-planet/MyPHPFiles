<?php 
$fullNameStr = "Albus Percival Wulfric Brain Dumbledore";
$nameArr = explode(' ', $fullNameStr);
$surNameStr = end($nameArr);
array_pop($nameArr);
$nameStr = implode(' ', $nameArr);
echo "Karakterin adı : $nameStr <br> Karakterin Soyadı : $surNameStr";
?>