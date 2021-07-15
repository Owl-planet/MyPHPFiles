<?php 
$fruits = ['elma', 'armut', 'çilek', 'karpuz', 'muz'];
$isStrawberryExist = in_array('çilek',$fruits); // in_array, array içinde değer arar
if($isStrawberryExist == true){
    echo 'meyveler arasında çilek var.';
} else {
    echo 'meyveler arasında çilek yok.';
}

$numbers = ['10','20','20',40,50.00];
if(in_array(50,$numbers,true)) //3. parametre true ise veri türleride dikkate alınır
    echo 'integer 50, değerler arasında var.';
else
    echo 'integer 50, değerler arasında yok';
?>