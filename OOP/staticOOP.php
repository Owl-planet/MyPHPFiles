<?php 
class DogClass{
    const maxEatCookie = 5;
    private static $isHungry = true;
    private static $isTired = false;
    private static $eatenCookieNum = 0;

    public static function feed($cookieNum=1){
        if(self::$isHungry == true){
            self::$eatenCookieNum += $cookieNum;
            echo $cookieNum." Kurabiye Yedim. <br>";
            if(self::maxEatCookie==self::$eatenCookieNum){
                self::$isHungry = false;
                self::$isTired = true;
            }
        }else
            echo "Aç değilim <br>";
    }
    public static function come(){
        if(self::$isTired == false)
            echo "Geldim. <br>";
        else
            echo "Çok yorgunum. <br>";
    }
}
DogClass::feed();
DogClass::feed(2);
DogClass::come();

DogClass::feed();
DogClass::feed();
DogClass::feed();
DogClass::come();

$dogClass = new DogClass;
$dogClass->come();
?>