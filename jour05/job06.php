<?php
function toLeetSpeak(string $str): string {
    // Tableau de correspondance pour leet speak
    $leetMapping = [
        'A' => '4', 'a' => '4',
        'E' => '3', 'e' => '3',
        'L' => '1', 'l' => '1',
        'O' => '0', 'o' => '0',
        'T' => '7', 't' => '7',
        'S' => '5', 's' => '5',
        'B' => '8', 'b' => '8',
        'G' => '6', 'g' => '6'
    ];

    // Remplacement des caractères par leur équivalent leet
    $leetStr = strtr($str, $leetMapping);

    return $leetStr;
}

// Exemple d'utilisation
$originalStr = "Bonjour tout le monde";
echo "Leet Speak: " . toLeetSpeak($originalStr);
?>
