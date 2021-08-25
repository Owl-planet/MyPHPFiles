<?php 
declare(strict_types=1);
function sum(int $a, int $b):string{
    return 'İki değerin toplamı : '.($a+$b);
}
echo sum(2,3);
?>