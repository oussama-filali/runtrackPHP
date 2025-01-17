<?php
// je remplis les données dans un tableau
$numbers = array(200, 204, 173, 98, 171, 404, 459);
echo $tab["paire"] . ", " .$tab["impaire"];
echo $tab["nombre"];
// Parcourir le tableau et vérifier si chaque nombre est pair ou impair
foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        echo "$number est paire<br />";
    } else {
        echo "$number est impaire<br />";
    }
}
?>
