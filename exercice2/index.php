<?php

$random_words = ["ape", "apple", "zoo", "pie", "elephant", "banana", "picnic", "eye"];

function compareWords($a, $b)
{
    $Comparaison = strlen($a) - strlen($b);
    return ($Comparaison == 0) ? strcmp($a, $b) : $Comparaison;
}
usort($random_words, 'compareWords');

print_r($random_words); 
?>