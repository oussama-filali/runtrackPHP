<?php
for ($i = 0; $i <= 100; $i++) {
    if ($i >= 0 && $i <= 20) {
        // Nombre en italique
        echo "<i>$i</i><br>";
    } elseif ($i >= 25 && $i <= 50) {
        // Nombre souligné
        echo "<u>$i</u><br>";
    } elseif ($i == 42) {
        // Remplacement par "La Plateforme_"
        echo "La Plateforme_<br>";
    } else {
        // Nombre normal
        echo "$i<br>";
    }
}
?>
