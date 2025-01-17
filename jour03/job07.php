<?php
// Créer une chaîne de caractères
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Obtenir la longueur de la chaîne
$length = strlen($str);

// Initialiser une chaîne vide pour stocker le résultat
$newStr = "";

// Parcourir la chaîne et remplacer chaque caractère par le suivant
for ($i = 0; $i < $length - 1; $i++) {
    $newStr .= $str[$i + 1];
}

// Remplacer le dernier caractère par le premier
$newStr .= $str[0];

// Afficher la nouvelle chaîne
echo $newStr;
?>
