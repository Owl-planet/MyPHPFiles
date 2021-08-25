<?php 
class DogClass{
    public $color;
    public $eyeColor;
    public $height;
    public $lenght;
    public $weight;

    public function sit():bool{
        return true;
    }

    public function layDown():bool{
        return true;
    }

    public function shake():bool{
        return true;
    }

    public function come():bool{
        return true;
    }

    public function havla():string{
        return "Hav Hav !";
    }
}
$dogDuman = new DogClass;
$dogDuman->color = "Açık Gri";
$dogDuman->eyeColor = "Siyah";
$dogDuman->height = 60;
$dogDuman->lenght = 155;
$dogDuman->weight = 24;

var_dump($dogDuman);
var_dump($dogDuman->havla());
?>