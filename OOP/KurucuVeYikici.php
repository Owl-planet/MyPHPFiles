<?php 
class DogClass{
    private $color;
    private $eyeColor;
    private $height;
    private $lenght;
    private $weight;

    function __construct(String $color, String $eyeColor, int $height, int $lenght, int $weight){
        $this -> color = $color;
        $this -> eyeColor = $eyeColor;
        $this -> height = $height;
        $this -> lenght = $lenght;
        $this -> weight = $weight;
        echo 'DogClass türünde nesne oluşturuldu';
    }
    function __destruct(){
        echo 'DogClass türünde nesne kaldırıldı';
    }
    public static function Topla(int $birinci, int $ikinci){
        echo (string) "<br>".($birinci+$ikinci);
    }
    public static function Eris(){
        echo "Renk : ".$this -> $color
    } 
}
$dogDuman = new DogClass('Açık gri', 'Siyah', 60, 155, 24);
DogClass::Topla(4,5);
var_dump($dogDuman);
?>
