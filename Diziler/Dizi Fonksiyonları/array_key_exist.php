<?php 
$citis = [26 => 'Eskişehir', 16 => 'Bursa', 6 => 'Ankara', 82 => null];
if(array_key_exists(26, $citis))
    echo 'Eskişehir listede var.';
else
    echo 'Eskişehir listede yok.';
echo '<br>';
if(isset($citis[26]))
    echo 'Eskişehir listede var.';
else
    echo 'Eskişehir listede yok.';

$citis = [26 => 'Eskişehir', 16 => 'Bursa', 6 => 'Ankara', 82 => null];
if(array_key_exists(82, $citis))
    echo '82 plakalı şehir listede var.';
else
    echo '82 plakalı şehir listede yok.';
echo '<br>';

if(isset($citis[82]))
    echo '82 plakalı şehir listede var.';
else
    echo '82 plakalı şehir listede yok.';
?>