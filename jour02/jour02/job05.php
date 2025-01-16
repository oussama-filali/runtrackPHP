<?php
// Fonction pour vérifier si un nombre est premier
function is_prime($n) {
    if ($n < 2) {
        return false; // Les nombres inférieurs à 2 ne sont pas premiers
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false; // Trouvé un diviseur, donc pas premier
        }
    }
    return true; // Aucun diviseur trouvé, donc premier
}

// Boucle pour afficher les nombres premiers jusqu'à 1000
for ($i = 2; $i <= 1000; $i++) {
    if (is_prime($i)) {
        echo "$i<br>"; // Affiche le nombre suivi d'un retour à la ligne
    }
}
?>
