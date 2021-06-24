<?php 
$a = 10;
$b = 10;
$c = 26;
$bool = $a == $b || $c > 30;
echo $bool;

$a = 10;
$b = 10;
$c = 26;
$bool = $a == $b or ($c > 30 && 10==10);
echo $bool;
?>