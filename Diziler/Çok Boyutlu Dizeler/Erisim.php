<?php 
$movies = [
    'aksiyon' => [
        ['name' => 'Jhon Wick', 'leadActor' => 'Keanu Reeves', 'year' => 2014]
    ],
    'komedi' => [
        ['name' => 'Stan', 'leadActor' => 'mardin', 'year' => 2010]
    ]
];
var_dump($movies['komedi'][0]['name']);
?>