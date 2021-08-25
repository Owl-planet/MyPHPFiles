<?php 
function searchStaffById($staffId){ 
    // searchStaffById adında ve $staffId parametresi alan bir fonksiyon tanımlıyoruz.
    static $staffArr = array(); 
    // Static anahtar yapısı ile değişkeni ön bellekte ram oluşturuyoruz.
    if(isset($staffArr[$staffId])){
        // Gelen değer staffArr içinde var mı ona bakar.
        $staff = $staffArr[$staffId];
        // Staff adında bir değişken oluşturuyoruz ve staffArr içindeki ?. değeri
        // atıyoruz.
        echo $staff['name'].' Kişi bilgisi ön bellekten getirildi. <br>';
        // echo ile bilgi veriyoruz, name personel olduğu için
        // 'Personel' yazacak sonra 'Kişi bilgisi ön bellekten getirildi. ' yazıp
        // <br> yapacak.
        return $staff;
        // Sonra staff içindeki değeri döndürecek.
    }
    $getStaffFromDb = array('name'=>'Personel : '.$staffId);
    // getStaffFromDb adında bir değişken oluşuturuyoruz.
    // ve bunun değeri array, array içinde 'name' personele eşit olacak
    // personel karışında ise staffId içindeki değer yazacak.
    echo $getStaffFromDb['name'].' Kişi bilgisi <b>veri tabanından</b> getirildi. <br>';
    
    $staffArr[$staffId] = $getStaffFromDb; // 1 => getStaffFromDb
    return $getStaffFromDb;
}

searchStaffById(1);
searchStaffById(1);
searchStaffById(1);
searchStaffById(2);
searchStaffById(2);
searchStaffById(2);


/*
Hesaplamada, önbellek; veri depolayan bir donanım veya yazılım bileşenidir, 
böylece bu veriler için gelecekteki talepler daha hızlı bir şekilde yerine getirilebilir; 
Bir önbellekte depolanan veriler daha önceki bir hesaplamanın sonucu veya başka bir yerde depolanan verilerin bir kopyası olabilir.
 */
?>