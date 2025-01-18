<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dessiner une Maison</title>
    <style>
        pre {
            font-family: monospace;
        }
    </style>
</head>
<body>
    <form action="" method="get">
        <label for="largeur">Largeur :</label>
        <input type="number" id="largeur" name="largeur" min="3" required><br><br>
        
        <label for="hauteur">Hauteur :</label>
        <input type="number" id="hauteur" name="hauteur" min="3" required><br><br>
        
        <input type="submit" value="Dessiner">
    </form>

    <?php
    function dessinerMaison($largeur, $hauteur) {
        // Dessiner le toit
        for ($ligne = 0; $ligne < $hauteur; $ligne++) {
            for ($espace = 0; $espace < $hauteur - $ligne - 1; $espace++) {
                echo "&nbsp;";
            }
            for ($toit = 0; $toit < 2 * $ligne + 1; $toit++) {
                echo "-";
            }
            echo "<br>";
        }

        // Dessiner les murs de la maison
        for ($ligne = 0; $ligne < $hauteur; $ligne++) {
            echo "|";
            for ($mur = 0; $mur < $largeur - 2; $mur++) {
                echo "&nbsp;";
            }
            echo "|<br>";
        }

        // Dessiner la base de la maison
        echo "-";
        for ($base = 0; $base < $largeur - 2; $base++) {
            echo "-";
        }
        echo "-<br>";
    }

    // Vérifier si le formulaire a été soumis
    if (isset($_GET['largeur']) && isset($_GET['hauteur'])) {
        $largeur = (int)$_GET['largeur'];
        $hauteur = (int)$_GET['hauteur'];

        if ($largeur >= 3 && $hauteur >= 3) {
            echo "<pre>";
            dessinerMaison($largeur, $hauteur);
            echo "</pre>";
        } else {
            echo "<p>Veuillez entrer des valeurs de largeur et hauteur supérieures ou égales à 3.</p>";
        }
    }
    ?>
</body>
</html>
