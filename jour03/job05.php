<?php
// Créer une chaîne de caractères
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";

// Initialiser le dictionnaire pour compter les voyelles et les consonnes
$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];

// Définir les voyelles
$vowels = "aeiouyAEIOUY";

// Parcourir la chaîne et compter les voyelles et les consonnes
for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];
    if (ctype_alpha($char)) { // Vérifie si le caractère est une lettre
        if (strpos($vowels, $char) !== false) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}

// Afficher les résultats dans un tableau HTML
echo "<table border='1'>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{$dic['voyelles']}</td>
                <td>{$dic['consonnes']}</td>
            </tr>
        </tbody>
      </table>";
?>
