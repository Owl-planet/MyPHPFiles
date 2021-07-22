<?php 
$numbers = [10,20,30,"10"];
$arrKey = array_keys($numbers);
$arrKey2 = array_keys($numbers,10);
$arrKey3 = array_keys($numbers,10,true);
var_dump($arrKey);
var_dump($arrKey2);
var_dump($arrKey3);
?>