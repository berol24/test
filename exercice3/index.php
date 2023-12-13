<?php
class Calcul
{
    public function removeDoublon($array)
    {

        return array_unique($array);
    }
}


$calculInstance = new Calcul();


$prenoms = ["Guillaume", "Rubens", "Guillaume", "Steven", "Clemence", "Rubens", "Anthony", "Bastien", "Clemence",];


$resultat = $calculInstance->removeDoublon($prenoms);


echo "Tableau original : " . implode(", ", $prenoms) . "\n" . "<br>";

echo "Tableau sans doublons : " . implode(", ", $resultat) . "\n";
?>