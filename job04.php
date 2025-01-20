<?php
function calcule(float $nombre1, string $operation, float $nombre2): float 
{
    switch ($operation) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            if ($nombre2 != 0) {
                return $nombre1 / $nombre2;
            } else {
                throw new Exception("Division par zéro non permise.");
            }
        case '%':
            if ($nombre2 != 0) {
                return $nombre1 % $nombre2;
            } else {
                throw new Exception("Modulo par zéro non permis.");
            }
        default:
            throw new Exception("Opération non reconnue.");
    }
}

// Exemple d'utilisation
try {
    echo calcule(10, '+', 5); // Affiche 15
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>
