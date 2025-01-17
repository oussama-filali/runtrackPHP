<?php
// Créer une chaîne de caractères
$str = "Dans l'espace, personne ne vous entend crier";

// Initialiser un compteur
$characterCount = 0;

// Initialiser l'index
$i = 0;

// Parcourir la chaîne et compter chaque caractère
while ($str[$i] !== '') {
    $characterCount++;
    $i++;
}

// Afficher le nombre de caractères
echo "Le nombre de caractères dans la chaîne est : ". 
$characterCount;

?>
