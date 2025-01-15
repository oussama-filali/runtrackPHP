<?php
for ($number = 0; $number <= 1337; $number++) {
    if ($number == 42) {
        echo "<b><u>$number</u></b><br>";  // Gras et souligné pour 42.
    } else {
        echo $number . "<br>";  // Sinon, affiche le nombre normalement.
    }
}
?>
