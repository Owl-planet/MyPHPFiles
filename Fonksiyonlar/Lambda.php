<?php 
$greet = function ($str) {
    echo '<pre>'.$str.'</pre>';
};
$msg = 'Wake up, Neo...';

$greet($msg);
var_dump($greet);
?>