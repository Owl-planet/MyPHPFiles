<?php 
$firstName = 'Mehmet Ali';
$lastName = "Uysal";
$arr = ['$firstName','$lastName'];
$say = count($arr);
while($say != count($arr)){
    echo $arr;
}
function sayMyFullName(){
    
    global $firstName,$lastName;
    return $firstName.' '.$lastName;
}
function sayMyFullName2(){
    return $GLOBALS['firstName'].' '.$GLOBALS['lastName'];
}

echo sayMyFullName();
echo sayMyFullName2();
?>