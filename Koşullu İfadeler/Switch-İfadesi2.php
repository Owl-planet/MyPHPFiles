<?php 
$a = 2;

switch ($a):
    case 0:
        echo '$a değişkeni değeri 0 dır';
        break;
    case 1:
        echo '$a değişkeni değeri 1 dir';
        continue;
    case 2:
        echo '$a değişkeni değeri 2 dir';
        return;
    default:
        echo 'Herhangi bir eşleşme bulunamadı';
        break; 
    endswitch;
?>