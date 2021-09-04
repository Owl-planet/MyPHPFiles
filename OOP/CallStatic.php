<?php 
class DogClass{
    public function __call($name, $args){
        switch($name){
            case 'feed':
                $argNum = count($args);
                if($argNum == 1)
                    return '1 argümanlı feed(besle) metodu çalıştırıldı.';
                else
                    return '2 argümanlı feed(besle) metodu çalıştırıldı.';
                break;
            case 'deneme':
                var_dump($args);
                return "Deneme Çalıştı.";
                break;
        }
    }
    public static function __callStatic($name, $args){
        switch ($name){
            case 'feed':
                $argNum = count($args);
                if($argNum == 1)
                    return '1 argümanlı feed(besle) metodu çalıştırıldı.';
                else
                    return '2 argümanlı feed(besle) metodu çalıştırıldı.';
                break; 
        }
    }
}

$dogDuman = new DogClass;
var_dump($dogDuman -> feed('su'));
var_dump($dogDuman -> deneme("denemeArgümanı"));
var_dump(DogClass::feed('su','yemek'));
?>
