<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style2.css">
    <title>Document</title>
</head>
<body>
    




<?php
function bubblesort(array $tab, bool $croissant = true): array
 {
    $n = count($tab);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($croissant) {
                if ($tab[$j] > $tab[$j + 1]) {
                    // Échange des éléments
                    $temp = $tab[$j];
                    $tab[$j] = $tab[$j + 1];
                    $tab[$j + 1] = $temp;
                }
            } else {
                if ($tab[$j] < $tab[$j + 1]) {
                    // Échange des éléments
                    $temp = $tab[$j];
                    $tab[$j] = $tab[$j + 1];
                    $tab[$j + 1] = $temp;
                }
            }
        }
    }
    return $tab;
}

// Exemple d'utilisation
$tab = ["abc", "ghi", "def"];
$sortedAsc = bubblesort($tab, true);
$sortedDesc = bubblesort($tab, false);

echo "ordre croissant : " . implode(", ", $sortedAsc) . "\n";
echo "ordre décroissant : " . implode(", ", $sortedDesc) . "\n";
?>


</body>
</html>