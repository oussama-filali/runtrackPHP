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
    // Compter et afficher le nombre d'arguments dans $_GET
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $numberOfGetArguments = count($_GET);
        echo "<p>Le nombre d'arguments GET est : " . $numberOfGetArguments . "</p>";
    }
    ?>
</body>
</html>
