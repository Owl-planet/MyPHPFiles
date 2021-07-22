<?php 
$movies =
    array(
        'lordOfTheRings' =>
        array("Gandalf","Aragorn","Sauron","Frodo","Legolas"),
        'matrix' =>
            array('Neo','Morpheus','Trinity','Cypher','Tank')
    );
// Movies > array ( lordOfTheRings > array | matrix > array )
foreach($movies as $key => $value){
    echo $key;
    echo '<hr>';
    foreach($value as $subKey => $subValue){
        echo $subValue;
        echo '<br>';
    }
    echo '<br>';
}
?>
