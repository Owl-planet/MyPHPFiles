<?php
$day = "pazar";
$month = "ocak";
$temperature = -5;
if($month == "aralık" || $month == "ocak" || $month == "şubat"){
    echo "Kış aylarıdayız";
    if($day == "pazar" && $temperature < 1)
        echo "Hava soğuk";
}
?>