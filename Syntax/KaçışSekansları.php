<?php 
$Username = "Honor";

$text1 = "PHP \test\ uygulaması";
echo $text1;
// PHP est\ uygualaması
$text2 = "PHP \\test\ uygulaması";
echo $text2;
// PHP \test\ uygulaması
$text3 = "PHP \"test\" uygulaması";
echo $text3;
// PHP "test" uygulaması
$text4 = 'PHP \'test\' uygulaması';
echo $text4;
// PHP 'test' uygulaması
$text5 = "$Username değişkenindeki değer $Username";
echo $text5;
// Honor değişkenindeki değer Honor
$text6 = "\$Username değişkenindeki değer $Username";
echo $text6;
// $Username değişkenindeki değer Honor

// 'Tek tırnak' içinde belirtilen değişkenler çalışmaz.
?>