<?php 
$a = 6;
if($a == 5){
    echo "\$a'nın değeri 5'e eşittir.";
} else{
    echo "\$a'nın değeri 5'e eşit değildir.";
}

if($a == 5)
    echo "\$a'nın değeri 5'e eşittir.";
else
    echo "\$a'nın değeri 5'e eşit değildir.";

if($a == 5):
    echo "\$a'nın değeri 5'e eşittir.";
else:
    echo "\$a'nın değeri 5'e eşit değildir.";
endif;
?>