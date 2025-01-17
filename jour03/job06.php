<?php
// Créer une chaîne de caractères
$str = "Les choses que l'on possède finissent par nous posséder.";

// Initialiser une chaîne vide pour stocker le résultat inversé
$reversedStr = "";

// Parcourir la chaîne de la fin vers le début
for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $reversedStr .= $str[$i];
}

// Afficher la chaîne inversée
echo $reversedStr;
?>
