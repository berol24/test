<?php

$messyArray = [
    "Marguerite" => "Orange",
    "Kiwi",
    7 => "Pomme",
    [
        "Prune",
        "Cerise" => "Cerise"
    ]
];

echo $messyArray[0] . "<br>";
echo $messyArray[8]["Cerise"]. "<br>";
unset($messyArray[8][0]) ;
print_r($messyArray). "<br>";
?>

