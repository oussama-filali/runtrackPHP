
<?php
for ($number = 0; $number <= 1337; $number++) {
    // Vérifie si le nombre doit être ignoré.
    if ($number == 26 || $number == 37 || $number == 88 || $number == 1111) {
        continue; // Passe au nombre suivant sans afficher celui-ci.
    }
    // Affiche le nombre avec un retour à la ligne.
    echo $number . "<br>";
}
?>
