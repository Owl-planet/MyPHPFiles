<?php 
function sayMyName(){
    $name = "Jhon Smith";
    return $name;
}

$defFuncList = get_defined_functions();

$userDefFuncList = $defFuncList['user'];
$preDefFuncList = $defFuncList['internal'];

var_dump($userDefFuncList);
var_dump($preDefFuncList);
?>