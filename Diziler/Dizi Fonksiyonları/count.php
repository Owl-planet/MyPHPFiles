<?php 
$fruits = ['Portakal', 'Elma', "Muz", 'Kiraz'];
$result = count($fruits);
var_dump($result);

$cars = [
    'german' => ['audi','mercedes','bmw','volkswagen'],
    'japan' => ['honda', 'toyota', 'mitsubishi', 'mazda'],
    'american' => ['chevrolet','ford','chrysler','GMC']
];

$result2 = count($cars);
$result3 = count($cars,COUNT_RECURSIVE); // Son parametre key içindeki valuelarıda sayar
var_dump($result2);
var_dump($result3);
?>