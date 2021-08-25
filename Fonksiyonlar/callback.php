<?php 
$persons = array(
    ['name' => 'Merve', 'age' => 26, 'experienceYear' => 3, 'englishLevel' => 1],
    ['name' => 'Barbaros', 'age' => 34, 'experienceYear' => 4, 'englishLevel' => 2],
    ['name' => 'Zehra', 'age' => 30, 'experienceYear' => 7, 'englishLevel' => 3],
    ['name' => 'Erken', 'age' => 34, 'experienceYear' => 4, 'englishLevel' => 1],
    ['name' => 'Pelin', 'age' => 27, 'experienceYear' => 3, 'englishLevel' => 1],
);

$sortByCustomFilter = function($personA,$personB){
    // soryByCustomFilter adında bir lambda oluşturuyoruz.
    // ve bu fonksiyon 2 tane parametre alıyor.
    if($personA['experienceYear'] == $personB['experienceYear']){
        // personA'nın experienceYear değeri personB'nin experienceYear değerine
        // eşit ise alttaki koşula bakacak.
        if($personA['englishLevel'] != $personB['englishLevel'])
        // eğer personA'nın englishLevel'i personB'nin englishLevel'ine eşit
        // değil ise alttaki return ifadesini çalıştırır.
            return $personA['englishLevel'] < $personB['englishLevel'] ? 1 : -1;
            // personA'nın englishLevel'i küçük ise personB'nin englishLevel'inden
            // 1 döndür, değilse -1 döndür.
        else{
            // Eğer experienceYear ve englishLevel eşit ise bu blok devreye girer.
            if($personA['age'] != $personB['age'])
            // Eğer personA'nın age'i personB'nin age'ine eşit değilse attaki
            // return ifadesi çalışır.
                return $personA['age'] < $personB['age'] ? 1 : -1;
                // perosnA'nın age'i küçük ise personB'nin age'inden 1 döndürür
                // değilse -1 döndürür.
            else
                return 0;
        }   
    }
    return $personA['experienceYear'] < $personB['experienceYear'] ? 1 : -1;
    // personA'nın experienceYear'ı küçükse personB'nin experienceYear'dan
    // 1 döndür, değilse -1 döndür.
};

usort($persons, $sortByCustomFilter); // unsort -1 ve 1 değerlerine göre sıralama
// yapar.
var_dump($persons);
?>