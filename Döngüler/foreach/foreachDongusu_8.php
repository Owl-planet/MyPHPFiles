<?php 
$arr = [0];
foreach($arr as $key => &$value){
    echo $value.'<br>';
    $arr[1] = 1;
}
?>