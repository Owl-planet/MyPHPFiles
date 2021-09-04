<?php

class DogClass {
    private $color;
    private $eyeColor;
    private $height;
    private $length;
    private $weight;

    public function __get($name){
        return $this -> $name;
    }

    public function __set($name, $value){
        if($name == 'name')
            $this -> $name = 'Benim Adım '.$value;
        else
            $this -> $name = $value;
    }

    public function __isset($name){
        return isset($this->$name);
    }

    public function __unset($name){
        unset($this -> $name);
    }
}

$dogDuman = new DogClass;
$dogDuman -> name = "Duman";
$dogDuman -> color = "Açık Gri";
var_dump(isset($dogDuman -> color));
unset($dogDuman -> length);
var_dump($dogDuman);
unset($dogDuman -> color); // Unset kaldırır.
var_dump($dogDuman); 
?>