<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire GET</title>
</head>
<body>
    <form action="" method="get">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br><br>
        
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom"><br><br>
        
        <label for="age">Âge :</label>
        <input type="number" id="age" name="age"><br><br>
        
        <input type="submit" value="Envoyer">
    </form>

    <?php
    // Vérifier si des arguments GET ont été passés
    if (!empty($_GET)) {
        echo "<table border='1'>
                <thead>
                    <tr>
                        <th>Argument</th>
                        <th>Valeur</th>
                    </tr>
                </thead>
                <tbody>";
        
        // Parcourir et afficher chaque argument et sa valeur
        foreach ($_GET as $key => $value) {
            echo "<tr>
                    <td>" . htmlspecialchars($key) . "</td>
                    <td>" . htmlspecialchars($value) . "</td>
                  </tr>";
        }
        
        echo "</tbody>
              </table>";
    }
    ?>
</body>
</html>
