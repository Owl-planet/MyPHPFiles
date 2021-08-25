<?php 
function sum($nums){ // Sum adında ve $variables değeri alan bir fonksiyon oluşturduk.
    $total = 0; // Total aldında ve değeri 0 olan bir değişken oluşturduk.
    foreach ($nums as $key => $value) 
    // Foreach ile gelen parametrenin tüm değelerinin dönmesini istedik
        $total += $value; // Dönen her değeri total daki değerle toplamasını istedik.
    return $total; // sonra total değişkenini döndürdük.
}

$expensesList = [1500,1000,4000,751,751];
// expensesList adında bir list oluşturduk ve içine toplamı 8002 dönmesini gereken
// sayılar atadık.


if(function_exists('sum')){ // fonksiyonun varlığını kontrol eden if bloğu oluşturduk.
    echo sum($expensesList); // Fonksiyon varsa expensesList listesini göndermesini
    // istedik.
    echo "<br><b>Sum</b> fonksiyonu kullanıldı."; // Sonra kullanıcıya bilgi verdik.
} else { // Eğer sonuç olumsuz olursa bu bloğun çalışmasını istedik.
    $total = 0; // total adında bir değişken oluşturup değerini 0 yaptık
    foreach ($expensesList as $key => $value) // foreach ile aynı işlevi uyguladık.
        $total += $value;
    echo $total;
}
?>