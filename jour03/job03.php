<?php
// Créer une chaîne de caractères
$str = "I'm sorry Dave I'm afraid I can't do that";

// Parcourir la chaîne et afficher uniquement les voyelles
for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];
    if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u' ||
        $char == 'A' || $char == 'E' || $char == 'I' || $char == 'O' || $char == 'U') {
        echo $char;
    }
}
?>
