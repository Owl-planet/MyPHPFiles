<?php 
$arr = null;
$isArr = is_array($arr);
var_dump($isArr);

if(is_array($arr)){
    echo 'dizi işlemleri yapılıyor.';
} else {
    echo 'değişken dizi türünde değil';
}
?>