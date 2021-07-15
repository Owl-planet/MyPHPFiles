<?php 
$arr = ['resim1.jpg', 'resim2.jpg', 'resim3.jpg', 'resiM10.jpg', 'resim21.jpg'];
natsort($arr);
var_dump($arr);

$arr = ['resim1.jpg', 'resim2.jpg', 'resim3.jpg', 'resiM10.jpg', 'resim21.jpg'];
natcasesort($arr);
var_dump($arr);
?>