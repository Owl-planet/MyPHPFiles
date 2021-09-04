<?php 
$file = "logd.txt";
try {
    if(!file_exists($file)){
        throw new Exception('Dosya bulunamadı', 1);
    }
    $handle = @fopen($file, "w+");

    if(!$handle){
        throw new Exception('Dosya Açılmadı', 2);
    } else {
        echo '<h4>Akış Açıldı</h4>';
    }
} catch(Exception $e){
    echo '<h5>',
        'Hata Mesajı: ', $e->getMessage(), '<br>',
        'Hata Kodu: <b>',$e->getCode(), '</b><br>',
        'Dosya: ',$e->getFile(),'<br>',
        'Satır: ',$e->getLine(),
        '</h5>';
} finally{
    if(isset($handle) && is_resource($handle)){
        fclose($handle);
        echo "<h4>Akış kapatıldı</h4>";
    }
}
?>