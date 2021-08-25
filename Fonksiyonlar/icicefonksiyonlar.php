<?php 
function math(){
    function sum($a,$b){
        return $a+$b;
    }
    function sub($a,$b){
        return $a-$b;
    }
    function div($a,$b){
        return $a/$b;
    }
    function multi($a,$b){
        return $a*$b;
    }
    function mod($a,$b){
        return $a%$b;
    }
    echo "Matematik fonksiyonları tanımlandı, kullanılmaya hazır.";
}

math();
var_dump(sum(3,2));
var_dump(sub(3,2));
var_dump(div(3,2));
var_dump(multi(3,2));
var_dump(mod(3,2));
?>