<?php 
// Örnek 1
$arr = ['İstanbul', 'Ankara', 'Bursa', 'İzmir'];
$arr[] = 'Eskişehir';
var_dump($arr);

// Örnek 2
$arr2 = ['İstanbul', 'Ankara', 'Bursa', 'İzmir'];
$arr2[43] = 'Eskişehir';
var_dump($arr2);

// Örnek 3
$arr3 = ['İstanbul', 'Ankara', 'Bursa', 'İzmir'];
$arr3[0] = 'Eskişehir';
var_dump($arr3);

// Örnek 4
$arr4 = ['İstanbul', 'Ankara', 'Bursa', 'İzmir'];
$arr4['Baskent'] = 'Ankara';
var_dump($arr4);

// Örnek 5
$arr5 = ['İstanbul', 'Ankara', 'Bursa', 'İzmir'];
array_push($arr5, 'Eskişehir','Sakarya','Yalova');
var_dump($arr5);
?>