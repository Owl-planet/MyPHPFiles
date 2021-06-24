<?php 
$day = "pazar";
if($day=="cumartesi" || $day=="pazar"){
    echo "Hafta sonu, günlerden ".$day;
} else{
    echo "Hafta içi, günlerden".$day;
}
?>