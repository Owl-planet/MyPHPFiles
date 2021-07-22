<?php 
$arr = array(1,2,3,4);
foreach($arr as $key => &$value)
    $value = $value * 2;
var_dump($arr);
$value = 26;
var_dump($arr);
?>