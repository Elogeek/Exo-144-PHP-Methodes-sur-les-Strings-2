<?php
//exo 1
    $temperature =  "Ajourd'hui il fait -1000 degrés";
    $temperature = addslashes($temperature);

//exo2
    $text = "youpi,je bois un café";
    echo strtoupper($text) . "<br>";
    echo lcfirst($text). "<br>";
    echo ucwords($text). "<br>";

//exo3
    $mot = "Snif j'ai plu de café!";
    echo strtolower($mot). "<br>";
    echo ucfirst($mot). "<br>";

//exo 4
    $phrase = "café, lait, pain, beurre, chocolat,...";
    $array = explode(" ", $phrase);

    foreach ($array as $mot) {
        echo $mot . "<br>";
    }

//exo 5
$array2 = [
    "food", "poisson", "bouffe","pêche", "fruits"
];
$array3 = implode(" ",$array2);

//exo 6
$chaine = "Je suis un super string, je suis créer uniquement ici por l'exo! ";
echo strrev($chaine). "<br>";

$newArray = explode(" ",$chaine);
shuffle($newArray);

//exo 7
$chaine2 = "Hello, nous apprenons PHP";

$chaine2 = strip_tags($chaine2);

echo $chaine2. "<br>";

//exo 8
$chaine3 = "Hello,je suis fatiguée sans café ! <br>";

if(strlen($chaine3) < 500) {
    echo "|".$chaine3;
}

//exo 9
$array4 = str_split($chaine2);

foreach($array4 as $letter) {
    echo $letter ."<br>";
}

//exo 10
echo str_replace("PHP","world",$chaine2)."<br>";

//exo 11
$chaine4 = "Je fais un test";

if(strpos($chaine4, "test")) {
    echo "test est bien ici <br>";
}
else {
    echo "undefined, test n'existe pas";
}

//exo 12
if(strpos($chaine2, "Hello,")) {

    $position = strpos($chaine2, "Hello,");

    if($position === true) {
    echo "La chaine commence par ce mot <br>";
}
if($position !== false) {
    echo "le mot n'est pas dans cette chaine <br>";
}

}

//exo13
$search = "PHP";
$position2 = stripos($chaine2, $search);
    if($position2 !== false) {
    echo "la chaine ce termine par ce mot <br>";
}
