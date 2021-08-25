<?php 
function display($number){
    if($number > 5)
        return;
    echo $number."<br>";
    display($number + 1);
}
display(1);
?>