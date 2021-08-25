<?php
    class personel
    {
        public $adi;          
        public $soyadi;       
        public $yasi;         
	
        public function  yaz_bilgi()
        {
            echo $this->adi . " " . $this->soyadi . " " . $this->yasi . '<br/>';
        }
    }

    $obj_per01 = new personel();
    $obj_per02 = new personel();

    $obj_per01->adi = "Mehmet";       
    $obj_per01->soyadi = "Çalışkan";  
    $obj_per01->yasi = 25;            

    $obj_per02->adi = "Selami";       
    $obj_per02->soyadi = "Yalçın";  
    $obj_per02->yasi = 32;

    $obj_per01->yaz_bilgi();
    $obj_per02->yaz_bilgi();
?>