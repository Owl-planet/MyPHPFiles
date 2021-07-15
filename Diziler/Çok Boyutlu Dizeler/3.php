<?php 
$movies = [
    'aksiyon' => [
        ['name'=>'Jhon Wick', 'leadActor' => 'Keanu Reeves', 'year' => 2014],
        ['name'=>'Zor Ölüm', 'leadActor' => 'Bruce Willis', 'year' => 1988],
    ],
    'komedi' => [
        ['name'=>'Truman Show','leadActor'=>'Jim Carrey', 'year' => 1998]
    ],
];

if(!isset($movies['aksiyon'][0])){ // Değişkenin var olmadığı durumlarda gövdeyi çalıştırır. exit; komutu betiği sonlandırır.
    echo 'işlem başarısız oldu. 2. anahtar konumunda bir değer yok. lütfen işlemi kontrol ediniz';
    exit;
}

$actionMovie = $movies['aksiyon'][0];
echo 'Aksiyon türünde olan'
        .$actionMovie['name'].',    '
        .$actionMovie['year'].' Yılında vizyona girdi. Başrol oyuncusu '
        .$actionMovie['leadActor'].' .dir';
?>