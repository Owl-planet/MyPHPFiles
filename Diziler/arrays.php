<?php 
// Empty array
$arr1 = array();
var_dump($arr1);

// Key(int)=>Value
$arr2 = array(0 => 'Istanbul', 1 => 'Ankara', 2 => 'Izmir', 3 => "Eski Şehir");
var_dump($arr2);

// Values
$arr3 = array('Istanbul', 'Ankara', 'Izmir', "Eski Şehir");
var_dump($arr3);

// Key(str)=>Value
$arr4 = array('City' => 'Istanbul', 'Country' => 'Turkey');
var_dump($arr4);

// ŞAG
$arr5 = array('City' => 'Istanbul', 'City' => 'Ankara', 'Country' => 'Turkey');
var_dump($arr5);

// [key=>value]
$arr6 = [0 => 'Istanbul', 1 => 'Ankara', 2 => 'Izmir', 3 => "Eski Şehir"];
var_dump($arr6);

// [values]
$arr7 = ['Istanbul', 'Ankara', 'Izmir', "Eski Şehir"];
var_dump($arr7);

// ŞAG
$arr8 = [0 => 'Istanbul', 1 => 'Ankara', 2 => 'Izmir', 3 => "Eski Şehir", 50 => 'Samsun' , "Çanakkale"];
var_dump($arr8);

// Erişim
$arr9 = [0 => 'Istanbul', 1 => 'Ankara', 2 => 'Izmir', 3 => "Eski Şehir", 50 => 'Samsun'];
var_dump($arr9[50]);
var_dump($arr9{1});
?>