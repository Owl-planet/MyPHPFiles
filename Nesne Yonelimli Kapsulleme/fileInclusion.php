<?php 
require_once './InfoHiding.php';

try {
    $userObj = new UserClass();
    $userObj -> setUserName('OnurIL');
    $userObj -> setPass('Onufffffffff454Sd');
    $userObj -> setFullName('Onur Ekinci');


    $msg = '<font size="5" color="green">Kullanıcı nesnesi başarıyla türetildi ve veri tabanına yazıldı.</font><hr>'.'Kullanıcı adı : '.$userObj->getUserName().'<br>'.'Kullanıcı parolası (MD5) : '.$userObj->getPass().'<br>'.'Kullanıcı tam ismi : '.$userObj->getFullName().'<br>';
    echo $msg;
} catch (Exception $e){
    echo '<font size="5" color="red">Hata</font><hr>'.'Kodu : '.$e->getCode().'<br>'.'Mesajı : <b>'.$e->getMessage().'</b><br>'.'Alındığı Satır : '.$e->getLine().'<br>'.'Alındığı Yer : '.$e->getFile();
}
?>