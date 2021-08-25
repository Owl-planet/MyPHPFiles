<?php 
declare(strict_types=1);
function sum(int $a, int $b):string {
    return (string) ($a+$b).(4+4);
}
echo sum(2,3);
?>