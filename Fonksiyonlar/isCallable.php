<?php 
function sayMyName(){
    $name = "Jhon Smith";
    return $name;
}

$nameWriterFuncName = 'sayMyName';
if(is_callable($nameWriterFuncName))
    echo $nameWriterFuncName();
?>