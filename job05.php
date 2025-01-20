<?php
function occurrences(string $str, string $char): int 
{
    return substr_count($str, $char);
}

// Exemple d'utilisation
$str = "Bonjour";
$char = "o";
echo "Le nombre d'occurrences de '$char' dans '$str' est : " . 
occurrences($str, $char);
?>
