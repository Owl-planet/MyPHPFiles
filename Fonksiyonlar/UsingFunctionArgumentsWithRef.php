<?php 
function addLastname(&$str){
    $str.=' Uysal';
    return $str;
}
$fullName = 'Mehmet ali';
echo addLastname($fullName);
var_dump($fullName);
?>