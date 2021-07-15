<?php 

// Örnek 1
$arr = ['İstanbul', 'Ankara', 'İzmir', 'Bursa'];
unset($arr[0]);
$arr = array_values($arr);
var_dump($arr);

// Örnek 2
$arr2 = ['İstanbul', 'Ankara', 'İzmir', 'Bursa'];
unset($arr2[0],$arr2[2],$arr2[3]);
$arr2 = array_values($arr2);
var_dump($arr2);

// Örnek 3
$arr3 = [34 => 'İstanbul', 6=> 'Ankara', 35 => 'İzmir', 16 => 'Bursa'];
array_splice($arr3,2);
var_dump($arr3);

// Örnek 4
$arr4 = [34 => 'İstanbul', 6=> 'Ankara', 35 => 'İzmir', 16 => 'Bursa'];
array_shift($arr4);
var_dump($arr4);

// Örnek 5
$arr5 = [34 => 'İstanbul', 6=> 'Ankara', 35 => 'İzmir', 16 => 'Bursa'];
array_pop($arr5);
var_dump($arr5);

// Örnek 6
$cities = ['İstanbul', 'Ankara', 'İzmir', 'Bursa'];
$citiesInMarmara = ['İstanbul', 'Bursa'];
$arr6 = array_diff($cities, $citiesInMarmara);
var_dump($arr6);

// Örnek 7
$arr7 = ['İstanbul', 'Ankara', 'İzmir', 'Bursa', 'Bursa'];
$newArr7 = array_unique($arr7);
var_dump($newArr7);
?>