<?php 
$arr = ['İstanbul', 'Ankara', 'İzmir', 'Bursa', 'Eskişehir'];
rsort($arr); // z -> a
var_dump($arr);
// Elemanlar numerik olsay idi büyüklüğe göre sıralanacaktı
?>