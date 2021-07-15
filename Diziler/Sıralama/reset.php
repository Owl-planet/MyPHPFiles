<?php 
$people = ['Ömer', 'Aybüke', 'Mehmet', 'Ali', 'Maide', 'Salim', 'Hilal'];
end($people);
prev($people);
prev($people);
echo current($people);
reset($people);
echo current($people);
// internals pointers
?>