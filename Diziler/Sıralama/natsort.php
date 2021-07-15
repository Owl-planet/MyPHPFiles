<?php 
$arr = ['resim1.jpg', 'resim2.jpg', 'resim3.jpg', 'resim10.jpg', 'resim21.jpg'];
sort($arr);
var_dump($arr);

$arr = ['resim1.jpg', 'resim2.jpg', 'resim3.jpg', 'resim10.jpg', 'resim21.jpg'];
natsort($arr);
var_dump($arr);
?>