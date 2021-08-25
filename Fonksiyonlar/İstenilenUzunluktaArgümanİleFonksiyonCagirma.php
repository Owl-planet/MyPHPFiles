<?php 
function viewStaffList(){ // viewStaffList adında bir fonksiyon oluşturuyoruz.
    $staffNum = func_num_args(); // Toplam fonksiyon argüman numarası
    // Eğer fonksiyona hiç argüman gönderilmediyse 0 döner.
    echo "Şirkette kaç kişi var : ".$staffNum;
    if($staffNum < 1) // Eğer listede kimse yoksa
        return 'Personel bilgisi bulunamadı.'; // Bir uyarı mesajı döndür.
    $staffArr = func_get_args(); // Fonksiyondaki argümanlarını al
    echo "Şirketteki kişiler"."<br>".var_dump($staffArr);
    $staffListView = '<br>Yazılım geliştirme ekibi</br><hr>';
    foreach($staffArr as $key => $value) // StaffArr içindeki değeleri key ve
    // Value olarak foreach et.
        $staffListView.=($key+1).' : '.$value.'<br>'; // StaffListView değişkeni
        // İçerisine key değerinin 1 artılmş halini ve sonra value değerini
        // Yazmasını istemiş.

    $firstStaff = func_get_arg(0);
    $staffListView.='<hr> <b>Takım Lideri : </b> '.$firstStaff;
    return $staffListView;
}
echo viewStaffList("Mehmet ali Uysal", 'Hasan Basri Balcı', 'Ahmet Saraç');
?>