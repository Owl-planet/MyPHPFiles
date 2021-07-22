<?php 
$staffArr = array(
    array('Mehmet Ali',33,'Yazılım Geliştirici'),
    array('Alparslan',29,'Arayüz Geliştirici'),
    array('Pelin',24,'Grafik Tasarımcı'),
    array('Kürşad',24,'Kullanıcı Deneyimi Tasarımcısı')
);
$rowNumber = 1;
foreach($staffArr as $key => list($loopName,$loopAge,$loopPosition)){
    echo $rowNumber.'<br>';
    echo 'Personel Adı : '.$loopName.'<br>';
    echo 'Personel Yaşı : '.$loopAge.'<br>';
    echo 'Personel Mesleği : '.$loopPosition.'<br>';
    echo '<hr>';
    $rowNumber++;
}
var_dump($loopName);
?>