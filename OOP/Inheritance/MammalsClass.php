<?php 
class MammalsClass extends AnimalClass{
    private $reProduction = 'doğum';

    function __construct(){
        parent::__construct('memeli');
    }
    public function getReproduction(){
        return $this -> reProduction;
    }
}
?>