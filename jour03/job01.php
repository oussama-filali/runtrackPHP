<?php
// Création du tableau de nombres avec leurs types dans un tableau multidimensionnel
$numbers = [200, 204, 173, 98, 171, 404, 459];
$data = [];

// Remplissage du tableau multidimensionnel
foreach ($numbers as $number) {
    $type = ($number % 2 == 0) ? "Pair" : "Impair";
    $data[] = ["number" => $number, "type" => $type];
}

// Affichage du tableau HTML
echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";
echo "<thead>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Type</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

// Parcours du tableau multidimensionnel pour remplir le tableau HTML
foreach ($data as $row) {
    echo "<tr>";
    echo "<td>{$row['number']}</td>"; // Colonne pour le nombre
    echo "<td>{$row['type']}</td>";   // Colonne pour le type
    echo "</tr>";
}

// Fin du tableau HTML
echo "</tbody>";
echo "</table>";
?>
