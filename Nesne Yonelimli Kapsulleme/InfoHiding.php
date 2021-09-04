<?php 

class UserClass{
    private $userName;
    private $pass;
    private $fullName;

    function __construct(string $userName=null, string $pass=null, string $fullName=null){
        //$this->setUserName($userName);
        //$this->setFullName($fullName);
        //$this->setPass($pass);
    }

    public function getUserName():string{
        if($this->userName==null)
            throw new Exception('Kullanıcı adı henüz tanımlanmadı');
        return $this -> userName;
    }
    public function setUserName(string $userName):bool{
        if(!preg_match('/^[a-zA-Z0-9]{5,}$/', $userName))
            throw new InvalidArgumentException('Geçersiz kullanıcı adı');
        if(isset($userDb[$userName]))
            throw new OutOfRangeException('Bu Kullanıcı adı daha önce kullanıldı.');
            $this -> userName = $userName;
            return true;
    }
    public function getPass():string{
        if($this -> pass==null)
            throw new Exception('parola henüz tanımlanmadı');
        return $this->pass;
    }
    public function setPass(string $pass):bool{
        if(strlen($pass) < 9)
            throw new LengthException('Parola en az 8 karakter olmalıdır.');
        if(!preg_match("#[0-9]+#", $pass))
            throw new InvalidArgumentException("Parola en az bir rakam içermelidir");
        if(!preg_match("#[A-Z]+#", $pass))
            throw new InvalidArgumentException("Parola en az bir büyük harf içermelidir.");
        if(!preg_match("#[a-z]+#", $pass))
            throw new InvalidArgumentException("Parola en az bir küçük harf içermelidir.");
        $this->pass=md5($pass);
        return true;
    }
    public function getFullName():string{
        if($this->fullName==null)
            throw new Exception("Tam isim henüz tanımlanmadı.");
        return $this->fullName;
    }
    public function setFullName(string $fullName):bool{
        if(strlen($fullName) < 5)
            throw new LengthException("Tam isminiz en az 4 karakter uzunluğunda olmalıdır.(İsim soyisim)");
        if(!preg_match("/^([a-zA-Z' ]+)$/", $fullName))
            throw new InvalidArgumentException("Geçersiz isim ve soyadı.");
        $this->fullName = $fullName;
        return true;
    }
}
/* try {
    $userObj = new UserClass();
    $userObj -> setUserName('OnurIL');
    $userObj -> setPass('Onu');
    $userObj -> setFullName('Onur Ekinci');


    $msg = '<font size="5" color="green">Kullanıcı nesnesi başarıyla türetildi ve veri tabanına yazıldı.</font><hr>'.'Kullanıcı adı : '.$userObj->getUserName().'<br>'.'Kullanıcı parolası (MD5) : '.$userObj->getPass().'<br>'.'Kullanıcı tam ismi : '.$userObj->getFullName().'<br>';
    echo $msg;
} catch (Exception $e){
    echo '<font size="5" color="red">Hata</font><hr>'.'Kodu : '.$e->getCode().'<br>'.'Mesajı : <b>'.$e->getMessage().'</b><br>'.'Alındığı Satır : '.$e->getLine().'<br>'.'Alındığı Yer : '.$e->getFile();
} */
?>