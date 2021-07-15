<?php 
$germanCars = [1 => 'Mercedes', 2 => 'BWM' , 3 => 'Audi', 4 => 'Volkswegen', 5 => 'Opel'];
$result = array_reverse($germanCars, true); // 2 par true ise anahtarları korur false ise korumaz (listeyi ters çevirir)
var_dump($result);
?>