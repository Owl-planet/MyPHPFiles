<?php 
$lordOfTheRingArr = ["Gandalf","Aragorn","Sauron","Frodo","Legolas"];
foreach($lordOfTheRingArr as $value){
    echo $value.'<br>';
}
echo '<br>';
$lordOfTheRingArr = ["Gandalf","Aragorn","Sauron","Frodo","Legolas"];
foreach($lordOfTheRingArr as $value):
    echo $value.'<br>';
endforeach;
echo '<br>';
$lordOfTheRingArr = ["Gandalf","Aragorn","Sauron","Frodo","Legolas"];
foreach($lordOfTheRingArr as $value)
    echo $value.'<br>';

?>