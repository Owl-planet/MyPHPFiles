<?php 
$a = 2;
switch($a){
    case 0:
        echo "$a değişkeni değeri 0'dır";
        break;
    case 1:
    case 2:
        if($a == 1)
            echo "$a değişkeni değeri 1dir";
        else
            echo "$a değişkeni değeri 2dir";
        break;
    default:
        echo "eşleşme bulunamadı";
        break;

}
?>